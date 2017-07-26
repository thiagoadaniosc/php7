<?php 

spl_autoload_register(function ($nameClass) {
	// $url;
	// switch(URL) {}
	$dirClass = "class";
	$nameClass = strtolower($nameClass);
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // File Path
	//echo $filename ." " ;
	if (file_exists($filename)) {
		require_once ($filename);
	}
});

// se tiver classes com mesmo nome em paste diferente, verificar url para localizar ou
//  Verificar se contem palavra da pasta exemplo: homeController, caso não será um models