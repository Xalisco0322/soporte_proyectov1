<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO login (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php require 'partials/header.php' ?>
  <?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
  <?php endif; ?>
<h1>SignUp</h1>
<span>or <a href="login.php">Login</a></span>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
<div class="sign-up-htm">
  <form action="signup.php" method="POST">
    <div class="group">
      <label for="user" class="label">Direccion de Email</label>
      <input id="user" type="text" class="input" name="email">
    </div>
    <div class="group">
        <label for="pass" class="label">Contraseña</label>
        <input id="pass" type="password" class="input" data-type="password" name="password">
    </div>
    <div class="group">
        <label for="pass" class="label">Repetir Contraseña</label>
        <input id="pass" type="password" class="input" data-type="password" name="confirm_password">
    </div>
    <div class="group">
        <input type="submit" class="button" onclick="login"() value="Ingresar">
    </div>
    <div class="hr"></div>
    <div class="foot-lnk">
        <label for="tab-1">Already Member?</a></label>
    </div>
  </form>
  </div>
</body>
</html>