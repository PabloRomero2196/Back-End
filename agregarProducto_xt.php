<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agregar Certificación</title>
</head>

<body>
  <?php
  include "conexion.php";
  if (isset($_POST["nombre_certificacion"])) {
    $nombre_producto = $_POST["nombre_certificacion"];
    $link_certificacion = $_POST["link_certificacion"];

    $sql = "INSERT INTO `equipo4_producto` (`id_productos`, `nombre_producto`, `imagen_producto`, `link_producto`) 
        VALUES (NULL, 'asdasf', '', '');";

    ejecutar($sql);
    echo "<script language = 'javascript'>";
    echo "window.location.assign('nuestra_casa.php');";
    echo "</script>";
  } else {
    echo "<script language = 'javascript'>";
    echo "window.location.assign('producto.php');";
    echo "</script>";
  }
  ?>
</body>

</html>