<?php

$dt = new DateTime(); //Objeto
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");
