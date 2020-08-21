<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Producto = $_POST['Producto'];
  $Precio = $_POST['Precio'];
  $Provedor = $_POST['Provedor'];
  $query = "INSERT INTO productos(Producto, Precio, Provedor) VALUES ('$Producto', '$Precio', '$Provedor')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: CP.php');

}

?>
