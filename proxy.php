<?php
	$url = $_GET['url'];

	$data = file_get_contents($url);

	echo $data;

?>