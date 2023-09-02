<?php include('../../bd.php');
//selecciona todo de la tabla de servicios ! 
$sql = $conexion->prepare("SELECT * FROM servicio");

$sql->execute();
$resultado = $sql->get_result();
$listaservicio = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<?php include('../../templates/header.php'); ?>

<style>
     #crearb {
      transition: .5s, color .10s;
      -webkit-transition: .5s, color .10s;
      -moz-transition: .5s, color .10s;

    } #crearb:hover {
      box-shadow: 0 8px 8px 0 #000000, 0 8px 8px 0 #000000;
      transform: translate(0px, 5px);
      -webkit-transform: translate(0px, 5px);
      -moz-transform: translate(0px, 5px);
    }
    #fotico{
        transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
    }

    #fotico:hover {
        transform: scale3d(1.5, 1.5, 0.3);
        -webkit-transform: scale3d(1.5, 1.5, 0.3);
        -moz-transform: scale3d(1.5, 1.5, 0.3);
    }
    .acciones{
    transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
    }
    .acciones:hover{
    transform: rotateX(360deg);
        -webkit-transform: rotateX(360deg);
        -moz-transform: rotateX(360deg);
}
</style>
    <div class="card">
        <div class="card-header bg-dark"> <br>
            <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="crear.php" role="button">Agregar Nuevo </a><br>
            <br><br>
            <div class="table-responsive-sm p-3 mb-2 bg-white text-white">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Iconos</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Accion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaservicio as $registros) { ?>
                            <tr class="table table-bordered border-dark">
                                <td><?php echo $registros['ID']; ?></td>
                                <td><img src="<?php echo $registros['icono']; ?>" width="50%" height="40%" id="fotico"></td>
                                <td><?php echo $registros['titulo']; ?></td>
                                <td><?php echo $registros['precio']; ?></td>
                                <td><?php echo $registros['descripcion']; ?></td>
                                <td>
                                     <a class="acciones btn btn-success d-grid" href='editar.php?ID=<?php echo $registros['ID']; ?>'>Editar</a>
                                     <a class="acciones btn btn-danger d-grid" href='eliminar.php?ID=<?php echo $registros['ID']; ?>'>Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary d-grid m-1" href='../../dashbord.php' id="crearb">Panel De Control</a>
            </div>

        </div>
    </div> <br> <br>
<?php include('../../templates/footer.php'); ?>