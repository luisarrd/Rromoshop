
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">


</head>
<body>




  <form action="logica/loguear.php" method="POST">
    <h1>Iniciar Sesion</h1>


     <div class="contenedor">



         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input name="usuario" type="text" placeholder="ingrese el usuario">

         </div>

         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input name="clave" type="password" placeholder="ingrese la clave">

         </div>
         <input type="submit" value="Listo" class="button">
     </div>
    </form>
</body>
</html>
