  <?php
  include('../headprincipal.php');
  ?>
  <style>
    #foto1 {
      width: 61%;
      height: 50%;
    }

    #foto2 {
      width: 80%;
      height: 70%;
    }
  </style>

  <div class="container" >
    <div class="row row-cols-1 row-cols-md-2 g-2 m-2">

      <div class="col-sm-1">
        <div class="card border border-2 border-success">
          <img src="<?php echo $url ?>imgFondos/peluquero.jpg" class="m-2" id="foto1">
          <a href="<?php echo $url ?>index.php" type="submit" class="btn btn-success m-3 fw-bold ">Ingresar Modo Visitante</a>
        </div>
      </div>

      <div class="col-sm-1">
        <div class="card border border-2 border-info">
          <img src="<?php echo $url ?>imgFondos/maquinaescribir.jfif" class="m-2" id="foto2">

          <a href="<?php echo $url ?>login.php" type="submit" class="btn btn-info fw-bold m-3">Ingresar Modo Administador</a>
        </div>
      </div>
    </div>
  </div>
  

  <br><br>
  <?php include('../fotter.php') ?>