<?php
session_id("colocar id sessão para recuperar");
require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);