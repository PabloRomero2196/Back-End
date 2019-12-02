<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agregar Producto</title>
</head>

<body>
  <?php
  include "conexion.php";
  if (isset($_POST["nombre_producto"])) {
    $nombre_producto = $_POST["nombre_producto"];


    $sql = "INSERT INTO `equipo4_producto` 
    (`id_productos`, `nombre_producto`, `imagen_producto`, `link_producto`)
    VALUES (NULL, '$nombre_producto', '', 'link_producto');";


    ejecutar($sql);
    echo "<script language = 'javascript'>";
    echo "window.location.assign('productos.php');";
    echo "</script>";
  } else {
    echo "<script language = 'javascript'>";
    echo "window.location.assign('productos.php');";
    echo "</script>";
  }
  ?>
</body>

</html>