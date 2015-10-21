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
  this.visID;
  this.speciesID;
  this.zone;
  this.time;
}

MapController.prototype.getID = function () {
  //return ''
  return this.id;
};

MapController.prototype._getVisURL = function() {
  console.log(this.speciesID + " - " + this.visID);
  var url = "map/imgs";
  if (this.speciesID && this.visID) {
    url += "/" + this.speciesID + "-" + this.visID;
  }
  url += "/agg";

  return url;
}

MapController.prototype._setupVisLayer = function() {
  if (!this.map) {
    console.error("Map not defined, please define a map before creating animated layer");
  }

  //create canvas and animater
  var url = this._getVisURL();
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

MapController.prototype.getMode = function (mode) {
  return this.mode;
}

MapController.prototype.setMode = function (mode) {
  this.mode = mode;
  console.debug(mode);
  if (mode == "edit") {
    this.WFSTLayers.managementActions.setVisibility(false);
    this.WFSTLayers.distributionLayer.setVisibility(true);
  } else if (mode == "zone") {
    this.WFSTLayers.distributionLayer.setVisibility(false);
    this.WFSTLayers.managementActions.setVisibility(true);
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
  this.interaction = mode;

  //if just turning off return
  if (mode == false) {
    this.WFSTLayers.managementActions.setMode(false);
    return;
  }

  //fetch interaction
  console.log(this.mode);
  if (this.mode == "zone") {
    if (mode == "draw") {
      this.WFSTLayers.managementActions.setMode("draw");
    } else if (mode == "edit") {
      this.WFSTLayers.managementActions.setMode("edit");
    } else if (mode == "delete") {
      this.WFSTLayers.managementActions.setMode("delete");
    }
  } else if (this.mode == "edit") {
    if (mode == "polygon") {
      this.WFSTLayers.distributionLayer.setMode("draw");
    } else if (mode == "edit") {
      this.WFSTLayers.distributionLayer.setMode("edit");
    } else if (mode == "delete") {
      this.WFSTLayers.distributionLayer.setMode("delete");
    }
  }

  //this.map.addInteraction(this.interaction);
}

MapController.prototype.setVisTimeline = function(id) {
  this.visID = id;

  //update animated raster url
  this.animatedRaster.changeParam("url",this._getVisURL());
};

MapController.prototype.setVectorTimeline = function(id) {
  this.id = id;

  //show/hide as necessary
};

MapController.prototype.setSpecies = function (species) {
  this.speciesID = species;
};

MapController.prototype.setZone = function(zone) {
  this.zone = zone;
}

MapController.prototype.addDispersalLayer = function(file,idx) {

};

MapController.prototype.getMetadata = function() {
  var metadata = {
                    controlMechanism:this.zone,
                    time:this.time,
                    timeline:this.id,
                    species:this.speciesID
                  };

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
      }),
      /*new ol.layer.Tile({
        source: new ol.source.XYZ({
          //url: 'http://{s}.basemaps.cartocdn.com/dark_nolabels/{z}/{x}/{y}.png',
          url: 'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
          //url: 'http://tile.thunderforest.com/transport-dark/{z}/{x}/{y}.png',
          attributions: [new ol.Attribution({ html: ['&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'] })]
        })
      })*/
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

  //setup distribution layer
  this.WFSTLayers.distributionLayer = new WFSTLayer({
    url: "http://localhost:8080/geoserver/wema/wfs",
    featureNS: "wema",
    featureType: "distribution",
    geometryType: "Polygon",
    geometryName: "geometry"
  });
  this.layers.distributionLayer = this.WFSTLayers.distributionLayer.getLayer();
  this.map.addLayer(this.layers.distributionLayer);

  //add interaction handlers
  this.map.addInteraction(this.WFSTLayers.managementActions.getDrawInteraction());
  this.map.addInteraction(this.WFSTLayers.managementActions.snap);
  this.map.addInteraction(this.WFSTLayers.managementActions.select);
  this.map.addInteraction(this.WFSTLayers.managementActions.modify);

  this.map.addInteraction(this.WFSTLayers.distributionLayer.getDrawInteraction());
  this.map.addInteraction(this.WFSTLayers.distributionLayer.snap);
  this.map.addInteraction(this.WFSTLayers.distributionLayer.select);
  this.map.addInteraction(this.WFSTLayers.distributionLayer.modify);

}
