<?php 

include('../../bd.php');

$ID = $_GET['ID'];


$sql= "DELETE FROM servicio WHERE ID = ". $ID;

mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("location:index.php");

?>