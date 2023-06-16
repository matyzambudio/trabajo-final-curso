<?php include('../../bd.php');

//selecciona todo de la tabla de venta ! 
$sql = $conexion->prepare("SELECT * FROM registroventas");

$sql->execute();
$venta = $sql->get_result();
$listaventa = $venta->fetch_all(MYSQLI_ASSOC); ?>

<?php include('../../templates/header.php'); ?><br><br>


<div class="card m-2">
    <div class="card-header bg-dark" >
        <a class="btn btn-outline-primary d-grid gap-2 m-2 fs-4" href="crear.php" role="button"><b>Agregar Venta </b></a>
   
    <div class="table-responsive-sm p-2">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Date</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaventa as $venta) { ?>
                    <tr class="table">
                        <td><?php echo $venta['ID']; ?></td>
                        <td><?php echo $venta['servicio']; ?></td>
                        <td><?php echo $venta['empleado']; ?></td>
                        <td><?php echo $venta['precio']; ?></td>
                        <td><?php echo $venta['dia']; ?></td>
                        <td class="text-start">
                            <a class="btn btn-success mx-auto" href="editar.php?ID=<?php echo $venta['ID']; ?>">Editar</a>
                            <a class="btn btn-danger mx-auto" href="eliminar.php?ID=<?php echo $venta['ID']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-primary d-grid gap-2 col-6 mx-auto fs-5" href="<?php echo $url ?>admin/dashbord.php" role="button">Volver</a>
    </div>
    </div>


</div>

<br><br><br>

<?php include('../../templates/footer.php'); ?>