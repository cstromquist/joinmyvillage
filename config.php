<?php
if(isset($_GET['setting']))
	$file = "config";
	$key = $_GET['setting'];
	$data = unserialize(file_get_contents($file));
	echo json_encode($data[$key]);
?>