<?php include('../headprincipal.php'); ?>
<style>
    #hola {
        background-image: url('../imgFondos/fondovisi.jpg');
        background-size: cover;
    }
</style>


<div class="col-row row-col-sm-1">
    <div class="container justify-content-center">
        <div class="card text-center m-5"  id="hola">
            <div class="title m-2"><b>Quienes Somos</b></div>
            <div class="justify-content-center">
                <img src="<?php echo $url ?>imgFondos/quienessomos.jfif" width="40%">
            </div><br>
            <h5 class="card-title">Gabriel Terceros </h5> <br>
            <p class="card-text text-wrap"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eaque dicta voluptate labore exercitationem nesciunt tempore perspiciatis, delectus esse similique. Corrupti facilis cumque optio facere reprehenderit in quisquam omnis natus.</b></p> <br>
            <a href="<?php echo $url ?>menuprincipal.php" class="btn btn-outline-success m-2">Voler a Inicio</a><br>
        </div>
    </div>
</div>


<?php include('../fotter.php') ?>