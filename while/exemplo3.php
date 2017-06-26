<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	
	<p id="p">Ola Mundo: </p>
	<?php if (false) :// ativar ou n js com php?> 
	<script type="text/javascript"> var a = confirm();

		if (a = true){
			document.getElementById("p").innerHTML += "hello";
		} else {
		}

	</script>
	<?php endif;?>
</body>

</html>