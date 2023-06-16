<?php include('../../templates/header.php');


$ID = $_GET['ID'];

if (isset($_POST['editar'])) {
    $errores = editar($ID);
} ?>
<?php function editar($ID)
{

    $puesto = $_POST['puesto'];
    $nombres = $_POST['nombres'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $errores = [];

    if ($puesto == NULL || $puesto == "") {
        array_push($errores, "Debe completar el cargo correspondiente");
    }
    if ($nombres == NULL || $nombres == "") {
        array_push($errores, "Debe completar su nombre");
    }
    if ($apellido == NULL || $apellido == "") {
        array_push($errores, "Debe completar su apellido");
    }
    if ($dni == NULL || $dni == "") {
        array_push($errores, "Debe completar con su DNI");
    }
    if ($celular == NULL || $celular == "") {
        array_push($errores, "Debe completar con su Numero de Celular");
    }
    if ($direccion == NULL || $direccion == "") {
        array_push($errores, "Debe completar su domicilio");
    }
    include('../../bd.php');

    $sql = "UPDATE empleado SET 
        puesto = '$puesto',
        nombres = '$nombres',
        apellido = '$apellido',
        dni = '$dni', 
        celular = '$celular',
        direccion = '$direccion'
         WHERE ID = $ID";

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

include('../../bd.php');
$sql = "SELECT * FROM empleado WHERE ID = $ID";
$resultado = mysqli_query($conexion, $sql);
$empleado = mysqli_fetch_assoc($resultado);
mysqli_close($conexion);

?>
<style>
    #fondoEditar {
        background-image: url('../../../imgFondos/fondoeditar.jpg');
        background-size: 100% 100%;

    }
</style>


<body id="fondoEditar">
    <div class="container border-3">
        <div class="border border-info border rounded-start p-3 text-white bg-dark">
            <div class="text-center">
                <h2 class="fs-2 m-2">Editar Empleado </h2>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="col-sm-12 mt-2">
                <div class="fs-5 m-2">
                    <input type="hidden" name="ID" value="<?php echo $empleado['ID']; ?>">

                    <label for="" class="form-label m-1">Puesto:</label>
                    <input type="text" class="form-control" name="puesto" value="<?php echo $empleado['puesto']; ?>">
                    <label for="" class="form-label m-1">Nombre:</label>
                    <input type="text" class="form-control" name="nombres" value="<?php echo $empleado['nombres']; ?>">
                    <label for="" class="form-label m-1">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $empleado['apellido']; ?>">
                    <label for="" class="form-label m-1">Dni:</label>
                    <input type="num" class="form-control" name="dni" value="<?php echo $empleado['dni']; ?>">
                    <label for="" class="form-label m-1">Celular:</label>
                    <input type="num" class="form-control" name="celular" value="<?php echo $empleado['celular']; ?>">
                    <label for="" class="form-label m-1 ">Direccion:</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $empleado['direccion']; ?>">
                </div>
                <div class="row align-items-center m-3">
                    <button class="btn btn-info gap-1 col fs-5" type="submit" name="editar" value="editar">Enviar</button>
                    <a class="btn btn-primary fs-5 gap-1 m-2 col" href="index.php" role="button">Cancelar </a>
                </div>
            </form>
        </div>
    </div>
    </div>