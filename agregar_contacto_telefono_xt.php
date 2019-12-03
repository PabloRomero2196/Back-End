<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Telefono</title>
</head>

<body>
    <?php
    include "conexion.php";
    if (isset($_POST["telefono"])) {
        $telefono = $_POST["telefono"];


        $sql = "INSERT INTO `equipo4_contacto` 
        (`id_contacto`, `telefono_contacto`, `direccion_contacto`, `correo_contacto`) 
        VALUES (NULL, '$telefono', '', '');";


        ejecutar($sql);
        echo "<script language = 'javascript'>";
        echo "window.location.assign('recetas.php');";
        echo "</script>";
    } else {
        echo "<script language = 'javascript'>";
        echo "window.location.assign('recetas.php');";
        echo "</script>";
    }
    ?>
</body>

</html>