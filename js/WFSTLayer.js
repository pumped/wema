

function WFSTLayer(params) {
  if (!params.hasOwnProperty('url')) {
    console.error("WFST layer requires url paramater");
    throw "No URL Provided";
    return false;
  }
  if (!params.hasOwnProperty('featureNS') || !params.hasOwnProperty('featureType')) {
    console.error("WFST layer requires the following both featureNS and featureType");
    throw "No featureNS or featureType Provided";
    return false;
  }

  this.params = params;

  this.drawProperties = {
    controlMechanism: 2
  };

  this.modificationTable = {};

  this._setupWFS();
  this._setupDrawing();
  this._setupModify();
}

//sets the interaction mode with the layer
WFSTLayer.prototype.setMode = function(mode) {

  this.draw.setActive(false);
  this.select.setActive(false);
  this.modify.setActive(false);
  this._enableDelete(false);
  //this.delete.setActive(false);

  if (mode == "draw") {
    //console.log("draw on");
    this.draw.setActive(true);
    //console.log(this.draw.getActive());
  } else if (mode == "delete") {
    this._enableDelete(true);
    this.modify.setActive(true);
    this.select.setActive(true);
  } else if (mode == "edit") {
    this.select.setActive(true);
    this.modify.setActive(true);
  } else {
    //off
    //console.log(mode);
    this.draw.setActive(false);

  }
}

//return the layer
WFSTLayer.prototype.getLayer = function () {
  return this.layer;
};

WFSTLayer.prototype.setDrawProperties = function(drawProperties) {
  this.drawProperties = drawProperties;
}

WFSTLayer.prototype._setupWFS = function () {
  this.geoJSONFormat = new ol.format.GeoJSON();
  var that = this;

  //create vector source
  this.vectorSource = new ol.source.Vector({
    loader: function(extent, resolution, projection) {
      var url = that.params.url + "?service=WFS&version=1.1.0&request=GetFeature&"+
                "typeName=wema:management_strategies&maxFeatures=1000&"+
                "outputFormat=application/json"+
                "&srsname=EPSG:3857";

      //loader function
      $.ajax({url:url, dataType: 'json', jsonp:false,
        success: function(data) {
          that.vectorSource.addFeatures(that.geoJSONFormat.readFeatures(data));
        }
      });
    }
  });

  //management zone styles
  var managementActionStyles = (function() {
    return function(feature, resolution) {
      if (feature.get('controlMechanism')) {
        var defaultStyle = [new ol.style.Style({
          fill: new ol.style.Fill({color: zoneLookup[feature.get('controlMechanism')].fillColor}),
          stroke: new ol.style.Stroke({color: zoneLookup[feature.get('controlMechanism')].strokeColor, width: 4})
        })];
      } else {
        var defaultStyle = [new ol.style.Style({
          fill: new ol.style.Fill({color: "rgb(250, 87, 243)"}),
          stroke: new ol.style.Stroke({color: "rgb(250, 87, 243)", width: 4})
        })];
      }
      return defaultStyle;
    };
  })();


  this.layer = new ol.layer.Vector({
    source: this.vectorSource,
    style:managementActionStyles
  });
};

//this is so metadata can change while still in drawing mode
WFSTLayer.prototype.drawPropertiesFunction = function(callback) {
  console.log("draw props callback set");
  this.drawPropertiesCallback = callback;
}

WFSTLayer.prototype.getDrawProperties = function() {
  if (typeof this.drawPropertiesCallback === "function") {
    return this.drawPropertiesCallback();
  } else {
    return {};
  }
}

