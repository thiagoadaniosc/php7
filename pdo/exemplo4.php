<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root" , "root"); // Ordem não importa

$stmt /*Comando Homologação*/ = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE idusuario = :ID");
$login = "jose";
$password = "qwerty";
$id = 1;

$stmt->bindParam(':LOGIN',$login); 
$stmt->bindParam(':PASSWORD',$password);
$stmt->bindParam(':ID',$id);

$stmt->execute();

echo "Dados Alterados !";
