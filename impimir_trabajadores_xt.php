<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir Trabajadores</title>
</head>

<body>
    <?php
    include "conexion.php";
    $sql = "select * from equipo4_nuestraCasa_equipo_trabajo";
    $rs = ejecutar($sql);

    while ($datos = mysqli_fetch_array($rs)) {
        echo '
    <div class="element">
        <figure><img src="img/retrato1.jpg" alt="amazon"></figure>
        <div>
            <p>Nombre Trabajador:</p>
            <p>' . $datos["nombre_trabajador"] . '</p>
            <p>Descripción:</p>
            <p>' . $datos["descripcion_trabajador"] . '</p>
        </div>
        <div class="contenedorIconosEditarBorrar">
            <a onclick="editar()">
                <figure><img src="img/edit.svg" alt=""></figure>
            </a>
            <a onclick="borrar()">
                <figure><img src="img/trash.svg" alt=""></figure>
            </a>
        </div>
    </div>';
    }
    ?>
</body>

</html>