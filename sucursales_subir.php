<?php
                include "conexion.php";

                $sql = "SELECT FROM * equipo4_sucursales";
                $rs = ejecutar($sql);

                while ($datos = mysql_fetch_array($sql)) {
                    echo '
                    <div class="element">
                    <figure><img src="img/sucursal_Amazon.png" alt="amazon"></figure>
                    <div>
                        <p>Amazon</p>
                    </div>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                    </div>
                    ';
                }
