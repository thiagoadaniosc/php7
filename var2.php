<?php 
	$anoNascimento = 1990;

	$nome1 = "João";
	$sobrenome = "Silva";
	$nomeCompleto = "$nome1 {$sobrenome}";
	echo "<br>";

	echo "Nome Completo: " . $nomeCompleto;
	exit;
	echo "nome: ";
	unset($nome1);
	if(isset($nome1)) {
		echo $nome1;
	}
	
	// Comentario de Linha
	/*Comentario de Bloco*/ 
 ?>