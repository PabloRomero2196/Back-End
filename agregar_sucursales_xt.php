<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Receta</title>
</head>

<body>
    <?php
    include "conexion.php";
    if (isset($_POST["hipervinculo"])) {
        $hipervinculo = $_POST["hipervinculo"];
        $nombre_lugar = $_POST["nombre_lugar"];

        $sql = "INSERT INTO `equipo4_inicio_sucursales` (
            `id_sucursales`, `hipervinculo`, `nombre_lugar`, `imagen_lugar`) 
            VALUES (NULL, '$hipervinculo', '$nombre_lugar', '');";


        ejecutar($sql);
        echo "<script language = 'javascript'>";
        echo "window.location.assign('index.php');";
        echo "</script>";
    } else {
        echo "<script language = 'javascript'>";
        echo "window.location.assign('index.php');";
        echo "</script>";
    }
    ?>


</body>

</html>