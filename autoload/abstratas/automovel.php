<?php 
interface Veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo  {
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