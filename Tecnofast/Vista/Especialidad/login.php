<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
     header('Location: /Tecnofast%20Vasquez-Betancourt-Granados/Tecnofast/Vista/Especialidad');
  }
  require 'db.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM registro WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /Tecnofast%20Vasquez-Betancourt-Granados/Tecnofast/Vista/Especialidad');
    } else {
      $message = 'Lo siento, esas credenciales no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Login</title>

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
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/login2.png" />
                </div>
                <?php if (!empty($message)) : ?>
                    <p> <?= $message ?></p>
                <?php endif; ?>

                <form action="login.php" class="col-12" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" value="Ingresar" name="Ingresar"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="registro.php">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
