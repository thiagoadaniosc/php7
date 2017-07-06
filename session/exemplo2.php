<?php 
require_once ("config.php");

session_unset($_SESSION); // $_SESSION['VAR']
echo $_SESSION['nome'];

session_destroy($_SESSION);