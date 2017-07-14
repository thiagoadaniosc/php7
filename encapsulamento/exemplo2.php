<?php 

class Pessoa {
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Programador extends Pessoa {
// Sub-Escrevendo métodos
	public function verDados(){

		echo get_class($this) . "<br>";
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>"; // Senha Private, Não é possivel acessar de classes filhas
	}
}

$pg = "Programador"; // PHP é fera

$programador = new $pg;

//$programador = new $Programador;

$programador->verDados();

//$pessoa = new Pessoa();

//echo  $pessoa->nome;
//echo  $pessoa->idade;
//echo  $pessoa->senha;
//$pessoa->verDados();