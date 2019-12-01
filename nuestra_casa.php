<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Nuestra Casa</h2>
        <ul class="tabs">
            <li data-tab-target="#lineaDelTiempo" class="tab">Linea del Tiempo</li>
            <li data-tab-target="#nuestroEquipo" class="tab">Nuestro Equipo</li>
            <li data-tab-target="#trabajadoresYfamilias" class="tab">Trabajadores y Familias</li>
        </ul>

        <div class="tab-content">

            <!-- Linea del Tiempo -->
            <div class="contenedor" id="lineaDelTiempo" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Evento</p>
                </div>
                <!-- Element -->
                <div class="element">
                    <p>2001</p>
                    <p>Acontecimiento</p>
                    <form method="POST" action="">
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Element -->
                <div class="element">
                    <p>2001</p>
                    <p>Acontecimiento</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Element -->
                <div class="element">
                    <p>2001</p>
                    <p>Acontecimiento</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Element -->
                <div class="element">
                    <p>2001</p>
                    <p>Acontecimiento</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Element -->
                <div class="element">
                    <p>2001</p>
                    <p>Acontecimiento</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nuestro Equipo  -->
            <div class="contenedor" id="nuestroEquipo" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalequipo()" class="manita"></figure>
                    <p>Agregar Integrante</p>
                </div>
                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/retrato1.jpg" alt="amazon"></figure>
                    <form action="POST">
                        <p>Titulo:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                        <p>Descripción:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/retrato2.jpg" alt="amazon"></figure>
                    <form action="POST">
                        <p>Titulo:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                        <p>Descripción:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/retrato3.jpg" alt="amazon"></figure>
                    <form action="POST">
                        <p>Titulo:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                        <p>Descripción:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>

                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/retrato4.jpg" alt="amazon"></figure>
                    <form action="POST">
                        <p>Titulo:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                        <p>Descripción:</p>
                        <textarea name="" id="direccion" cols="50" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus qui obcaecati rem exercitationem iure! Cum nihil perferendis recusandae tempore. Facere nobis alias rerum architecto neque incidunt quidem numquam necessitatibus sint!</textarea>
                    </form>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Trabajadores y Familas  -->
            <div class="contenedor" id="trabajadoresYfamilias" data-tab-content class="active">

                <form action="">
                    <p>Trabajadores y Familias</p>
                    <br>
                    <p>Familias productoras</p>
                    <input type="number" value="29">

                    <p>Trabajadores</p>
                    <input type="number" value="3">
                    <button type="submit" target="_self" class="save">
                        <p><i class="far fa-save"></i></p>
                    </button>
                </form>
            </div>


        </div>

    </section>
    <!-- MODALES -->

    <!-- Nuestra Casa -->
    <div id="modalLineadelTiempo" class="modal">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Línea del tiempo</h2>
        <form method="POST" action="">
            <p>Año:</p>
            <input type="number" name="quantity" min="1" max="2020" placeholder="Año">

            <p>Acontecimiento:</p>
            <input type="text">

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

    <!-- Nuestra casa -->
    <div id="modalequipo" class="modalequipo">
        <div onclick="cerrarModalequipo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nuestro Equipo</h2>
        <p class="parrafoAdquerir"> Agregar Imágen del Nuevo Integrante</p>
        <div class="anadirimgsucursal">
            <figure class="mascara"><img class="mascara" src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">
            <div class="nombretrab">
                <p class="titulonombre">Nombre</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>

            <div class="cargo">
                <p class="titulocargo">Cargo</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>
            <div class="descripcargo">
                <p class="titulodescrip">Descripción</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>
            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>