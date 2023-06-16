<link href="../../css/stylo.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php
include('admin/funciones.php');

$email = "";
$pass = "";

if ($_POST) {
    $errores = logear($_POST);

    //variables para persistencia
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} ?>
<style>
    #fondoLogin {
        background-image: url('imgFondos/fondopelu3.jpg');
        background-size: 100% 100%;
    }
</style>

<body id="fondoLogin">


    <div class="container justify-content-center text-center col-5">
        <br><br><br><br>

        <div class="text-center text-white bg-dark bg-opacity-80 border border-light rounded-start">
            <form action=" login.php" method="POST" enctype="multipart/form-data">
                <div class="m-4">
                    <label for="" class="form-label fs-4 fst-italic">Ingrese Email:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                    <label for="" class="form-label fs-4 fst-italic">Ingrese Contraseña:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Ingrese Contraseña">

                    <label for="" class="form-label fs-4 fst-italic">Ingrese el siguiente texto:</label>
                    <img src="admin/captcha.php">
                    <input type="text" class="form-control" name="captcha">
                </div>
                <input class="btn btn-success m-2" href="/admin/index.php" type="submit" value="ENVIAR">
            </form>
        </div>
    </div>
    </div>
</body>
    <?php include('fotter.php') ?>