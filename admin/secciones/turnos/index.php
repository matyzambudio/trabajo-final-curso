<?php include('../../../headprincipal.php');
include('../../funciones.php');?>
<?php 
if ($_POST) {
  $errores = guardarTurno();
}
?>
<style>
  #card {
    background-image: url('../../../imgFondos/fondovisi.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }

  .botonfinal {
    transition: .5s, color .10s;
    -webkit-transition: .5s, color .10s;
    -moz-transition: .5s, color .10s;
  }

  .botonfinal:hover {
    transform: translate3d(12px, 50%, 3em);
    -webkit-transform: translate3d(12px, 50%, 3em);
    -moz-transform: translate3d(12px, 50%, 3em);
    box-shadow: 0 8px 8px 0 #000000, 0 8px 8px 0 #000000;
  }
 
</style>
<br><br>
<div class="container border border-5 top-50 start-50 p-3" id="card">
  <div class="col-row row-col-sm-1">
    <h1 class="text-center">Turnos </h1>
    <div>
      <form action="index.php" method="post" enctype="multipart/form-data">

        <div class="mb-3 col-sm-1 col-lg-12">
          <label for="" class="form-label"><b>Ingrese Nombre:</b></label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="mb-3 col-sm-1 col-lg-12">
          <label for="" class="form-label"><b>Ingrese Apellido </b></label>
          <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
        </div>
        <br>
        <div> <b>
            <label>Dia</label>
            <select name="dia">
              <?php
              for ($i = 1; $i <= 31; $i++) {
                if ($i == date('j'))
                  echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                  echo '<option value="' . $i . '">' . $i . '</option>';
              }
              ?>
            </select>
            <label>Mes</label>
            <select name="mes">
              <?php
              for ($i = 1; $i <= 12; $i++) {
                if ($i == date('m'))
                  echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                  echo '<option value="' . $i . '">' . $i . '</option>';
              }
              ?>
            </select>

            <label>Hora :</label>
            <select name="hora">
              <?php
              for ($i = 10; $i <= 20; $i++) {
                if ($i == time())
                  echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                  echo '<option value="' . $i . '">' . $i . '</option>';
              }
              ?>
              <br>
            </select>
        </div> <br>

        <div class="text-center d-grid gap-2">
          <button type="submit" class="botonfinal btn btn-primary m-2" value="index.php">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</main>
<br><br>

<?php include('../../../redes.php') ?>
<?php include('../../../fotter.php') ?>