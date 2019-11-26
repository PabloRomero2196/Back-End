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
            <li data-tab-target="#sucursalesNC" class="tab">Sucursales</li>
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
                <div class="element">
                    <figure><img src="img/slider1.jpg" alt="img3"></figure>
                    <div>
                        <p>Imagen 1</p>
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
            </div>

            <!-- Sucursales  -->
            <div class="contenedor" id="sucursalesNC" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Sucursal</p>
                </div>

                <!-- Elemento  -->
                <div class="element">
                    <figure><img src="img/logo_usda.svg" alt="img1"></figure>
                    <div>
                        <p>Certificación organica Usda</p>
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

                <!-- Elemento  -->
                <div class="element">
                    <figure><img src="img/logo_certimex.svg" alt="img1"></figure>
                    <div>
                        <p>Certificación certimex</p>
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
            </div>

            <!-- Nuestro Equipo  -->
            <div class="contenedor" id="nuestroEquipo" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Integrante</p>
                </div>
                <!-- Elemento -->
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
            </div>

            <!-- Trabajadores y Familas  -->
            <div class="contenedor" id="trabajadoresYfamilias" data-tab-content class="active">
                <form action="">
                    <p>Trabajadores</p>
                    <input type="number" value="22">

                    <p>Familas</p>
                    <input type="number" value="39">
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
        <form action="">
            <p>Año:</p>
            <input type="number" name="quantity" min="1" max="2020" placeholder="Año">

            <p>Acontecimiento:</p>
            <input type="text">

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Nuestra casa -->
    <div id="modalequipo" class="modalequipo">
        <div onclick="cerrarmodalequipo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nuestro Equipo</h2>
        <p class="parrafoAdquerir"> Agregar Imágen del Nuevo Integrante</p>
        <div class="anadirimgsucursal">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
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
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

</body>

</html>