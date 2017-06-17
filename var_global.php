<?php

echo "<pre>";
echo '<html><body><a href="?a=a">Click me</a></body> </html> '; 
$nome = $_GET["a"]; 
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; // ip de quem ta acessando

$diretorio = $_SERVER["SCRIPT_NAME"];
var_dump($diretorio);

var_dump($ip);
?>