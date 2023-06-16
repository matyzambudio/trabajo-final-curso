<?php

$pass = "Riquelme";

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "Primer intento: ".$hash;

echo "<br>";

$resultado = password_verify("Riquelme", $hash);

var_dump($resultado);

?>