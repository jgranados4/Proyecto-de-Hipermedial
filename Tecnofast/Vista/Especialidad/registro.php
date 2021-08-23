<?php
require 'db.php';
$message = '';
if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO registro (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Nuevo usuario creado con éxito';
    } else {
        $message = 'Lo sentimos, debe haber un problema al crear su cuenta.';
    }
}
?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Registro</title>

    <!--JQUERY-->
    <!-- librerias-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css">

</head>

<body>
    <h1>Registro</h1>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/login2.png" />
                </div>

                <?php if (!empty($message)) : ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>
                <form action="registro.php" class="col-12" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" value="Ingresar" name="Ingresar"><i class="fas fa-sign-in-alt"></i> Registrar </button>
                </form>
                        <a href="login.php" id="link"><h1>Iniciar Sesion</h1></a>
                
            </div>
        </div>
    </div>
</body>

</html>