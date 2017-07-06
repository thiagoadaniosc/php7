<?php
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]'; // Aspas simples para visualizar como esta

$data = json_decode($json, true); // sem true se transforma em objeto

echo "<pre>";
print_r($data);