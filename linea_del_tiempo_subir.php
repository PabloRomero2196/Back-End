<?php
include "conexion.php";
$sql = "select * from equipo4_nuestraCasa_linea_del_tiempo";
$rs = ejecutar($sql);

while ($datos = mysqli_fetch_array($rs)) {
    echo '
    <div class="element">
    <p>' . $datos["ano_linea"] . '</p>
    <p>Acontecimiento</p>
    <form method="POST" action="">
        <p name="" id="direccion" >' . $datos["acontecimiento_linea"] . '</p>
    </form>
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
