<?php
include('../../templates/header.php');
include('../../funciones.php');

if ($_POST){
    $errores = NeWServicio();
   }
 ?>

<div class="container bg-dark border border-5 top-50 start-50 p-3">
    <div class="col-row row-col-sm-1">
        <h1 class="text-center text-light">Nuevo Servicio </h1>
        <div>
           <div class="card-body border border-light rounded-start p-3 mb-2 bg-secondary text-white">
            <form action="crear.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="icono" class="form-label">Icono </label>
                    <input type="file" class="form-control" name="icono" id="icono">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo"">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <button type="submit" class="btn btn-success" value="agregar">Agregar</button>
                <a class="btn btn-primary" href="index.php" role="button">Cancelar </a>
            </form>
        </div>

    </div>
</div>
<?php include('../../templates/footer.php'); ?>