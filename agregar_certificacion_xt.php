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
        $nombre_certificacion = $_POST["nombre_certificacion"];
        $link_certificacion = $_POST["link_certificacion"];

        $sql = "INSERT INTO `equipo4_home_certificaciones` (`id_certificaciones`, `imagen`, `certificacion_nombre`, `link_certificacion`) VALUES (NULL, '', '$nombre_certificacion', '$link_certificacion');";

        ejecutar($sql);
        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    } else {
        echo "<script language = 'javascript'>";
        echo "window.location.assign('index.php');";
        echo "</script>";
    }
    ?>
</body>

</html>