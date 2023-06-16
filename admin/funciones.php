<?php
function logear($datos)   ///////////FUNCIONAAAA////
{
    /*administrador@gmail.com - Riquelme */
    session_start();
    $email = $datos['email'];
    $pass =  $datos['pass'];
    $captcha = $datos['captcha'];
    $errores = [];
    //validamos los datos
    if ($email == NULL || $email == "") {
        array_push($errores, "Debe completar el email");
    }
    if ($email != NULL) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            array_push($errores, "El formato de email no es válido");
        }
    }
    if ($pass == NULL || $pass == "") {
        array_push($errores, "Debe completar el pass");
    }

    //Si no hay errores
    if ($errores == NULL) {
        //hacemos la consulta a la BD
        include('bd.php');
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $consulta =  mysqli_query($conexion, $sql);
        mysqli_close($conexion);

        $rta = mysqli_fetch_array($consulta);
        // Si rta no es null, es decir que trajo un dato

        if ($rta != NULL) {
            //verificamos captcha
            if ($captcha != $_SESSION['captcha']) {
                array_push($errores, "Los códigos no coinciden");
            } else {

                //verificarmos constraseña
                $verifcar = password_verify($pass, $rta['password']);
                if ($email == $rta['email'] && $verifcar == TRUE) {
                    //si esta todo ok, iniciamos sesion
                    session_start();
                    $_SESSION = $rta;
                    // reenviamos al panel de control
                    header('location: admin/dashbord.php');
                    exit;
                } else {

                    array_push($errores, "Las contraseñas no coinciden");
                }
            }
        } else {
            echo "<script language='javascript'>
                alert('NO SE PUDO INGRESAR!');
                location.assign('menuprincipal.php');
            </script>";
        exit;
        }
        
    }

    return $errores;
}
// BUSCAR -
function buscar($id, $tabla, $campo)
{
    include('bd.php');

    $sql = "SELECT * FROM $tabla WHERE $campo = " . $id;

    $consulta =  mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    return $consulta;
}

// TURNO --- CREAR // FUNCIONA 
function guardarTurno()
{

    $name = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $hora = $_POST['hora'];
    $errores = [''];

    if ($name == NULL || $name == "") {
        array_push($errores, "Ingrese un nombre");
    }
    if ($apellido == NULL || $apellido == "" ) {
        array_push($errores, "Ingrese un apellido");
    }
    if ($dia == NULL || $dia == "") {
        array_push($errores, "Ingrese un dia");
    }
    if ($mes == NULL || $mes == "") {
        array_push($errores, "Ingrese mes");
    }
    if ($hora  == NULL || $hora == "") {
        array_push($errores, "Ingrese hora");
    }


    include('bd.php');
    $sql = "INSERT INTO turno (nombre,apellido,dia,mes,hora)
     VALUES ('$name','$apellido','$dia','$mes','$hora')";

    $resultado =  mysqli_query($conexion, $sql);
    if ($resultado) {
        echo "<script language='javascript'>
                alert('El turno fue guardado correctamente');
                location.assign('index.php');
            </script>";
        exit;
    } else {
        echo "<script language='javascript'>
                alert('No pudo guardarse el turno.');
                location.assign('index.php');
            </script>";
        exit;
    }

    return $errores;
};

///CREAR SERVICIO // FUNCIONAAA 
function NeWServicio()
{
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $errores = [];
    if ($titulo == NULL || $titulo == "") {
        array_push($errores, "Ingrese un título");
    }
    if ($precio == NULL || $precio == "") {
        array_push($errores, "Ingrese un precio");
    }
    if ($descripcion == NULL || $descripcion == "") {
        array_push($errores, "Ingrese una descripción");
    }

    if ($_FILES) {
        if ($_FILES['icono']['error'] != 0) { // HAY UN ERRO

            array_push($errores, "Hubo un error al cargar el archivo");
        } else { //NO hay error
            $ext = pathinfo($_FILES['icono']['name'], PATHINFO_EXTENSION);
            // Genera un nombre único para la imagen

            $nombreImagen = uniqid() . '.' . $ext;
            // Ruta donde se guardará la imagen (puedes ajustar la ruta según tu necesidad)
            $imgservicio = '../../imgServicios/';
            $rutaImagen = $imgservicio . $nombreImagen;

            // Crea el directorio si no existe
            if (!is_dir($imgservicio)) {
                mkdir($imgservicio, 0777, true);
            }

            // Mueve la imagen a la ubicación deseada
            if (move_uploaded_file($_FILES['icono']['tmp_name'], $rutaImagen)) {
                include('bd.php');


                $sql = "INSERT INTO servicio (icono, titulo, precio, descripcion)
                     VALUES ('$rutaImagen ', '$titulo', '$precio', '$descripcion')";


                if (mysqli_query($conexion, $sql)) {
                    array_push($errores, "Servicio registrado con éxito");
                } else {
                    array_push($errores, "Error al guardar el servicio en la base de datos");
                }
                mysqli_close($conexion);
            }
        }
        header("location:index.php");
    }
    
    return $errores;
}


//REGISTRODEVENTA - CREAR:PHP      // FUNCIONAAA!!   
function NuevaVenta()
{
    $servicio = $_POST['servicio'];
    $empleado = $_POST['empleado'];
    $precio = $_POST['precio'];
    $dia = date('d-m-y');
    $errores = [];

    if ($servicio == NULL || $servicio == "") {
        array_push($errores, "Debe completar el servicio brindado");
    }
    if ($empleado == NULL || $empleado == "") {
        array_push($errores, "Completa con el Nombre del empleado");
    }
    if ($precio == NULL || $precio == "") {
        array_push($errores, "Debe completar con el precio del servicio.");
    }

    if ($errores == NULL) {
        include('bd.php');

        $sql = "INSERT INTO registroventas (servicio,empleado,precio,dia)
        VALUES ('$servicio','$empleado','$precio','$dia')";

        mysqli_query($conexion, $sql);
        mysqli_close($conexion);
        array_push($errores, "Venta registrada");
        header("location:index.php");
    }
    return $errores;
};
//EQUIPO - CREAR.PHP  //       FUNCIONA
function NewEquipo()
{
    $puesto = $_POST['puesto'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $errores = [];

    if ($puesto == NULL || $puesto == "") {
        array_push($errores, "Debe completar el cargo correspondiente");
    }
    if ($nombre == NULL || $nombre == "") {
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

    include('bd.php');

    $sql = "INSERT INTO empleado(puesto,nombres,apellido,dni,celular,direccion) VALUES ('$puesto','$nombre','$apellido','$dni','$celular','$direccion')";

    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    array_push($errores, " Usuario registrado con éxito");

    return $errores;
}
////////////////////////////////////////////////////////////////////////////////////////
