<?php 
/////////////Basicos///////////////
$nome = "Hcode"; // String ""
$site = 'www.hcode.com.br'; // String ''
$ano = 1990;
$salario = 5500.00;
$bloqueado = false;
////////////////////////////Compostos///////////////////////////////
$frutas = array("abacaxi","laranja", "manga"); //varias funções init 0
echo "<pre>";
echo $frutas[2];
echo "<br>";
$nascimento = new DateTime();// aula date tiem; ()-> pega data local
var_dump($nascimento);
//////////////////////Especiais/////////////////////////////
$arquivo = fopen("var.php", "r");// File Open (item, tipo de leitura);
echo "br";
var_dump($arquivo);

$nulo = null; // nulo vs vazil


