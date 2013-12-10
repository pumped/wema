var map;
var tiled;

$('document').ready(function(){
    mc = new MapController();
    mc.setupMap();
    log('Map Initialised');
});

function MapController() {
    this.mode = 'edit';
}

MapController.prototype.editMode = function() {
    this.mode = 'edit';

    $('.customEditingToolbar').show();
    $('[class^=olControlDrawFeaturePoint]').show();
    $('[class^=olControlDrawFeaturePath]').show();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(true);
    this.wfstLine.setVisibility(true);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(false);
}

MapController.prototype.overviewMode = function() {
    this.mode = 'overview';

    $('.customEditingToolbar').hide();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.wfstLine.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(true);
}

MapController.prototype.planMode = function() {
    this.mode = 'plan';

    $('.customEditingToolbar').hide();
    $('#timeline').show();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.wfstLine.setVisibility(false);
    this.wfstPolygon.setVisibility(false);
    this.tiled.setVisibility(true);
}

MapController.prototype.zoneMode = function() {
    this.mode = 'zone';

    $('.customEditingToolbar').show();
    $('[class^=olControlDrawFeaturePoint]').hide();
    $('[class^=olControlDrawFeaturePath]').hide();
    $('#timeline').hide();

    //hide layers
    this.wfstPoint.setVisibility(false);
    this.wfstLine.setVisibility(false);
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


    var savePoint = new OpenLayers.Strategy.Save();
    var wfstPoint = this.wfstPoint = new OpenLayers.Layer.Vector("Points", {
                                                strategies: [new OpenLayers.Strategy.BBOX(), savePoint],
                                                projection: new OpenLayers.Projection("EPSG:4326"),
                                                protocol: new OpenLayers.Protocol.WFS({
                                                                                      version: "1.1.0",
                                                                                      srsName: "EPSG:4326",
                                                                                      url: featureserver + "?SERVICE=WFS&VERSION=1.1.0&REQUEST=GetFeature&maxfeatures=10000&TYPENAME=siam",
                                                                                      //featurePrefix: "fs",
                                                                                      featureType: "siam",
                                                                                      featureNS :  "http://featureserver.org/fs",
                                                                                      geometryName: "geometry"
                                                                                      //schema: featureserver + "?SERVICE=WFS&REQUEST=DescribeFeatureType?VERSION=1.1.0&TYPENAME=fs_point"
                                                                                      })
                                                });
    wfstPoint.id = "point";
    map.addLayer(wfstPoint);

    var saveLine = new OpenLayers.Strategy.Save();
    var wfstLine = this.wfstLine = new OpenLayers.Layer.Vector("Lines", {
                                               strategies: [new OpenLayers.Strategy.BBOX(), saveLine],
                                               projection: new OpenLayers.Projection("EPSG:4326"),
                                               protocol: new OpenLayers.Protocol.WFS({
                                                                                     version: "1.1.0",
                                                                                     srsName: "EPSG:4326",
                                                                                     url: featureserver + "?SERVICE=WFS&VERSION=1.1.0&REQUEST=GetFeature&TYPENAME=test",
                                                                                     //featurePrefix: "fs",
                                                                                     featureType: "fs_line",
                                                                                     featureNS :  "http://featureserver.org/fs",
                                                                                     geometryName: "geometry"
                                                                                     //schema: featureserver + "?SERVICE=WFS&REQUEST=DescribeFeatureType?VERSION=1.1.0&TYPENAME=fs_line"
                                                                                     })
                                               });
    wfstLine.id = "line";
    map.addLayer(wfstLine);

    var savePolygon = new OpenLayers.Strategy.Save();
    var wfstPolygon = this.wfstPolygon = new OpenLayers.Layer.Vector("Zones", {
                                                 strategies: [new OpenLayers.Strategy.BBOX(), savePolygon],
                                                 projection: new OpenLayers.Projection("EPSG:4326"),
                                                 protocol: new OpenLayers.Protocol.WFS({
                                                                                       version: "1.1.0",
                                                                                       srsName: "EPSG:4326",
                                                                                       url: featureserver + "?SERVICE=WFS&VERSION=1.1.0&REQUEST=GetFeature&TYPENAME=zone",
                                                                                       //featurePrefix: "fs",
                                                                                       featureNS :  "http://featureserver.org/fs",
                                                                                       featureType: "fs_polygon",
                                                                                       geometryName: "geometry"
                                                                                       //schema: featureserver + "?SERVICE=WFS&REQUEST=DescribeFeatureType?VERSION=1.1.0&TYPENAME=fs_polygon"
                                                                                       })
                                                 });
    wfstPolygon.id = "polygon";
    map.addLayer(wfstPolygon);


    var panel = new OpenLayers.Control.Panel({
                                             displayClass: 'customEditingToolbar',
                                             allowDepress: true
                                             });

    var point = new OpenLayers.Control.DrawFeature(
                                                   wfstPoint, OpenLayers.Handler.Point,
                                                   {
                                                   title: "Draw Point",
                                                   displayClass: "olControlDrawFeaturePoint",
                                                   multi: false
                                                   }
                                                   );

    var path = new OpenLayers.Control.DrawFeature(
                                                  wfstLine, OpenLayers.Handler.Path,
                                                  {
                                                  title: "Draw Path",
                                                  displayClass: "olControlDrawFeaturePath",
                                                  multi: false
                                                  }
                                                  );

    var polygon = new OpenLayers.Control.DrawFeature(
                                                     wfstPolygon, OpenLayers.Handler.Polygon,
                                                     {
                                                     title: "Draw Polygon",
                                                     displayClass: "olControlDrawFeaturePolygon",
                                                     multi: false
                                                     }
                                                     );

    var editPoint = new OpenLayers.Control.ModifyFeature(wfstPoint, {
                                                         id:"point",
                                                         standalone:true,
                                                         mode: OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                         });
    var editLine= new OpenLayers.Control.ModifyFeature(wfstLine,
                                                       {
                                                       id:"line",
                                                       standalone:true,
                                                       mode: OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                       });
    var editPolygon = new OpenLayers.Control.ModifyFeature(wfstPolygon,
                                                           {
                                                           id:"polygon",
                                                           standalone:true,
                                                           mode: OpenLayers.Control.ModifyFeature.RESHAPE | OpenLayers.Control.ModifyFeature.DRAG// | OpenLayers.Control.ModifyFeature.RESIZE | OpenLayers.Control.ModifyFeature.ROTATE
                                                           });

    map.addControls([editPoint, editLine, editPolygon]);


    var select = new OpenLayers.Control.SelectFeature(
                                                      [wfstPoint, wfstLine, wfstPolygon],
                                                      {
                                                      title : "Modify Feature",
                                                      displayClass: "olControlModifyFeature",
                                                      hover:true,
                                                      callbacks:{
                                                      'click':function(feature) {
                                                      editPoint.deactivate();
                                                      editLine.deactivate();
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
                                             editLine.deactivate();
                                             editPolygon.deactivate();
                                             

                                            if (mc.mode == 'zone') {
                                              savePolygon.save(); 
                                              log('Saved Zones');
                                            } else {
                                              savePoint.save();
                                              saveLine.save();
                                              log('Saved Points');
                                            }
                                             
                                             
                                             },
                                             displayClass: "olControlSaveFeatures"
                                             });


    var del = new DeleteFeature([wfstPoint, wfstLine, wfstPolygon], {title: "Delete Feature", hover:true});

    panel.addControls([save, del, select, point, path, polygon]);
    map.addControl(panel);

    var styledMapOptions = {
        name: "Styled Map"
    };

    vectors = new OpenLayers.Layer.Vector("Vector Layer", {displayInLayerSwitcher: false});


    //setup geoserver
    this.tiled = tiled = new OpenLayers.Layer.WMS(
        "Siam", 
        "http://115.146.85.81:8080/geoserver/it.geosolutions/wms",
        {
            LAYERS: 'it.geosolutions:Siam_all',
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

    map.addLayer(tiled);



    var styledMapType = new google.maps.StyledMapType(gmStyle, styledMapOptions);

    map.addLayers([gmap,gsat,osm]);

    map.addControl(new OpenLayers.Control.LayerSwitcher());
    //map.addControl(new OpenLayers.Control.EditingToolbar(vectors));

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