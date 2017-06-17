<?php 
$a = 55.0;

$b = 55;

echo "<pre>";
var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a = $b); // = apenas atribui
echo "<br>";
var_dump($a == $b); // compara resultado e ignora o tipo

echo "string";
var_dump($a === "55"); // Compara resultado e tipo
var_dump($a != "55"); // Compara resultado e tipo
var_dump($a !== "55"); // Compara resultado e tipo

