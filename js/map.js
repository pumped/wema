var map;
var tiled;

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
        fillColor: "#00ee66",
        fillOpacity: 0.4,
        strokeColor: "#00cc44",
        strokeWidth: 3,
        pointRadius: 6
    })
})];

var zoneLookup = {
  "IC" : {fillColor: "#1826B0", strokeColor: "#1826B0"},
  "P" : {fillColor: "#FFBA00", strokeColor: "#FFBA00"},
  "AP" : {fillColor: "#ff2800", strokeColor: "#ff2800"},
  "D" : {fillColor: "#ffe573", strokeColor: "#ffe573"},
  "R" : {fillColor: "#00BB3F", strokeColor: "#00BB3F"},
  "C" : {fillColor: "#FF8973", strokeColor: "#FF8973"},
};

zoneColors[0].addUniqueValueRules("default","type",zoneLookup);
zoneColors[0].addUniqueValueRules("select","type",zoneLookup);

function zoneAdded(e) {
  e.attributes = {'type':zones.mode()};
  console.log(zones.mode());
 /* e.style = zoneColors[0];
  console.log(zoneColors[0]);
  console.log(e);

  //redraw layer*/
  mc.wfstPolygon.redraw();
  console.log(mc.wfstPolygon);
}

$('document').ready(function(){
    mc = new MapController();
    mc.setupMap();
    log('Map Initialised');
});

function MapController() {
    this.mode = 'edit';
    this.zone = 'IC';
}

MapController.prototype.editMode = function() {
    this.mode = 'edit';

    //setup controls
    $('.customEditingToolbar').show();
    $('[class^=olControlDrawFeaturePoint]').show();
    $('[class^=olControlDrawFeaturePolygon]').hide();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(true);
    this.editTiled.setVisibility(true);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(false);

    //setup layers
}

MapController.prototype.overviewMode = function() {
    this.mode = 'overview';

    $('.customEditingToolbar').hide();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(true);
}

MapController.prototype.planMode = function() {
    this.mode = 'plan';

    $('.customEditingToolbar').hide();
    $('#timeline').show();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(true);
}

MapController.prototype.zoneMode = function() {
    this.mode = 'zone';

    $('.customEditingToolbar').show();
    $('[class^=olControlDrawFeaturePolygon]').show();
    $('[class^=olControlDrawFeaturePoint]').hide();
    $('[class^=olControlDrawFeaturePath]').hide();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.editTiled.setVisibility(false);
    this.wfstPolygon.setVisibility(true);
    this.tiled.setVisibility(true);
}


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

    //base layers
    var osm = new OpenLayers.Layer.OSM("OSM");
    var gmap = new OpenLayers.Layer.Google("Google", {type: 'styled'});          
    var gsat = new OpenLayers.Layer.Google("Satellite",
        {type: google.maps.MapTypeId.HYBRID, numZoomLevels: 22});


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
      }),
    });
    wfstPoint.id = "point";
    map.addLayer(wfstPoint);


    //zones layer
    var savePolygon = new OpenLayers.Strategy.Save();
    savePolygon.events.on({
        'success': function(event) {
             log('Saved Zones');
        },
        'fail': function(event) {
             log('Failed to save zones');
        },
        scope: this
    });
    var wfstPolygon = this.wfstPolygon = new OpenLayers.Layer.Vector("Zones", {
      strategies: [savePolygon],
      projection: new OpenLayers.Projection("EPSG:4326"),
      protocol: new OpenLayers.Protocol.WFS({
        version: "1.1.0",
        srsName: "EPSG:4326",
        url: "http://115.146.85.81:8080/geoserver/wfs",
        featureType: "zones",
        featureNS: "weeds"
      }),
      styleMap: zoneColors[0]
    });
    wfstPolygon.id = "polygon";
    map.addLayer(wfstPolygon);


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
                                                   multi: false
                                                   }
                                                   );

   /* var path = new OpenLayers.Control.DrawFeature(
                                                  wfstLine, OpenLayers.Handler.Path,
                                                  {
                                                  title: "Draw Path",
                                                  displayClass: "olControlDrawFeaturePath",
                                                  multi: false
                                                  }
                                                  );*/

    var polygon = new OpenLayers.Control.DrawFeature(
                                                     wfstPolygon, OpenLayers.Handler.Polygon,
                                                     {
                                                     title: "Draw Polygon",
                                                     displayClass: "olControlDrawFeaturePolygon",
                                                     multi: false,
                                                     featureAdded: zoneAdded
                                                     }
                                                     );

    $('#draw').click(function(){
      polygon.activate();
    });

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
                                                      
                                                      feature.layer.map.getControl(feature.layer.id).activate();
                                                      feature.layer.map.getControl(feature.layer.id).selectFeature(feature);
                                                      },
                                                      'clickout':function(feature) {
                                                      feature.layer.map.getControl(feature.layer.id).deactivate();
                                                      }
                                                      }
                                                      });

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


    var del = new DeleteFeature([wfstPoint, wfstPolygon], {title: "Delete Feature", hover:true});

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
            buffer: 2,
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
            buffer: 2,
            displayOutsideMaxExtent: true,
            isBaseLayer: false,
            yx : {'EPSG:4326' : true}
        } 
    );

    map.addLayers([tiled,editTiled]);



    var styledMapType = new google.maps.StyledMapType(gmStyle, styledMapOptions);

    map.addLayers([gmap,gsat,osm]);

    map.addControl(new OpenLayers.Control.LayerSwitcher());

    map.setCenter(
        new OpenLayers.LonLat(145.69826, -17.37545).transform(
            new OpenLayers.Projection("EPSG:4326"),
            map.getProjectionObject()
        ), 
        11
    );

    gmap.mapObject.mapTypes.set('styled', styledMapType);
    gmap.mapObject.setMapTypeId('styled');

    gsat.mapObject.mapTypes.set('styled', styledMapType);
    gsat.mapObject.setMapTypeId('styled');

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
            { hue: '#d8ecd5' },
            { saturation: -12 },
            { lightness: 46 },
            { visibility: 'on' }
        ]
    }
];