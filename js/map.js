var map;
var tiled;

$('document').ready(function(){
    setupMap();
});

function setupMap() {
    //OpenLayers.ProxyHost = "proxy.php?url=";

    map = new OpenLayers.Map({
        div: "map",
        projection: new OpenLayers.Projection("EPSG:900913")
    });
    
    //base layers
    var osm = new OpenLayers.Layer.OSM("OSM");
    var gmap = new OpenLayers.Layer.Google("Google", {type: 'styled'});          
    var gsat = new OpenLayers.Layer.Google("Satellite",
        {type: google.maps.MapTypeId.HYBRID, numZoomLevels: 22});

    //set up a save strategy
    /*var saveStrategy = new OpenLayers.Strategy.Save();
    saveStrategy.events.register("success", '', function(){console.info('saved')});
    saveStrategy.events.register("failure", '', function(){console.error('save failed')});*/

    // map extent
    //var mapextent = new OpenLayers.Bounds(142.0, 16.0, 150.0, 23.0).transform(WGS84, WGS84_google_mercator);

    tiled = new OpenLayers.Layer.WMS(
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
    );/*
    var tiled = new OpenLayers.Layer.Vector("Editable Features", {
        strategies: [new OpenLayers.Strategy.BBOX(), saveStrategy],
        //projection: new OpenLayers.Projection("EPSG:26910"),
        protocol: new OpenLayers.Protocol.WFS({
            version: "1.1.0",
            // loading data through localhost url path
            url: "http://115.146.85.81:8080/geoserver/it.geosolutions/wfs",
            featureNS :  "http://www.opengeospatial.net/cite",
            // layer name
            featureType: "it.geosolutions:Siam_all",
            // geometry column name
            geometryName: "the_geom",
            schema: "http://115.146.85.81:8080/geoserver/it.geosolutions/wms?version=1.1.0&;typename=cite:wfst_test"
        })
    });*/


    var styledMapOptions = {
        name: "Styled Map"
    };

    vectors = new OpenLayers.Layer.Vector("Vector Layer", {displayInLayerSwitcher: false});

    var styledMapType = new google.maps.StyledMapType(gmStyle, styledMapOptions);

    map.addLayers([gmap,osm,gsat,tiled]);

    map.addControl(new OpenLayers.Control.LayerSwitcher());
    map.addControl(new OpenLayers.Control.EditingToolbar(vectors));

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