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
    if (isset($_POST["titulo_receta"])) {
        $titulo_receta = $_POST["titulo_receta"];
        $tiempo_receta = $_POST["tiempo_receta"];
        $porcion_receta = $_POST["porcion_receta"];
        $ingredientes_receta = $_POST["ingredientes_receta"];
        $preparacion_receta = $_POST["preparacion_receta"];
        $variacion_receta = $_POST["variacion_receta"];
        $comoLoHaceElChef_receta = $_POST["comoLoHaceElChef_receta"];


        $sql = "INSERT INTO `equipo4_recetas_recetas` 
        (`id_receta`, `titulo_receta`, `tiempo_receta`, `porcion_receta`, `ingredientes_receta`, `preparacion_receta`, `variacion_receta`,`comoLoHaceElChef_receta`, `imagen_receta`, `categoria_receta`) 
        VALUES (NULL, '$titulo_receta', '$tiempo_receta', '$porcion_receta', '$ingredientes_receta', '$preparacion_receta', '$variacion_receta','$comoLoHaceElChef_receta', '', '');";



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