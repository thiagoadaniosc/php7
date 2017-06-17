<?php

//include "inc/exemplo1.php"; // ../var/arquivo.php
//require 'inc/exemplo1.php';
require_once 'inc/exemplo1.php'; // retor so se ele não foi incluido
require_once 'inc/exemplo1.php';
require_once 'inc/exemplo1.php';

$resultado = somar(10, 25);

echo $resultado;