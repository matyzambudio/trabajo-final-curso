<?php 

include('../../bd.php');

$ID = $_GET['ID'];


$sql= "DELETE FROM registroventas WHERE ID = ". $ID;

mysqli_query($conexion, $sql);
mysqli_close($conexion);
header("location:index.php");

?>