// setup modify interaction handler
WFSTLayer.prototype._setupModify = function () {
  //console.log(this.vectorSource);
  //console.log(this.vectorSource.getFeatures());
  this.select = new ol.interaction.Select({
    wrapX: false
  });
  var that = this;
  //deletes
  this.select.on("select", function(e){
    //if deleting
    if (that.delete) {
      var features = e.target.getFeatures().getArray();
      if (features.length > 0) {
        var featureID = features[0].getId();

        //save & delete in view
        that._saveChanges(null,null,features,function successfulTransaction(data){
          console.debug("succesfully deleted");

          //delete it
          that._removeSelectedFeature(featureID);

          //deselect feature to finish deletion
          that.select.getFeatures().clear();
        });
      }
    }
  });

  //when feature is selected store revision for modification detection
  this.select.getFeatures().on("add", function(e){
    var feature = e.element;
    that.modificationTable[feature.getId()] = feature.getRevision();
  });

  //when feature is de-selected, save it if modified
  this.select.getFeatures().on("remove", function(e) {
    var feature = e.element;
    var id = feature.getId();
    if (that.modificationTable.hasOwnProperty(id))
    if (that.modificationTable[id] != feature.getRevision()) {
      console.debug("Feature changed, saving");
      that._saveChanges(null,[feature],null);
    }
  });

  //modifications
  this.modify = new ol.interaction.Modify({
    features:this.select.getFeatures()
  });
  this.select.setActive(false);
};

WFSTLayer.prototype._removeSelectedFeature = function(removeID) {
  var features = this.vectorSource.getFeatures();
  //console.log(features);
  if (features != null && features.length > 0) {
    for (x in features) {
      var id = features[x].getId();
      //console.log(id);
      if (id == removeID) {
        this.vectorSource.removeFeature(features[x]);
        break;
      }
    }
  }
};

WFSTLayer.prototype._enableDelete = function (val) {
  this.delete = val;
  if (val) {
    this.deleteFunction = function(event) {
      return ol.events.condition.singleClick(event);
    }
  } else {
    this.deleteFunction = function(event) {
      return false;
    }
  }
}

WFSTLayer.prototype._saveChanges = function(add, modify, del, successFunction, errorFunction) {

  if (typeof add == "undefined") {
    add = null;
  }
  if (typeof modify == "undefined") {
    modify = null;
  }
  if (typeof del == "undefined") {
    del = null;
  }

  //create wfs transaction
  var options = {
    featureNS: this.params.featureNS,
    featureType: this.params.featureType,
    gmlOptions: {srsName: "EPSG:3857"}
  };
  var transaction = new ol.format.WFS(options);

  //create transaction xml string
  var transactionXML = transaction.writeTransaction(add,modify,del,options);
  var serializer = new XMLSerializer();
  var transactionString = serializer.serializeToString(transactionXML);

  //post transaction
  $.ajax({
    url:this.params.url,
    data:transactionString,
    jsonp:false,
    type:"POST",
    method:"POST",
    contentType: "application/xml",
    success: function(data) {
      if (typeof successFunction == "function") {
        successFunction(data, add);
      } else {
        console.debug("Transaction Succeded");
        console.debug(data);
      }
    },
    error: function(e) {
      if (typeof errorFunction == "function") {
        errorFunction(e);
      } else {
        console.error("Transaction Failed")
        if (e.hasOwnProperty('responseText')) {
            console.error('WFS Transaction Failed:\n Code:'+e.status+' \n'+e.responseText)
        }
      }
    }
  });
};

// setup drawing interaction handler
WFSTLayer.prototype._setupDrawing = function () {
  this.draw = new ol.interaction.Draw({
    source:this.vectorSource,
    type:'MultiPolygon'
  });

  this.draw.setActive(false);

  this.snap = new ol.interaction.Snap({
    source: this.vectorSource
  });

  var that = this;

  this.drawFinishListener = this.draw.on("drawend", function(e){

    //abort if no features
    if (!e.hasOwnProperty('feature')) {
      return;
    }

    //set draw properties
    var drawProperties = that.getDrawProperties();
    console.log(drawProperties);
    e.feature.setProperties(drawProperties);

    //fix geometry name
    e.feature.set('the_geom',e.feature.getGeometry());
    e.feature.setGeometryName("the_geom");

    that._saveChanges([e.feature],null,null, function success(data,features){
      console.log(data);
      //l=$(data).find("totalInserted");
      if (parseInt($(data).find("totalInserted").text()) == 1) {
        var fid = $(data).find("FeatureId").attr("fid");
        console.log(features);
        features[0].setId(fid);
      }
      /*if (features) {

      }*/
    });
  })
};

WFSTLayer.prototype.getDrawInteraction = function () {
    return this.draw;
};
