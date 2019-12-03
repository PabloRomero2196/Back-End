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
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];


        $sql = "INSERT INTO `equipo4_categorias_recetas` 
        (`id_categoria`, `nombre`, `contendio`) 
        VALUES (NULL, '$nombre', '');";


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