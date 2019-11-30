<?php session_start(); ?>
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
    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
        $pw = $_POST["pw"];
        include "../conexion.php";

        //checamos si existe esta combinación de usuario y password en la BD
        $sql = "select * from equipo4_login where usuario = '$usuario' and pw = PASSWORD('$pw')";
        $rs = ejecutar($sql);

        if (mysqli_num_rows($rs) == 0) {
            //la combinación user name y password no es correcta. Redireccionamos la página
            echo "<script language='javascript'>";
            echo "window.location.assign('log-in.php?login=error');";
            echo "</script>";
        } else {
            //combinación correcta, creamos la sesión
            $datos = mysqli_fetch_array($rs);
            $_SESSION["usuario"] = $datos["usuario"];
            //redireccionamos la página a menu.php 
            echo "<script language='javascript'>";
            echo "window.location.assign('home.php');";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "window.location.assign('home.php');";
        echo "</script>";
    }

    ?>
</body>

</html>