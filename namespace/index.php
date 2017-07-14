<?php 
require_once ("config.php");

use cliente\Cadastro;

$cad  = new Cadastro();

$cad->setNome("Thiago");
$cad->setEmail("Thiago@gmail.com");
$cad->setSenha("123456");

//echo $cad;

echo $cad->registrarVenda();