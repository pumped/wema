

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

  this._setupWFS();
  this._setupDrawing();
  this._setupModify();
}

//sets the interaction mode with the layer
WFSTLayer.prototype.setMode = function(mode) {
  if (mode == "draw") {
    console.log("draw on");
    this.draw.setActive(true);
    console.log(this.draw.getActive());
  } else if (mode == "delete") {
    this.draw.setActive(false);
  } else {
    //off
    console.log(mode);
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
                "typeName=wema:management_strategies&maxFeatures=50&"+
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
  console.log(this.vectorSource);
  /*his.modify = new ol.interaction.Modify({
    features: this.vectorSource.getFeatures(),
  })*/
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

    //create wfs transaction
    var options = {
      featureNS: that.params.featureNS,
      featureType: that.params.featureType,
      gmlOptions: {srsName: "EPSG:3857"}
    };
    var transaction = new ol.format.WFS(options);

    //fix geometry name
    e.feature.set('the_geom',e.feature.getGeometry());
    e.feature.setGeometryName("the_geom");

    //create transaction xml string
    var transactionXML = transaction.writeTransaction([e.feature],null,null,options);
    var serializer = new XMLSerializer();
    var transactionString = serializer.serializeToString(transactionXML);

    //post transaction
    $.ajax({
      url:that.params.url,
      data:transactionString,
      jsonp:false,
      type:"POST",
      method:"POST",
      contentType: "application/xml",
      success: function(data) {
        console.log(data);
      },
      error: function(e) {
        if (e.hasOwnProperty('responseText')) {
            console.error('WFS Transaction Failed:\n Code:'+e.status+' \n'+e.responseText)
        }
      }
    });
  })
};

WFSTLayer.prototype.getDrawInteraction = function () {
    return this.draw;
};
