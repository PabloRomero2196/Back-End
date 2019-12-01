<?php
    // Agrega el código aqui
    include "../conexion.php";
    if (isset($_POST["nombre_producto"])){
      $nombreProducto = $_POST["descripcion"];
    //   $imagenProducto = $_POST["imagen_producto"];
      $linkProducto = $_POST["link_producto"];

        $sql = "INSERT INTO equipo4_producto (descripcion, link_producto) VALUES ('$nombreProducto', '$linkProducto')";

        ejecutar($sql);

  echo "<script language='javascript'>window.location.assign('productos.php');</script>";
        }
  ?>