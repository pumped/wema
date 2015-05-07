<?php

    //check if image exists
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	//$RUNDIR = "/home/dylan/Dev/test/scratch/runs/asdfasd";
    $RUNDIR = "/media/src/data/siam";

    //echo $RUNDIR;

    //check if folder exists
    $id = md5($_GET['LAYERS'].$_GET['DATA'].$_GET['BBOX'].$_GET['WIDTH'].$_GET['HEIGHT'].$_GET['SRS']);
    $file = "imgs/cache/".$id.".png";
    if (file_exists($file)) {
        header('Content-Type: image/png');
        readfile($file);
        exit();
    }

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
    $layerName = $_GET['LAYERS'];
    if (isset($_GET['RUNS'])) {  
        $data = $RUNDIR.'/'.$_GET['DATA'];
    	//echo "<br/>".$data."<br/>";
    } else {
    	$data = 'max_pre1.asc';
	}

    // Create a map object based on above inputs.
    ms_ioinstallstdouttobuffer();
    $map = ms_newMapObj($path_to_map_file);

    //set layer data to be used
    $layer = $map->getLayerByName($layerName);
    $layer->set('data', $data);   

    ob_start();

    //dispatch request
    $map->owsdispatch($map_request);


    //strip header and output
    $contenttype = ms_iostripstdoutbuffercontenttype();
    $buffer = ms_iogetStdoutBufferBytes();


    if (!isset($_GET['debug'])) {
        header('Content-Type: image/png');
    }
    echo $buffer;

    $img = ob_get_contents();
    ob_flush();

    file_put_contents($file, $img);

	ms_ioresethandlers();

?>