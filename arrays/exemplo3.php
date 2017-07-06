<?php

$pessoas = array();

array_push($pessoas,  array(
	'nome'=>'joão',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));

echo "<pre>";

echo $pessoas[0]['nome']."<br>";
print_r($pessoas);