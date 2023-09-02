<?php include('headprincipal.php'); ?>
<style>
    #tarjet {
        rotate: 3deg;
    }

    #picture {
        transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
    }

    #picture:hover {
        transform: scale3d(1.5, 1.5, 0.3);
        -webkit-transform: scale3d(1.5, 1.5, 0.3);
        -moz-transform: scale3d(1.5, 1.5, 0.3);
    }
</style>
<br><br><br>

<div class="container" id="fondo">
    <div class="row">
        <?php foreach ($lista as $servicio) { ?>
            <div class="col-md-4">
                <div class="card m-2" id="tarjet" title="Estamos en el detalle!!">

                    <img src="admin/imgServicios <?php echo $servicio['icono']; ?>" class="card-img-fluid m-1" id="picture">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $servicio['titulo']; ?></h5>
                        <p class="card-text"><?php echo $servicio['descripcion']; ?></p>
                        <p class="card-text text-center">$ <?php echo $servicio['precio']; ?></p>
                    </div>
                </div>
            </div> <?php } ?>
    </div>
</div>
</div>

</div>
<br><br>
<?php include('redes.php') ?>
<div>
<?php include('fotter.php') ?>
</div>