var map;
var tiled;

geographic = new OpenLayers.Projection("EPSG:4326");
mercator = new OpenLayers.Projection("EPSG:3857");

//http://colorschemedesigner.com/#0742qw0w0w0w0
var zoneColors = [new OpenLayers.StyleMap({
    "default": new OpenLayers.Style({ //Prevention
        fillColor: "#00ee66",
        fillOpacity: 0.4,
        strokeColor: "#00cc44",
        strokeWidth: 3,
        pointRadius: 6
    }),
    "select": new OpenLayers.Style({
        fillColor: "#22ff88",
        fillOpacity: 0.2,
        strokeColor: "#00cc44",
        strokeWidth: 6,
        pointRadius: 6,
    }),
    "temporary": new OpenLayers.Style({
        fillColor: "#3F3F3F",
        fillOpacity: 0.4,
        strokeColor: "#3F3F3F",
        strokeWidth: 3,
        pointRadius: 6
    })
})];

var zoneIDLookup = ["D","P","R","C","IC","AP"];

var zoneLookup = {
  "4" : {fillColor: "#1F60E9", strokeColor: "#1F60E9"},
  "1" : {fillColor: "#FF9100", strokeColor: "#FF9100"},
  "5" : {fillColor: "#ff2800", strokeColor: "#ff2800"},
  "0" : {fillColor: "#EEC800", strokeColor: "#EEC800"},
  "2" : {fillColor: "#0CB655", strokeColor: "#0CB655"},
  "3" : {fillColor: "#FF6A8E", strokeColor: "#FF6A8E"},
};

zoneColors[0].addUniqueValueRules("default","controlMechanism",zoneLookup);
zoneColors[0].addUniqueValueRules("select","controlMechanism",zoneLookup);

function zoneAdded(e) {
  //console.log(e);
  //console.log(zoneIDLookup.indexOf(zones.currentMode));

  //console.log(mc.year);

  //console.log(e);


  //reduce hand drawn polygon
  var linearRing = new OpenLayers.Geometry.LinearRing(e.geometry.components[0].components[0].components);
  var lineString = new OpenLayers.Geometry.LineString(linearRing.components);
  var newLineString = lineString.simplify(100);

  if (newLineString.components.length > 60) {
    var newLineString = newLineString.simplify(200);
  }

  var newLinearRing = new OpenLayers.Geometry.LinearRing(newLineString.getVertices());
  var newPolygon = new OpenLayers.Geometry.Polygon(newLinearRing);
  var reducedFeature = new OpenLayers.Feature.Vector(newPolygon);

  e.geometry.components[0].components[0].components = reducedFeature.geometry.components[0].components;

  var cm = zoneIDLookup.indexOf(zones.currentMode);
  console.log(mc.year);
  e.attributes = {'controlMechanism':cm,
                  'timeline':mc.timelineID,
                  'time':mc.year};
  console.log(mc.timelineID);

  $('#'+e.geometry.components[0].id).attr('class','zone_'+zoneIDLookup[cm]+'_path zonePath');
  /*e.style = zoneColors[0];
  console.log(zoneColors[0]);
  console.log(e);*/

  //redraw layer
  mc.wfstPolygon.redraw();

  //calculate cost
  var cost = parseInt($('#costDisplay .value').html());
  var additional = Math.floor(Math.random() * 8000) + 1000;
  $('#costDisplay .value').html(cost+additional);

}


function MapController() {
    this.mode = 'edit';
    this.zone = 'IC';
    this.timelineLayers = [];
    this.timelineID = '';
    this.year = 2014; //default a year for testing
}

MapController.prototype.editMode = function() {
    this.mode = 'edit';

    //setup controls
    iface.tools.setMode(this.mode);

    //hide layers
    this.wfstPoint.setVisibility(true);
    this.editTiled.setVisibility(true);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(false);

    this.disableLayers();
    //setup layers
};

MapController.prototype.overviewMode = function() {
    this.mode = 'overview';

    iface.tools.setMode(this.mode);

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(true);

    this.disableLayers();
};

MapController.prototype.planMode = function() {
    this.mode = 'plan';

    iface.tools.setMode(this.mode);

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(false);

    this.enableLayers();
    this.showLayer(this.year);
};

MapController.prototype.zoneMode = function() {
    this.mode = 'zone';

    iface.tools.setMode(this.mode);

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(true);
    this.tiled.setVisibility(false);

    this.disableLayers();
    this.showLayer(this.year);
};

