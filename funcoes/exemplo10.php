<?php 

function test($callback){
	//Processo Lento
	$callback();
}

test(function(){
	echo "Terminou !";
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>
