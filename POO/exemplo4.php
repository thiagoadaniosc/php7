<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct(string $logradouro, int $numero, string $cidade) {
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;
	}

	public function __destruct() {
	//	echo "Classe destruida";
	}

	public function __toString(){
		return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
	}
}

$meuEndereco = new Endereco("Rua Manoel", 20, "Palhoça");

echo $meuEndereco;

//var_dump($meuEndereco);

//unset($meuEndereco);

