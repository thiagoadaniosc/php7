<?php 

$conn = new mysqli("localhost", "root", "root", "dbphp7" );

if ($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
} else {
	$stmt  = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (?, ?)");
	$stmt->bind_param('ss', $login, $pass);
	$login = "user";
	$pass = "12345";
	$stmt->execute();

	$login = "root";
	$pass = "!@$5";

	$stmt->execute();
}