<?php
include('../../bd.php');

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $sql = $conexion->prepare("SELECT * FROM servicio WHERE ID = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $resultado = $sql->get_result();
    $servicio = $resultado->fetch_assoc();

    // se fija se envió el formulario de edición
    if (isset($_POST['editar'])) {
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

    // Actualizar los datos de la base de datos
        $sql = $conexion->prepare("UPDATE servicio SET
        titulo = ?,
        precio = ?,
        descripcion = ?
        WHERE ID = ?");
        $sql->bind_param("sssi", $titulo, $precio, $descripcion, $id);
        $sql->execute();

        // Redireccionar a la página principal después de editar el servicio
        header("Location: index.php");
        exit();
    }

    include('../../templates/header.php');
?>
<style>
 
 h2{
    font-style: italic;
    color: white;
 }
 #fondo{ background: black;
           opacity: 90%;
    }
    h5{
        color: white;
        font-size: 120%;
    }
    
</style>

    <div class="card" id="fondo" >
        <div class="card-header">
            <h2 class="text-center mt-2">Modificiar Servicio</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="titulo" class="form-label"><h5>Título : </h5></label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $servicio['titulo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label"><h5>Precio:</h5></label>
                    <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $servicio['precio']; ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label"><h5>Descripción:</h5></label>
                    <input class="form-control" id="descripcion" name="descripcion" value="<?php echo $servicio['descripcion']; ?>">
                </div>
                <div class="row align-items-center m-1">
                <button type="submit" name="editar" class="btn btn-primary fs-5 gap-1 m-2 col">Guardar Cambios</button>
                <a class="btn btn-success gap-1 col fs-5" href='../servicios/index.php'>Volver</a>
                </div>
            </form>
        </div>
       
    </div>

<?php
    include('../../templates/footer.php');
} else {
    // Si no se proporciona el ID, redireccionar a la página principal
    header("Location: editar.php");
    exit();
}
?>