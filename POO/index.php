<?php 
	$url = $_SERVER['REQUEST_URI'];
	$query = $_SERVER['QUERY_STRING'];

	if ($query == "1") {
		require_once ("exemplo1.php");
	}

?>