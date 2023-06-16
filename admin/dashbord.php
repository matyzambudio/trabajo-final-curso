<?php include('templates/header.php'); ?>

<style>
    #equipo {
        background-image: url('../imgFondos/FONDO.jpg');
        background-size: cover;
    }

    #turnos {
        background-image: url('../imgFondos/fondopelu3.jpg');
        background-size: cover;
    }

    #servicio {
        background-image: url('../imgFondos/fondopelu1.jpg');
        background-size: cover;
    }

    #RV {
        background-image: url('../imgFondos/fondopelu2.png');
        background-size: cover;
    }

    .img {
        border: 2px solid black;
        margin: 3%;
        border-radius: 20px;
        transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
    }

    .img:hover {
        transform: scale3d(1.5, 1.5, 0.3);
        -webkit-transform: scale3d(1.5, 1.5, 0.3);
        -moz-transform: scale3d(1.5, 1.5, 0.3);
    }

    h2 {
        font-style: italic;
        font-size: 20px;
        color: black;
    }

    #bt {
        background-color: #d63384;
    }
</style>
<div class="container">
    <div class="row text-center m-3">
        <div class="col">
            <div class="card" id="servicio">
                <a href="<?php echo $url ?>admin/secciones/servicios/index.php"><img class="img" src="../imgFondos/tijera.jpg" width="180" height="150"></a>
                <div class="d-grid gap-2">
                    <a href="<?php echo $url ?>admin/secciones/servicios/index.php" type="button" class="btn btn-info m-2">
                        <h2>SERVICIOS </h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="RV">
                <a href="<?php echo $url ?>admin/secciones/RegistroVenta/index.php"><img class="img" src="../imgFondos/maquinaescribir.jfif" width="180" height="150"></a>
                <div class="d-grid gap-2">
                    <a href="<?php echo $url ?>admin/secciones/RegistroVenta/index.php" type="button" class="btn btn-outline-success m-2">
                        <h2> REGRISTRO VENTAS</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row text-center m-3">
        <div class="col">
            <div class="card" id="turnos">
                <a href="<?php echo $url ?>admin/secciones/turnos/lista.php"><img class="img" src="../imgFondos/agenda.jpg" width="180" height="150"></a>
                <div class="d-grid gap-2">
                    <a href="<?php echo $url ?>admin/secciones/turnos/lista.php" type="button" class="btn btn-outline m-2" id="bt">
                        <h2>TURNOS</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="equipo">
                <a href="<?php echo $url ?>admin/secciones/equipo/index.php"><img class="img" src="../imgFondos/equipo.png" width="180" height="150"></a>
                <div class="d-grid gap-2">
                    <a href="<?php echo $url ?>admin/secciones/equipo/index.php" type="button" class="btn btn-outline-danger m-2">
                        <h2>EQUIPO</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <?php include('templates/footer.php'); ?> <br><br>
</div>