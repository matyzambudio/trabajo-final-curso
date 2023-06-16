<?php include('../../templates/header.php');
include('../../funciones.php');

if ($_POST) {
    $errores = NewEquipo();
}
?>
<body class="bg-black-50">

    <div class="container bg-secondary border border-5 top-50 start-50 p-3 ">
        <div class="col-row row-col-sm-1">
            <h1 class="text-center text-light"><b> Nuevo Empleado </b></h1>
            <div>
                <div class="card-body border border-light rounded-start p-3 mb-2  text-dark fs-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="puesto" class="form-label"> Puesto: </label>
                            <input type="text" class="form-control" name="puesto" id="puesto" aria-describedby="helpId" placeholder="Puesto">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombres">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label"> Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="descripcion" aria-describedby="helpId" placeholder="Apellido">
                        </div>
                        <div class="mb-3">
                            <label for="dni" class="form-label"> Dni :</label>
                            <input type="num" class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="Dni">
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label"> Celular: </label>
                            <input type="num" class="form-control" name="celular" id="celular" aria-describedby="helpId" placeholder="Celular">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label"> Direccion :</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Direccion">
                        </div>
                        <div class="row align-items-center m-3">
                        <button type="submit" class="btn btn-success gap-1 col fs-5" value="agregar"> Agregar</button>
                        <a  class="btn btn-primary fs-5 gap-1 m-2 col" href="index.php" role="button"> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <br>

 <?php include('../../../fotter.php'); ?>
</body>