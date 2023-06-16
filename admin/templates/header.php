<?php
 $url="http://localhost/2023/";
?>

<!doctype html>
<html lang="es">

<head>
    <title>2023 </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="<?php $url ?>css/stylo.css" rel="stylesheet">
</head>

    <style>
    #fondomenu{
        background-image: url('../../../imgFondos/fondopelu3.jpg');
        background-size:cover;
    }
</style>


<body id="fondomenu" >
    <div class="bg-success text-white">
        <nav class="navbar navbar-expand p-3 mb-2">
            <div class="nav navbar-nav p-1">
                <a class="nav-item nav-link active" href="<?php echo $url ;?>admin/index.php" aria-current="page"><b> Administrador </b><span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo $url;?>admin/secciones/servicios/"><b> Servicios </b></a>
                <a class="nav-item nav-link" href="<?php echo $url;?>admin/secciones/equipo/"><b> Equipo </b></a>
                <a class="nav-item nav-link" href="<?php echo $url;?>admin/secciones/RegistroVenta/"><b> Ventas </b></a>
                <a class="nav-item nav-link" href="<?php echo $url?>admin/secciones/turnos/lista.php"><b> Turnos</b></a>
             
                <a class="nav-item nav-link" href="<?php echo $url;?>admin/cerrar.php"><b>Cerrar Seccion</b></a>
               
            </div>
        </nav>
    </div>
    <main class="container" >
</br>

   