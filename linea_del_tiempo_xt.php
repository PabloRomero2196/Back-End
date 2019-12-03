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
    if (isset($_POST["ano_linea"])) {
        $ano_linea = $_POST["ano_linea"];
        $acontecimiento_linea = $_POST["acontecimiento_linea"];


        $sql = "INSERT INTO `equipo4_nuestraCasa_linea_del_tiempo` 
        (`idLinea`, `ano_linea`, `acontecimiento_linea`) 
        VALUES (NULL, '$ano_linea', '$acontecimiento_linea');";




        ejecutar($sql);
        echo "<script language = 'javascript'>";
        echo "window.location.assign('linea_del_tiempo.php');";
        echo "</script>";
    } else {
        echo "<script language = 'javascript'>";
        echo "window.location.assign('linea_del_tiempo.php');";
        echo "</script>";
    }
    ?>
</body>

</html>