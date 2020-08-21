 <?php


 session_start();
 $usuario = $_SESSION['username'];


 echo "<h1>BIENVENIDO $usuario </h1>";


 echo "<a href='logica/salir.php'>Salir </a>"


  ?>
