<?php include('../../bd.php');

//selecciona todo de la tabla de servicios ! 
$sql = "SELECT * FROM empleado";
$rta = mysqli_query($conexion, $sql);
mysqli_close($conexion);

include('../../templates/header.php');
?>

<style>
    #fondoIndex{
        background-image: url('../../../imgFondos/fondoindex.png');
        background-size: cover;
    }
</style>

<body id="fondoIndex">

    <div class="card">
        <div class="card-header bg-dark"> <br>
            <a name="" id="" class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="crear.php" role="button">Agregar Nuevo Empleado </a>
            <br><br>
            <div class="table-responsive-sm p-2 bg-white text-white">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Dni</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($consulta = mysqli_fetch_array($rta)) {
                            echo "
                            <tr>
                                <th>" . $consulta['ID'] . "</th>
                                <td>" . $consulta['puesto'] . "</td>
                                <td>" . $consulta['nombres'] . "</td>
                                <td>" . $consulta['apellido'] . "</td>
                                <td>" . $consulta['dni'] . "</td>
                                <td>" . $consulta['celular'] . "</td>
                                <td>" . $consulta['direccion'] . "</td>
                                <td>
                                    <a class='btn btn-success' href='editar.php?ID=" . $consulta['ID'] . "'>Modificar</a>
                                    <a class='btn btn-danger' href='eliminar.php?ID=" . $consulta['ID'] . "'>Eliminar</a>
                                </td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
                
            </div> <br>
            <a class="btn btn-primary  d-grid gap-2 col-6 mx-auto" href="<?php echo $url ?>admin/dashbord.php" role="button">Volver </a>
        </div>
        
    </div>
   
</body>