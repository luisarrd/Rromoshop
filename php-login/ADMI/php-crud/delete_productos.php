<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM productos WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Eliminado Satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: CP.php');
}

?>
