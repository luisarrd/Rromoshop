<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM productos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Producto = $row['Producto'];
    $Precio = $row['Precio'];
    $Provedor = $row['Provedor'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Producto= $_POST['Producto'];
  $Precio = $_POST['Precio'];
  $Provedor = $_POST['Provedor'];

  $query = "UPDATE productos set Producto = '$Producto', Precio = '$Precio', Provedor = '$Provedor'  WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Resgistro Actualizado Satisfactoriamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: CP.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $Producto; ?>" placeholder="Escriba nuevo Producto">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $Precio;?></textarea>
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $Provedor;?></textarea>
        </div>
        <button class="btn btn-success" name="update">Actualizar</button>
        <a href="CP.php" class="btn btn-danger">Cancelar</a>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
