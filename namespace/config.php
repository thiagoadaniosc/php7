<?php 

spl_autoload_register(function ($nameClass) {
	$dirClass = "class";
	$nameClass = strtolower($nameClass);
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // File Path

	//echo $filename ." " ;


	if (file_exists($filename)) {
		require_once ($filename);
	}

});