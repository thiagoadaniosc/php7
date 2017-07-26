<?php 

$conn = new mysqli("localhost", "root", "root", "dbphp7" );

if ($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
} else {
	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");
	$data = array();
	while ($row =  $result->fetch_assoc()) {
		array_push($data, $row);
		//print_r($row);
		//echo "<br />";
		//echo  "Usuario: " . $row['des_login'];
		//echo " | Senha: " . $row['des_senha'];
		//echo "<br />";
		echo "<pre>";
		echo json_encode($data);
		//json_decode($data);
	}
}