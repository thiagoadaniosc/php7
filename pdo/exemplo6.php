<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root" , "root"); // Ordem não importa

$conn->beginTransaction(); 
$stmt /*Comando Homologação*/ = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;



$stmt->execute(array(5));
$querySuccess1 = $stmt->rowCount();
$stmt->execute(array(++$id));
$querySuccess2 = $stmt->rowCount();


echo 'Query1:' . $querySuccess1 . '  Query2: ' . $querySuccess2;
echo "<br/>";

if ($querySuccess1 == true && $querySuccess2 == true){
	$conn->commit();
	echo "Delete OK !";
} else {
	$conn->rollback();
	echo "Algum erro encontrado !";
}




