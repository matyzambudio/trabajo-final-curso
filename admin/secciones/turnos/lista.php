<?php include('../../templates/header.php') ?>
<?php include('../../bd.php');
//selecciona todo de la tabla de servicios ! 
$sql = $conexion->prepare("SELECT * FROM turno");

$sql->execute();
$resultado = $sql->get_result();
$listaturnos = $resultado->fetch_all(MYSQLI_ASSOC);
?>


<div class="card" id="fondo">
    <div class="card-header"> 
        <h1 class="text-center"><b> Turnos </b></h1>
        <div class="table-responsive-sm p-3 mb-2 bg-white text-white">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Mes </th>
                        <th scope="col">Hora </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaturnos as $datos) { ?>
                        <tr class="table table-bordered border-dark">
                            <td><?php echo $datos['ID']; ?></td>
                            <td><?php echo $datos['nombre']; ?></td>
                            <td><?php echo $datos['apellido']; ?></td>
                            <td><?php echo $datos['dia']; ?></td>
                            <td><?php echo $datos['mes']; ?></td>
                            <td><?php echo $datos['hora']; ?></td>
                            <td>
                            <a class="btn btn-success d-grid m-1" href='editar.php?ID=<?php echo $datos['ID']; ?>'>Editar</a>
                                     <a class="btn btn-danger d-grid m-1" href='eliminar.php?ID=<?php echo $datos['ID']; ?>'>Eliminar</a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-success d-grid gap-2 fs-5 col-6 mx-auto m-1" href="<?php echo $url?>admin/secciones/turnos/index.php" role="button" ><b>Nuevo Turno </b></a>
            <a class="btn btn-primary d-grid gap-2 fs-5 col-6 mx-auto" href="<?php echo $url ?>admin/dashbord.php" role="button">Panel De Control </a>
        </div>

    </div>
</div> <br><br>
<?php include('../../templates/footer.php'); ?>