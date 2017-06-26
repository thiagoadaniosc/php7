<?php 

$condicao = true;

while ($condicao){
	$num = rand(1, 10); //gera numero entre a faixa de valores
	if ($num === 3) {
		echo "TRÊS!!!";
		$condicao = false;
	} else {
		//echo date("d/m/Y");
		echo  $num . "<br>";
	}
}