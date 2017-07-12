<?php
require_once ("config.php");

echo session_save_path();
echo "<br>";
echo session_status();

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessão está desabilitada";
		break;
	case PHP_SESSION_NONE:
		echo "Sessão não iniciada";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Tem pelo menos uma sessão";
		break;
	default:
		# code...
		break;
}