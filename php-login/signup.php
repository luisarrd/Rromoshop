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
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="assets/css/estilos.css">


</head>
<body>
  <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

 <form action="signup.php" method="POST">

    <h1>Registrate</h1>
     <div class="contenedor">

     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input name="email" type="text" placeholder="Ingrese su email">

         </div>

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input name="password" type="password" placeholder="Ingrese su contraseña">

         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input name="confirm_password" type="password" placeholder="Confirme contraseña">

         </div>
         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>
