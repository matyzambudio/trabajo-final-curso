<?php 

include('../../bd.php');

$ID = $_GET['ID'];


$consulta = "DELETE FROM servicio WHERE = ". $ID;

mysqli_query($conexion, $consulta);
mysqli_close($conexion);

header("location:index.php");

?>