MapController.prototype.addTimeline = function(id, yearStart, yearEnd) {
  console.log("switched to timeline: " + id);
  this.timeLength = (yearEnd - yearStart) +1;
  this.yearStart = yearStart;
  this.yearEnd = yearEnd;
  this.timelineID = id;

  //delete all layers
  for (var i=0;i<this.timelineLayers.length;i++) {
    this.map.removeLayer(this.timelineLayers[i]);
  }
  this.timelineLayers = [];

  //add new layers
  for (var i=0;i<this.timeLength;i++) {
    //console.log("Added layer: " + i);
    var file = id+'/agg'+(i)+'.png';
    this.addDispersalLayer(file, i);
  }
  this.showLayer(this.yearStart);

  //set zones to top again
  this.wfstPolygon.setZIndex( 1001 );

};

MapController.prototype.addDispersalLayer = function(file,idx) {
    var newLayer = new OpenLayers.Layer.Image(
                'tl'+idx.toString(),
                'map/imgs/'+file,
                new OpenLayers.Bounds(16078473, -2203421, 16365455, -1723647),
                new OpenLayers.Size(3084, 5045), {
                  isBaseLayer: false,
                  transparent: true,
                  numZoomLevels: 15,
                  maxResolution: "auto",
                  projection: mercator,
                  strategies: [new OpenLayers.Strategy.Fixed()],
                  opacity:0.8,
                  displayInLayerSwitcher: true
                }
            );
    /*this.map.setLayerIndex(newLayer, 1);*/
    this.map.addLayer(newLayer);
    this.timelineLayers[idx] = newLayer;
};

MapController.prototype.disableLayers = function(exclude) {
  exclude = exclude || [];

  for (var i=0;i<this.timelineLayers.length;i++) {
      //check it's not ignored
      if (exclude.indexOf(i) == -1) {
       this.timelineLayers[i].setVisibility(false);
      }
  }
};

MapController.prototype.enableLayers = function() {
  for (var i=0;i<this.timelineLayers.length;i++) {
       this.timelineLayers[i].setVisibility(true);
       this.timelineLayers[i].display(false);
  }
};

MapController.prototype.showLayer = function(year) {
  if (this.timelineLayers.length < 1) {
    return 1;
  }
  //layer.setVisibility(true);
  idx = year - this.yearStart;
  this.year = year;
  this.showZones(year);
  //console.log('Showing layer: ' + year);



  //set visibility of all layers
  for (var i=0;i<this.timelineLayers.length;i++) {
        this.timelineLayers[i].display(0);
  }
    this.timelineLayers[idx].display(1);
    this.timelineLayers[idx].setVisibility(true);
};

MapController.prototype.addHSLayer =  function(id) {
  //delete existing layer
  if (this.habitatSuitabilityLayer) {
    this.map.removeLayer(this.habitatSuitabilityLayer);
  }

  console.log("adding hs map");

  // create / add new layer
  this.habitatSuitabilityLayer = new OpenLayers.Layer.WMS( "HS",
                    "map/wms.php", {
                      MAP: 'hs.map',
                      ID: id,
                      DATA: 'max_pre1.asc',
                      LAYERS: 'habitat',
                      isBaseLayer: 'false',
                      transparent: 'true',
                      reaspect: "true",
                      format: 'image/png'},
                    { sphericalMercator:true, projection:mercator, opacity:0.5});

   /* this.map.setLayerIndex(this.habitatSuitabilityLayer, 1);*/

    this.map.addLayer(this.habitatSuitabilityLayer);
};

MapController.prototype.showZones = function(year) {
  console.log("show zones");
  features = this.wfstPolygon.features;
 /* for (var i in features) {
    if ('time' in features[i].attributes && 'timeline' in features[i].attributes) {
      var time = features[i].attributes.time;
      var timeline = features[i].attributes.timeline
      if (time <= year && timeline == this.timelineID) {
        $('#'+features[i].geometry.components[0].id).attr('class', '');
      } else {
        $('#'+features[i].geometry.components[0].id).attr('class','zone_hidden');
      }
    }
  }*/
};

