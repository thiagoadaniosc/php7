<?php
namespace model;
class Pessoa {

	public $nome ;

	public function falar(): string {
		//return "O meu nome é " . $this->nome;
		return "O meu nome é {$this->nome}" ;
	} 
}

use model\Pessoa as Pessoa;

$pessoa = new Pessoa();
$pessoa->nome = "Thiago";
echo $pessoa->falar();
