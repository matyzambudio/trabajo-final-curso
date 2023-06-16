<?php
include('../../templates/header.php');
include('../../bd.php');

if(isset($_GET['ID'])) {
    $id = $_GET['ID'];

   
    $sql = $conexion->prepare("SELECT * FROM turno WHERE ID = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $resultado = $sql->get_result();
    $turno = $resultado->fetch_assoc();

    
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['hora'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $hora = $_POST['hora'];

       
        $sql = $conexion->prepare("UPDATE turno SET 
        nombre = ?,
        apellido = ?,
        dia = ?,
        mes = ?,
        hora = ? WHERE ID = ?");
        $sql->bind_param("sssssi", $nombre, $apellido, $dia, $mes, $hora, $id);
        $sql->execute();

         //MAndamos a la tabla lista turnos 
        header("Location: lista.php");
        exit();
    }
}
?>
<style>
    h1{
        font-style: italic;
        }
    #fondo{ background: black;
           opacity: 90%;
    }
    
    h5{
        color: white;
        font-size: 100%;
    }
</style>

<div class="card" id="fondo">
    <div class="card-header text-white fluid">
        <h1 class="text-center mt-2">Editar Turnos</h1>
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nombre" class="form-label"><h5>Nombre:</h5></label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $turno['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label"><h5>Apellido:</h5></label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $turno['apellido']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dia" class="form-label"><h5>Día:</h5></label>
                <input type="text" class="form-control" id="dia" name="dia" value="<?php echo $turno['dia']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="mes" class="form-label"><h5>Mes:</h5></label>
                <input type="text" class="form-control" id="mes" name="mes" value="<?php echo $turno['mes']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label"><h5>Hora:</h5></label>
                <input type="text" class="form-control" id="hora" name="hora" value="<?php echo $turno['hora']; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-success d-grid gap-2 col-6 mt-3 mx-auto"><h4>Guardar Cambios</h4></button>
        </form>
    </div>
</div>
 <script src="<?php $url ?>js.js.js"></script>
<?php include('../../templates/footer.php'); ?>
