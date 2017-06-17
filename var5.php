<?php // Escopo Global

$nome = "Glaucio";

function teste(){ //Escopo
	global $nome; // Sem isso não funfa
	echo $nome; // erro não verifica
} // Escopo
function teste2(){
	$nome = "joão"; // criada aqui
	echo $nome . " é meu nome";
}

echo teste();
echo teste2();