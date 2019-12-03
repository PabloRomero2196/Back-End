<?php
include "conexion.php";
$sql = "select * from equipo4_nuestraCasa_equipo_trabajo";
$rs = ejecutar($sql);

while ($datos = mysqli_fetch_array($rs)) {
    echo '
                            <div class="element">
                                <figure><img src="img/retrato1.jpg" alt="amazon"></figure>
                                <div>
                                    <p><b>Nombre Trabajador:</b></p>
                                    <p>' . $datos["nombre_trabajador"] . '</p>
                                    <p><b>Puesto Trabajador:</b></p>
                                    <p>' . $datos["puesto"] . '</p>
                                    <p><b>Descripción:</b></p>
                                    <p>' . $datos["descripcion_trabajador"] . '</p>
                                </div>
                                <div class="contenedorIconosEditarBorrar">
                                    <a onclick="editar()">
                                        <figure><img src="img/edit.svg" alt=""></figure>
                                    </a>
                                    <a onclick="eliminarIntegrante()">
                                        <figure><img src="img/trash.svg" alt=""></figure>
                                    </a>
                                </div>    
                            </div>';
}
