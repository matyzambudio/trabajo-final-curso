<?php include('admin/bd.php'); ?>
<?php
$sql = $conexion->prepare("SELECT * FROM servicio");
$sql->execute();
$servicio = $sql->get_result();
$lista = $servicio->fetch_all(MYSQLI_ASSOC);
$url = "http://localhost/2023/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GTerceros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="<?php echo $url ?>css/stylo.css" rel="stylesheet">

  <style>
    #pagprin {
      background-image: url('imgFondos/fondovisi.jpg');
      background-size: cover;
    }

    #enlace {
      transition: .5s, color .10s;
      -webkit-transition: .5s, color .10s;
      -moz-transition: .5s, color .10s;

    }

    #enlace:hover {
      box-shadow: 0 8px 8px 0 #000000, 0 8px 8px 0 #000000;
      transform: translate(0px, 5px);
      -webkit-transform: translate(0px, 5px);
      -moz-transform: translate(0px, 5px);
    }
    body nav {
      background-color: rgb(49, 93, 137);
    }
   
  </style>
</head>

<body id="pagprin" class="col-sm-12-xl-12">

  <nav class="navbar navbar-expand p-3 mb-2">

    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto m-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-bold fs-5 fst-italic" aria-current="page" href="<?php echo $url ?>menuprincipal.php" id="enlace">Inicio </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold fs-5 fst-italic" href="<?php echo $url ?>piedepag/quienessomos.php" id="enlace">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold fs-5 fst-italic" href="<?php echo $url ?>admin/secciones/turnos/index.php" id="enlace">Turnos </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold fs-5 fst-italic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Contactanos</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item m-2" href="https://goo.gl/maps/SZyNw5RBCX8BGkgS6"><img src="<?php echo $url ?>imgFondos/maps.png" width="20%"> Ubicacion</a>
              </li>
          </li>
          <li><a class="dropdown-item m-2" href="https://www.instagram.com/gt.barberos/"><img src="<?php echo $url ?>imgFondos/instagram.png" width="20%"> Instagram</a></li>
          <li><a class="dropdown-item m-2" href="https://api.whatsapp.com/send?phone=5492615604474"><img src="<?php echo $url ?>imgFondos/whatsapp.png" width="20%"> WhatApps</a></li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
</body>