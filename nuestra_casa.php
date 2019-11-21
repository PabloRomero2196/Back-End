<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuestra Casa</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>

    <?php include 'header.php'; ?>


    <section>

        <h2>Pagina de Nuestra Casa</h2>
        <ul class="tabs">
            <li data-tab-target="#lineaDelTiempo" class="active tab">Carrusel de Imagenes</li>
            <li data-tab-target="#Sucursal" class="tab">Certificaciones</li>
            <li data-tab-target="#nuestroEquipo" class="tab">Sucursales</li>
            <li data-tab-target="#recetas" class="tab">Recetas</li>
        </ul>

        <div class="tab-content">

            <!-- Certificaciones  -->
            <div class="contenedor" id="carruselHome" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Imagen</p>
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

            <!-- Certificaciones  -->
            <div class="contenedor" id="certificaciones" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Certificación</p>
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

            <!-- Sucursales  -->
            <div class="contenedor" id="sucursales" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Acontecimiento</p>
                </div>
                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/img1.jpg" alt="img1"></figure>
                    <div>
                        <p>Comida</p>
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

            <!-- Recetas  -->
            <div class="contenedor" id="recetas" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Acontecimiento</p>
                </div>
                <div class="element">
                    <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                    <div>
                        <p>Comida</p>
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


        </div>

    </section>

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

    <div id="modalAgregaunaReceta" class="modalReceta">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Agrega una Receta</h2>
        <form action="">
            <p class="titulo">Título</p>
            <input type="text" placeholder="Título">
            <p class="categoria">Categoría</p>
            <input type="text" placeholder="Categoría">
            <p class="tiempo">TIEMPO</p>
            <input type="text" placeholder="Tiempo de Preparación">
            <p class="porcion">PORCIÓN</p>
            <input type="text" placeholder="Año">
            <p class="ingre">INGREDIENTES</p>
            <input type="text" placeholder="Ingedientes">
            <p class="prep">PREPARACIÒN</p>
            <input type="text" placeholder="Año">
            <p class="varia">VARIACIONES</p>
            <input type="text" placeholder="Año">
            <p class="chef">COMO LO HACE EL CHEF</p>
            <input type="text" placeholder="Inserta URL">

            <button><i class="far fa-edit"></i></button>
        </form>
    </div>

</body>

</html>