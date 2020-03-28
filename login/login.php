<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: login.php");
    } else {
      $message = 'Lo sentimos, esas credenciales no coinciden';
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <?php require 'partials/header.php'?>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="col-md-2">
    <img src="img/logo1.jpg"  height="" width="60%">    
    </div> 
    <div>
<h1 class="bg-primary container-fluid">Iniciar Sesion</h1>
  </div>
  <div class="container-fluid text-info col-md-4">
    <form action="login.php" method="POST">
      <div class="form-group">
        <label form="email">Ingresa tu Email </label>
        <input class="form-control" name ="email" type="text">
      </div>
      <div class="form-group">
        <label form="password">Ingresa tu contraseña </label>
        <input class="form-control" name ="password" type="password">
      </div>
      <input class="btn btn-primary"type="submit" name="Enviar" value="Ingrsar">
    </form>
    <br>
    <a class="btn btn-primary" href="signup.php" role="button">Registrarse </a>
  </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
  </body>
</html>