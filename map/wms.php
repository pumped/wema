<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

    // Fill map request object based on WMS GET params.
    $map_request = ms_newOwsRequestObj();
    $len = $map_request->loadparams();


    // Determine path to map file.
    // This dir is the map dir (contains the map files)
    $map_dir = realpath('./');

    // Determine requested map file.
    $requested_map_file = null;
    $requested_map_file = $_GET['MAP'];

    // Set full path to map file.
    $path_to_map_file = realpath($map_dir.'/'.$requested_map_file);

    //get data file
    $data = null;
    $data = 'max_pre1.asc';

    // Create a map object based on above inputs.
    ms_ioinstallstdouttobuffer();
    $map = ms_newMapObj($path_to_map_file);

    //set layer data to be used
    $layer = $map->getLayerByName('habitat');
    $layer->set('data', $data);   

    //dispatch request
    $map->owsdispatch($map_request);

    //strip header and output
    $contenttype = ms_iostripstdoutbuffercontenttype();
    $buffer = ms_iogetStdoutBufferBytes();

    if (!isset($_GET['debug'])) {
    	header('Content-Type: image/png');
    }

    echo $buffer;

	ms_ioresethandlers();

?>