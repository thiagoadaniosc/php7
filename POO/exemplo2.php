<?php 
namespace model;

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() : string {
		return $this->modelo;
	}

	public function setModelo(string $modelo) : void{
		$this->modelo = $modelo;
	}

	public function getMotor() : string {
		return $this->motor;
	}

	public function setMotor(string $motor) : void {
		$this->motor = $motor;
	}

	public function getAno() : int {
		return $this->ano;
	}

	public function setAno(int $ano) : void {
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			"Modelo"  => $this->getModelo(),
			"Motor"  => $this->getMotor(),
			"Ano"  => $this->getAno()
		);
	}

	public function exibe() : void{
		echo "<h1> Carros </h1>";
		echo "<ul>";
		foreach ($this as $value) {
			echo "<li>" . $value . "</li>";
		}
		echo "</ul>";
	}
}

use model\Carro as Carro;

$fiesta = new Carro();
$fiesta->setModelo("Fiesta");
$fiesta->setMotor("V8");
$fiesta->setAno(2017);
//echo  "Modelo: " . $fiesta->getModelo() . "<br>";
//echo  "Motor: " . $fiesta->getMotor() . "<br>";
//echo  "Ano: " . $fiesta->getAno() . "<br>";

$fiesta->exibe();

print_r($fiesta->exibir());
echo "<br>";
echo "<br>";
var_dump($fiesta->exibir());

echo "<br>";
echo "<br>";

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno(2017);

print_r($gol->exibir());
echo "<br>";
echo "<br>";
print_r($gol->exibir());

