<form>
	<input type="text" name="nome" placeholder="Nome">
	<input type="date" name="data">
	<input type="submit" value="OK">
</form>
<?php

if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		echo "Nome do Campo: " . $key . "<br>";
		echo "Valor do Campo: " . $value;
		echo "<hr>";
	}
}
?>