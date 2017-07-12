<?php 

//$ts = strtotime("2001-09-11");
//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");
$ts = strtotime("+1 week +1 day");

echo date("l, d/m/Y", $ts);