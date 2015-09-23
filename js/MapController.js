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
  this.WFSTLayers = {};
  this.map;
  this.interaction = false;

  this.id;
  this.zone;
  this.time;
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
  this.time = val;
  this.animater.animateTo(val);
}

MapController.prototype.setMode = function (mode) {
  this.mode = mode;

  if (mode == "edit") {

  }
};

MapController.prototype.getInteractionMode = function() {
  if (this.interaction) {
    return this.interaction;
  }
  return false;
}

MapController.prototype.setInteractionMode = function(mode) {
  console.log("Set Interaction Mode: " + mode)
  //remove current listener
  this.interaction = false;

  //if just turning off return
  if (mode == false) {
    this.WFSTLayers.managementActions.setMode(false);
    return;
  }

  //fetch interaction
  if (this.mode == "zone") {
    this.WFSTLayers.managementActions.setMode("draw");
    this.interaction = this.WFSTLayers.managementActions.getDrawInteraction();
  }

  //this.map.addInteraction(this.interaction);
}
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

MapController.prototype.setZone = function(zone) {
  this.zone = zone;
}

MapController.prototype.addDispersalLayer = function(file,idx) {

};

MapController.prototype.getMetadata = function() {
  var metadata = {controlMechanism:this.zone, time:this.time, timeline:this.id};
  return metadata;
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

//setup map function
MapController.prototype.setupMap = function() {
  var that = this;
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

  //setup management actions wfs
  this.WFSTLayers.managementActions = new WFSTLayer({
    url: "http://localhost:8080/geoserver/wema/wfs",
    featureNS: "wema",
    featureType: "management_strategies"
  });
  this.layers.managementActions = this.WFSTLayers.managementActions.getLayer();
  this.map.addLayer(this.layers.managementActions);
  this.WFSTLayers.managementActions.drawPropertiesFunction(function getDrawMetadata() {
    return that.getMetadata();
  });


  //add interaction handlers
  this.map.addInteraction(this.WFSTLayers.managementActions.getDrawInteraction());
  this.map.addInteraction(this.WFSTLayers.managementActions.snap);

}
