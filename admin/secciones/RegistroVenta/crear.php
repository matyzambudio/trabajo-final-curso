<?php
include('../../templates/header.php');
include('../../funciones.php');

if ($_POST) {
    $errores = NuevaVenta();
} ?>
<style>
    h1 {
        font-style: italic;
    }
</style>
<div class="container bg-dark border border-5 top-50 start-50 p-3">
    <div class="col-row row-col-sm-1">
        <h1 class="text-center text-light"> <b>Venta nueva</b></h1>
        <div>

            <div class="card-body border border-light rounded-start p-3 mb-2 bg-secondary text-white">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Servicio:</label>
                        <input type="text" class="form-control" name="servicio" id="servicio" aria-describedby="helpId" placeholder="Servicio">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Empleado:</label>
                        <input type="text" class="form-control" name="empleado" id="empleado" aria-describedby="helpId" placeholder="Empleado">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Precio:</label>
                        <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Dia:</label>
                        <input type="date" class="form-control" name="dia" id="dia">
                    </div>
                    <div class="row align-items-center m-1">
                        <button type="submit" class="btn btn-success fs-5 gap-1 m-2 col" value="agregar">Agregar</button>
                        <a class="btn btn-primary gap-1 col fs-5" href="index.php" role="button">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include('../../templates/footer.php'); ?>