//setup map function
MapController.prototype.setupMap = function() {
    OpenLayers.ProxyHost = "proxy.php?url=";

    var featureserver = "http://115.146.85.81:9090/"

    OpenLayers.Util.extend(OpenLayers.Request,{
        makeSameOrigin : function(url, proxy) {
        return proxy + encodeURIComponent(url);
      }
    });


    var DeleteFeature = OpenLayers.Class(OpenLayers.Control.SelectFeature, {
       clickFeature: function(feature) {
         if(feature.fid == undefined) {
           feature.layer.destroyFeatures([feature]);
         } else {
           feature.state = OpenLayers.State.DELETE;
           feature.layer.events.triggerEvent("afterfeaturemodified",
            {feature: feature});
           feature.renderIntent = "select";
           feature.layer.drawFeature(feature);
         }
       },
       clickoutFeature: function(feature) {},
       unselectAll: function(options) {
       },
       toggleSelect: function() {},
       overFeature: function(feature) {
         var layer = feature.layer;
         if(feature.state != OpenLayers.State.DELETE) {
           return OpenLayers.Control.SelectFeature.prototype.overFeature.apply(this, arguments);
         }
       },
       outFeature : function(feature) {
         if(feature.state != OpenLayers.State.DELETE) {
           return OpenLayers.Control.SelectFeature.prototype.outFeature.apply(this, arguments);
         }
       },
       CLASS_NAME: "OpenLayers.Control.DeleteFeature"
     });




    var map = new OpenLayers.Map('map', {
                                 units : 'm',
                                 projection: new OpenLayers.Projection("EPSG:4326"),
                                 displayProjection: new OpenLayers.Projection("EPSG:4326")
                                 });
    this.map = map;

    //set hs map
    this.addHSLayer('a');


    //base layers
    var blank = new OpenLayers.Layer("Blank", {isBaseLayer:true});
    var osm = new OpenLayers.Layer.OSM("OSM");
  //  var gmap = new OpenLayers.Layer.Google("Google", {type: 'styled'});
    // var gsat = new OpenLayers.Layer.Google("Satellite",
    //     {type: google.maps.MapTypeId.HYBRID, numZoomLevels: 22});

    /// load only tiles visible in map viewport);
      var hydda = new OpenLayers.Layer.XYZ( "ESRI",
                    "http://server.arcgisonline.com/ArcGIS/rest/services/World_Shaded_Relief/MapServer/tile/${z}/${y}/${x}",
                    {sphericalMercator: true} );
    /*var hydda = new OpenLayers.Layer.XYZ(
            "OpenStreetMap",
            "http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png",
            {
                attribution: "Data, imagery and map information provided by <a href='http://www.mapquest.com/'  target='_blank'>MapQuest</a>, <a href='http://www.openstreetmap.org/' target='_blank'>Open Street Map</a> and contributors, <a href='http://creativecommons.org/licenses/by-sa/2.0/' target='_blank'>CC-BY-SA</a>  <img src='http://developer.mapquest.com/content/osm/mq_logo.png' border='0'>",
                transitionEffect: "resize"
            }
        );*/
/*
      map.setLayerIndex(blank, 0);
      map.setLayerIndex(osm, 0);
      map.setLayerIndex(hydda, 0);*/


    //edit sightings layer
    var savePoint = new OpenLayers.Strategy.Save();
    savePoint.events.on({
        'success': function(event) {
             log('Saved new sightings');
        },
        'fail': function(event) {
             log('Failed to save sightings');
        },
        scope: this
    });


    var wfstPoint = this.wfstPoint = new OpenLayers.Layer.Vector("Edit Sightings", {
      maxScale:150000,
      strategies: [new OpenLayers.Strategy.BBOX(), savePoint],
      projection: new OpenLayers.Projection("EPSG:4326"),
      protocol: new OpenLayers.Protocol.WFS({
          version: "1.1.0",
          srsName: "EPSG:4326",
          url: "http://115.146.85.81:8080/geoserver/wfs",
          featureType: "Siam_all",
          featureNS: "weeds"
      })
    });
    wfstPoint.id = "point";
    //map.addLayer(wfstPoint);


    //zones layer
    var savePolygon = new OpenLayers.Strategy.Save();
    savePolygon.events.on({
        'success': function(event) {
             log.write('Saved Zones');
        },
        'fail': function(event) {
             log.write('Failed to save zones');
        },
        scope: this
    });

    //Management Strategies
    var wfstPolygon = this.wfstPolygon = new OpenLayers.Layer.Vector("Zones", {
      strategies: [new OpenLayers.Strategy.Fixed(),savePolygon],
      projection: new OpenLayers.Projection("EPSG:4326"),
      protocol: new OpenLayers.Protocol.WFS({
        version: "1.1.0",
        srsName: OpenLayers.Projection("EPSG:4326"),
        url: "http://localhost:8080/geoserver/wfs",
        featurePrefix: 'wema',
        featureNS :  "wema",
        featureType: "management_strategies",
        geometryName: "the_geom",
      })/*,
      styleMap: zoneColors[0]*/
    });
    /*map.setLayerIndex(wfstPolygon, 99);*/
    wfstPolygon.id = "polygon";
    map.addLayer(wfstPolygon);

    wfstPolygon.events.register("loadend",wfstPolygon,function(){
      colorZones(wfstPolygon);
    });

    function colorZones(layer) {
      console.log("polygons")
      for (i in features) {
        console.log("feature");
      }
      features = layer.features;
      for (i in features) {
        if ('controlMechanism' in features[i].attributes) {
          var cm = features[i].attributes.controlMechanism;

          console.log(features[i].geometry.components[0].id);
          //console.log(zoneIDLookup[cm])
         $('#'+features[i].geometry.components[0].id).attr('class','zone_'+zoneIDLookup[cm]+'_path zonePath');
        }
      }
    }


    var panel = new OpenLayers.Control.Panel({
                                             displayClass: 'customEditingToolbar',
                                             allowDepress: true,
                                             div: document.getElementById('mapControls')
                                             });

    var point = new OpenLayers.Control.DrawFeature(
                                                   wfstPoint, OpenLayers.Handler.Point,
                                                   {
                                                   title: "Draw Point",
                                                   displayClass: "olControlDrawFeaturePoint",
                                                   multi: false,
                                                   featureAdded: function(){savePoint.save();}
                                                   }
                                                   );
    iface.tools.bind('pointTool', point);
    point.id = "point";

   /* var path = new OpenLayers.Control.DrawFeature(
                                                  wfstLine, OpenLayers.Handler.Path,
                                                  {
                                                  title: "Draw Path",
                                                  displayClass: "olControlDrawFeaturePath",
                                                  multi: false
                                                  }
                                                  );*/

    var polygonDrawOptions = { // 1

    };

    var polygon = new OpenLayers.Control.DrawFeature(
                                                     wfstPolygon, OpenLayers.Handler.Polygon,
                                                     {
                                                     title: "Draw Polygon",
                                                     displayClass: "olControlDrawFeaturePolygon",
                                                     multi: true,
                                                     featureAdded: zoneAdded,
                                                     handlerOptions: {
            freehand: true
        }
                                                     }
                                                     );

    iface.tools.bind('drawTool',polygon);
    polygon.id = "polygon";

    /*
      iface.tools.bind('draw',polygon);
    */


    var editPoint = new OpenLayers.Control.ModifyFeature(wfstPoint, {
                                                         id:"point",
                                                         standalone:true,
                                                         mode: OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                         });

   /* var editLine= new OpenLayers.Control.ModifyFeature(wfstLine,
                                                       {
                                                       id:"line",
                                                       standalone:true,
                                                       mode: OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                       });*/
    var editPolygon = new OpenLayers.Control.ModifyFeature(wfstPolygon,
                                                           {
                                                           id:"polygon",
                                                           standalone:true,
                                                           mode: OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                           });

    map.addControls([editPoint, editPolygon]);


    var select = new OpenLayers.Control.SelectFeature(
                                                      [wfstPoint, wfstPolygon],
                                                      {
                                                      title : "Modify Feature",
                                                      displayClass: "olControlModifyFeature",
                                                      hover:true,
                                                      callbacks:{
                                                      'click':function(feature) {
                                                        editPoint.deactivate();
                                                        editPolygon.deactivate();

                                                        console.log(feature.layer.map);
                                                        feature.layer.map.getControl(feature.layer.id).activate();
                                                        feature.layer.map.getControl(feature.layer.id).selectFeature(feature);
                                                        //console.log(feature);
                                                        //console.log(feature.layer);

                                                        console.log(feature.layer.map.getControl(feature.layer.id));
                                                        console.log('activated');

                                                      /*feature.layer.map.getControl(feature.layer.id).activate();
                                                      feature.layer.map.getControl(feature.layer.id).selectFeature(feature);*/
                                                      },
                                                      'clickout':function(feature) {
                                                        if (this.mode == 'zone') {
                                                          editPolygon.deactivate();
                                                        } else if (this.mode == 'edit') {
                                                          editPoint.deactivate();
                                                        }
                                                        console.log('deactivated');

                                                      }
                                                      }
                                                      });
    iface.tools.bind('editTool',select);

    var save = new OpenLayers.Control.Button({
      title: "Save Changes",
      trigger: function() {
        /*if(edit.feature) {
        edit.selectControl.unselectAll();
        }*/
        editPoint.deactivate();
        editPolygon.deactivate();


        if (mc.mode == 'zone') {
          savePolygon.save();
        } else {
          savePoint.save();
        }


      },
      displayClass: "olControlSaveFeatures"
    });

    $('#saveState').click(function(){save.trigger();});


    var del = new DeleteFeature([wfstPoint, wfstPolygon], {title: "Delete Feature", hover:true});

    iface.tools.bind('removeTool',del);

    panel.addControls([save, del, select, point, polygon]);
    map.addControl(panel);

    var styledMapOptions = {
        name: "Styled Map"
    };


    //setup edit overview view
    this.editTiled = editTiled = new OpenLayers.Layer.WMS(
        "Edit Overview",
        "http://115.146.85.81:8080/geoserver/weeds/wms",
        {
            LAYERS: 'weeds:Siam_all',
            STYLES: '',
            format: 'image/png',
            tiled: true,
            transparent: true,
            tilesOrigin : map.maxExtent.left + ',' + map.maxExtent.bottom
        },
        {
            buffer: 0,
            displayOutsideMaxExtent: true,
            isBaseLayer: false,
            yx : {'EPSG:4326' : true},
            maxScale:150000
        }
    );

    this.tiled = tiled = new OpenLayers.Layer.WMS(
        "Weed Distribution",
        "http://115.146.85.81:8080/geoserver/weeds/wms",
        {
            LAYERS: 'weeds:Siam_all',
            STYLES: '',
            format: 'image/png',
            tiled: true,
            transparent: true,
            tilesOrigin : map.maxExtent.left + ',' + map.maxExtent.bottom
        },
        {
            buffer: 0,
            displayOutsideMaxExtent: true,
            isBaseLayer: false,
            yx : {'EPSG:4326' : true}
        }
    );

    //map.addLayers([tiled,editTiled]);



    var styledMapType = new google.maps.StyledMapType(gmStyle, styledMapOptions);

    map.addLayers([hydda,osm,blank]);

    map.addControl(new OpenLayers.Control.LayerSwitcher());

    map.setCenter(
        new OpenLayers.LonLat(145.8, -17.2).transform(
            new OpenLayers.Projection("EPSG:4326"),
            map.getProjectionObject()
        ),
        10
    );

    /*var graticuleCtl1 = new OpenLayers.Control.Graticule({
                    numPoints: 2,
                    targetSize: 200,
                    labelled: true,
                    lineSymbolizer:  { strokeOpacity: 0.3, strokeColor: '#aaa', strokeWidth: 1 },
                    labelSymbolizer: { color: '#fff'}
                });

    map.addControl(graticuleCtl1);*/

    // gmap.mapObject.mapTypes.set('styled', styledMapType);
    // gmap.mapObject.setMapTypeId('styled');

    // gsat.mapObject.mapTypes.set('styled', styledMapType);
    // gsat.mapObject.setMapTypeId('styled');

    mc = this;
    map.events.register("movestart", map, function(){
     // console.log('moving');
      mc.disableLayers([mc.year]);
      $("#OpenLayers_Control_LayerSwitcher_98_layersDiv").trigger("click");
      //mc.showLayer(mc.year);
    });
    map.events.register("moveend", map, function(){
      //console.log('moving');
      //mc.enableLayers();
      mc.showLayer(mc.year);
    });

}






























//google map style
    gmStyle = [
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": 'labels',
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },{
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [
            { hue: '#ddd' },
            { saturation: -12 },
            { lightness: 46 },
            { visibility: 'on' }
        ]
    }
];


//google map style
    gmBlackout = [
    {
        "featureType": "water",
        "stylers": [
            { "hue": "#2a00ff" },
            { "saturation": -100 },
            { "lightness": -78 }
        ]
    },
    {
        "featureType": "water",
        "elementType": 'labels',
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "lightness": "-100"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -100
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#000"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            },
            {
              "lightness": "-100"
            }
        ]
    }
];
