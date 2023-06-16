<?php include('../../templates/header.php');
include('../../bd.php');

$ID = $_GET['ID'];

if (isset($_POST['editar'])) {
    $errores = editarVenta($ID);
}
function editarVenta($ID)
{

    $servicio = $_POST['servicio'];
    $empleado = $_POST['empleado'];
    $precio = $_POST['precio'];
    $dia = $_POST['dia'];
    $errores = [];
    if ($servicio == NULL || $servicio == "") {
        array_push($errores, "Debe completar el servicio correspondiente");
    }
    // Prepara la consulta SQL para actualizar los datos
    include('../../bd.php');

    $sql = "UPDATE registroventas 
    SET servicio = '$servicio',
    empleado = '$empleado',
    precio = '$precio', 
    dia = '$dia' WHERE ID = $ID";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script language='javascript'>
            alert('Los datos se actualizaron correctamente');
            location.assign('index.php');
        </script>";
        exit;
    } else {
        echo "<script language='javascript'>
            alert('Los datos NO se actualizaron correctamente');
            location.assign('index.php');
        </script>";
        exit;
    }
}
$sql = "SELECT * FROM registroventas WHERE ID = $ID";
$resultado = mysqli_query($conexion, $sql);
$servi = mysqli_fetch_assoc($resultado);
mysqli_close($conexion);

?>

<body>
    <div class="container border-3">

        <div class="border border-info border rounded-start p-3 text-white bg-dark">
            <div class="card-header">
                <h2 class="text-center mt-2">Modificar Venta</h2>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="m-3 p-2">
                    <input type="hidden" name="ID" value="<?php echo $ID; ?>">

                    <label for="" class="form-label m-1 fs-5">Servicio:</label>
                    <input type="text" class="form-control" name="servicio" value="<?php echo $servi['servicio']; ?>">
                    <label for="" class="form-label m-1 fs-5">Empleado:</label>
                    <input type="text" class="form-control" name="empleado" value="<?php echo $servi['empleado']; ?>">
                    <label for="" class="form-label m-1 fs-5">Precio:</label>
                    <input type="number" class="form-control" name="precio" value="<?php echo $servi['precio']; ?>">
                    <label for="" class="form-label m-1 fs-5">Dia:</label>
                    <input type="date" class="form-control" name="dia" value="<?php echo $servi['precio']; ?>">

                </div>
                <div class="row align-items-center m-1">
                    <button class="btn btn-success gap-1 col fs-5" type="submit" name="editar" value="editar">Enviar</button>
                    <a class="btn btn-primary fs-5 gap-1 m-2 col" href="index.php" role="button">Cancelar </a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>