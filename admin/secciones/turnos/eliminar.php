<?php 

include('../../bd.php');

$ID = $_GET['ID'];


$sql= "DELETE FROM turno WHERE ID = ". $ID;

mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("location:lista.php");

?>