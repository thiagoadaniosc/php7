<?php

function __autoload($nomeClasse) {
	
	echo $nomeClasse;
	echo "<br>";

	if (file_exists($nomeClasse . ".php")) {

	require_once ("$nomeClasse.php");

	} else {
		require_once ("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
	}

}





$carro = new DelRey();
echo $carro->acelerar(80);