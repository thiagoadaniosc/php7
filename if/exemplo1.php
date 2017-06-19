<?php
$qualASuaIdade = 25;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){ // < 12
	echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) { // < 18
	echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor) { // <65
	echo "Adulto ";
} else { // > 65
	echo "Idoso";
}	

echo "<br>";

echo ($qualASuaIdade < $idadeMaior  ) ? "Menor de Idade" : "Maior de Idade";