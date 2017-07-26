<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");
//$conn = new PDO("odbc:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo "<pre>";

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>$key</strong> : " . " $value";
		echo "<br/>";
		
	}

	echo "<hr>";
}

//print_r($results);