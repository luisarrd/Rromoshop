<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a Promoshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/business-casual.min.css" rel="stylesheet">
    <!-- Estilos del ccs de login -->
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body >

    <header>
      <a>Promoshop</a>
      <P>Promociones y descuentos</p>
    </header>

    <?php if(!empty($user)): ?>
      <br> BIENVENIDO. <?= $user['email']; ?>
      <br>Acceso completado <br>
      <a  href="paginashop/index.html" role="button">Entrar</a>
    <?php else: ?>
<br>

    <h2>Inicie sesion o registrese</h2>

    <a type="button" href="login.php">ENTRAR</a> or
    <a href="signup.php">Registrar</a>
    <?php endif; ?>

  </body>

<br>
------------------------------------------------------------

  <footer>
    Eres Ad, accede a:<a style="color:red" href="ADMI/admi.php">ADMINISTRADOR</a>
  </footer>

</html>
