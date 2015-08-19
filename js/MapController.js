var map;
var tiled;

/*geographic = new OpenLayers.Projection("EPSG:4326");
mercator = new OpenLayers.Projection("EPSG:3857");*/

var zoneIDLookup = ["D","P","R","C","IC","AP"];

var zoneLookup = {
  "4" : {fillColor: "rgba(31, 96, 233, 0.2)", strokeColor: "rgba(31, 96, 233, 0.8)"},
  "1" : {fillColor: "rgba(255, 145, 0, 0.2)", strokeColor: "rgba(255, 145, 0, 0.8)"},
  "5" : {fillColor: "rgba(255, 40, 0, 0.2)", strokeColor: "rgba(255, 40, 0, 0.8)"},
  "0" : {fillColor: "rgba(238, 200, 0, 0.2)", strokeColor: "rgba(238, 200, 0, 0.8)"},
  "2" : {fillColor: "rgba(12, 182, 85, 0.2)", strokeColor: "rgba(12, 182, 85, 0.8)"},
  "3" : {fillColor: "rgba(255, 106, 142, 0.2)", strokeColor: "rgba(255, 106, 142, 0.8)"},
};



function MapController() {
  this.layers = {};
  this.map;
}

MapController.prototype.getID = function () {
  return ''
  return this.id;
};

MapController.prototype._setupVisLayer = function() {
  if (!this.map) {
    console.error("Map not defined, please define a map before creating animated layer");
  }

  //create canvas and animater
  var url = "map/imgs/" + this.getID() + "/agg";
  this.animatedRaster = new AnimatedRaster({
    url: url,
    startTime: "0",
    extent: [16078473, -2203421, 16365455, -1723647]
  });
  this.animater = new Animater(this.animatedRaster);

  that = this;

  this.layers.dispersal = new ol.layer.Image({
    source: new ol.source.ImageCanvas({
      canvasFunction: function canvasEscape(extent, resolution, pixelRatio, size, projection){return that.animatedRaster.getCanvas(extent, resolution, pixelRatio, size, projection);},
  	  ratio: 1.5,
  	  projection: 'EPSG:3857'
    }),
    opacity:1
  })

  this.animatedRaster.onframe(function updateOverlay(){
    that.layers.dispersal.changed();
  });

  this.map.addLayer(this.layers.dispersal)
}

MapController.prototype.setVisTime = function(val) {
  this.animater.animateTo(val);
}

MapController.prototype.setMode = function (mode) {
    //define what layers are shown
};
/*
MapController.prototype.editMode = function() {

};

MapController.prototype.overviewMode = function() {

};

MapController.prototype.planMode = function() {

};

MapController.prototype.zoneMode = function() {

};*/

MapController.prototype.setTimeline = function(id, yearStart, yearEnd) {

};

MapController.prototype.addDispersalLayer = function(file,idx) {

};

MapController.prototype.addHSLayer =  function() {
  if (this.layers.hasOwnProperty("HSLayer")) {
    console.debug("Habitat Suitability layer already exists. Exiting.");
    return false;
  }

  this.layers.HSLayer = new ol.layer.Tile({
    source: new ol.source.TileWMS({
      url:'map/wms.php',
      params: {
       DATA: 'max_pre1.asc',
        LAYERS: 'habitat',
        MAP: 'hs.map'
      }
    }),
    opacity:0.5
  })

  this.map.addLayer(this.layers.HSLayer);
};

MapController.prototype.showZones = function(year) {

};

MapController.prototype._setupWFS = function () {
  this.geoJSONFormat = new ol.format.GeoJSON();
  var that = this;

  //create vector source
  this.vectorSource = new ol.source.Vector({
    loader: function(extent, resolution, projection) {
      var url = "http://localhost:8080/geoserver/wema/wfs?service=WFS&version=1.1.0&request=GetFeature&"+
                "typeName=wema:management_strategies&maxFeatures=50&"+
                "outputFormat=application/json"+
                '&srsname=EPSG:3857';
      //loader function
      $.ajax({url:url, dataType: 'json', jsonp:false,
        success: function(data) {
          that.vectorSource.addFeatures(that.geoJSONFormat.readFeatures(data));
        }
      })
    }
  });

  //management zone styles
  var managementActionStyles = (function() {
    return function(feature, resolution) {
      var defaultStyle = [new ol.style.Style({
        fill: new ol.style.Fill({color: zoneLookup[feature.get('controlMechanism')].fillColor}),
        stroke: new ol.style.Stroke({color: zoneLookup[feature.get('controlMechanism')].strokeColor, width: 4})
      })];
      return defaultStyle;
    };
  })();

  //create layer
  this.layers.mangementActions = new ol.layer.Vector({
    source: this.vectorSource,
    style:managementActionStyles
  });

  this.map.addLayer(this.layers.mangementActions);
};

//setup map function
MapController.prototype.setupMap = function() {
  this.map = new ol.Map({
    interactions: ol.interaction.defaults().extend([
      new ol.interaction.DragRotateAndZoom()
    ]),
    layers: [
      new ol.layer.Tile({
        source: new ol.source.XYZ({
          url: 'http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',
        })
      })
    ],
    target: 'map',
    view: new ol.View({
      center: ol.proj.transform([145.8,-17.2], 'EPSG:4326', 'EPSG:3857'),
      zoom: 10
    })
  });

  this.addHSLayer();
  this._setupVisLayer();
  this._setupWFS();

}
