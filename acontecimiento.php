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
    include "../conexion.php";
    if (isset($_POST["ano_linea"])) {
        // el formulario sí se envió, podemos leer los valores
        $ano_linea = $_POST["ano_linea"];
        $acontecimiento_linea = $_POST["acontecimiento_linea"];

        $sql = "insert into equipo4_nuestraCasa_linea_del_tiempo (ano_linea, acontecimiento_linea)
        values ('$ano_linea', '$acontecimiento_linea')";

        // $sql = "INSERT INTO equipo4_nuestraCasa_linea_del_tiempo ('idLinea', 'ano_linea', 'acontecimiento_linea')
        // VALUES ('$ano_linea', '$acontecimiento_linea')";
        ejecutar($sql);

        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    } else {
        //el formulario no se envió, redireccionanos la página a index.php
        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    }

    ?>
</body>

</html>