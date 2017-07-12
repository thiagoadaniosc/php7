<?php

function soma(float ...$valores):float { // php7
	return array_sum($valores);
}

//echo var_dump(soma(2,2));
//echo soma(25,33);
echo soma(1.5,3.2);