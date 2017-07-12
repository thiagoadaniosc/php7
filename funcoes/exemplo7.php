<?php

function soma(int ...$valores){ // php7
	return array_sum($valores) . "<br>";
}

echo soma(2,2);
echo soma(25,33);
echo soma(1.5,3.2);