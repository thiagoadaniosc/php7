<?php 

//foreach(PDO::getAvailableDrivers() as $driver) {
  //  echo '<br>',$driver, '<br>';
//}
 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo "<pre>";
/*
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>$key</strong> : " . " $value";
		echo "<br/>";
		
	}

	echo "<hr>";

}*/


	echo json_encode($results);

//print_r($results);