<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';

    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>SignUp</title>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php require 'partials/header.php' ?>
  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
  <?php endif; ?>
  <div class="col-md-2">
    <img src="img/logo1.jpg"  height="" width="60%">    
  </div> 
  <div>
    <h1 class="bg-primary container-fluid">Registro de usuario</h1>
  </div>
  <div class="container-fluid text-info col-md-4">
    <form action="signup.php" method="POST">
      <div class="form-group">
        <label form="email">Ingresa tu Email </label>
        <input class="form-control" name ="email" type="text">
      </div>
      <div class="form-group">
        <label form="password">Ingresa tu contraseña </label>
        <input class="form-control" name ="password" type="password">
      </div>
      <div class="form-group">
        <label form="confirm_password">Confirma tu contraseña </label>
        <input class="form-control" name ="confirm_password" type="password">
      </div>
      <input class="btn btn-primary"type="submit" name="Enviar" value="Enviar">
    </form>
    <br>
    <a class="btn btn-primary" href="login.php" role="button">Iniciar Sesion </a>
  </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
  </body>
</html>
