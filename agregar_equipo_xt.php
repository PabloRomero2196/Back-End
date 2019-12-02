<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    include "conexion.php";
    if (isset($_POST["nombre_trabajador"])) {
        $nombre_trabajador = $_POST["nombre_trabajador"];
        $puesto = $_POST["puesto"];
        $descripcion_trabajador = $_POST["descripcion_trabajador"];
        $id_equipo_trabajo = $_POST["id_equipo_trabajo"];


        $sql = "INSERT INTO `equipo4_nuestraCasa_equipo_trabajo` 
        (`id_equipo_trabajo`, `nombre_trabajador`, `puesto`, `descripcion_trabajador`, `imagen_trabajador`)
        VALUES (NULL, '$nombre_trabajador', '$puesto', '$descripcion_trabajador', '');";


        ejecutar($sql);
        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    } else {
        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    }
    ?>
</body>

</html>