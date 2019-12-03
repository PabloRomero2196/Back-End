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
    if (isset($_REQUEST["id"])) {
        include "conexion.php";
        $id = $_REQUEST["id_equipo_trabajo"];  //leemos la variable id enviada en el querystring

        //elaboramos el query para desactivar el contacto colocando un 0 en la columna activo de la BD
        $sql = "update equipo4_nuestraCasa_equipo_trabajo set activo = 0 where id_equipo_trabajo =" . $id;
        $nada = ejecutar($sql);

        //redireccionamos a index para redendear dicha página con el contacto eliminado
        echo "<script language='javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    } else {
        //redireccionamos a index.php
        echo "<script language='javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    }

    ?>

</body>

</html>