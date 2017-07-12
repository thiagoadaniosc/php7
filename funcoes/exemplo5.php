<?php

$a = 10;
$b = 10;

function trocaValor($a){
	$a += 50;
	return $a . "<br>";
}

function trocaValor2(&$b){
	return ++$b . "<br>";
}

echo trocaValor($a); // A variável não será alterada
echo $a . "<br>";

echo trocaValor2($b);
echo $b;