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

$pessoa = new Pessoa();

//echo  $pessoa->nome;
//echo  $pessoa->idade;
//echo  $pessoa->senha;
$pessoa->verDados();