<?php

interface Veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo //, Outra  // Classe Abstrata
{
	public function acelerar($velocidade) {
		echo "O veíoculo acelerou até " . $velocidade . " km/h" ;
	}
	public function frenar($velocidade){
		echo "O veíoculo frenou  até " . $velocidade . " km/h" ;
	}
	public function trocarMarcha($marcha) {
		echo "O veíoculo engatou a marcha " . $marcha ;
	}
}

class DelRey extends Automovel {
	public function empurrar() {

	}
}

$DelRey = "DelRey"; // PHP 

$carro = new $DelRey(); // PHP
//$carro = new Automovel(); // Classe Abstrata

$carro->acelerar(200);
