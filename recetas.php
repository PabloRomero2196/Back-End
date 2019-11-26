<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Recetas</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Recetas</h2>
        <ul class="tabs">
            <li data-tab-target="#recetas" class="tab">Recetas</li>
            <li data-tab-target="#categorias" class="tab">Categorias</li>
        </ul>

        <div class="tab-content">

            <!-- recetas  -->
            <div class="contenedor" id="recetas" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Imagen</p>
                </div>

                <!-- Element -->
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

            <!-- categorias  -->
            <div class="contenedor" id="categorias" data-tab-content class="active">
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

        </div>

    </section>



    <!-- Recetas -->
    <div id="modalAgregaunaReceta" class="modalReceta">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Agrega una Receta</h2>
        <div class="anadirimg">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>

        </div>
        <form action="">


            <p class="tituloReceta">Título</p>
            <textarea rows="4" cols="50" placeholder="Título"> </textarea>
            <p class="categoria">Categoría</p>
            <textarea placeholder="Categoría" rows="4" cols="50"> </textarea>
            <p class="tiempo">TIEMPO</p>
            <textarea placeholder="Tiempo de Preparación" rows="4" cols="50"> </textarea>
            <p class="porcion">PORCIÓN</p>
            <textarea placeholder="Porción" rows="4" cols="50"> </textarea>
            <p class="ingre">INGREDIENTES</p>
            <textarea placeholder="Ingredientes" rows="4" cols="50"> </textarea>
            <p class="prep">PREPARACIÒN</p>
            <textarea placeholder="Año" rows="4" cols="50"> </textarea>
            <p class="varia">VARIACIONES</p>
            <textarea placeholder="Variaciones" rows="4" cols="50"> </textarea>
            <p class="chef">COMO LO HACE EL CHEF</p>
            <textarea placeholder="Inserta URL" rows="4" cols="50"> </textarea>
            <!-- <p class="imagenReceta">Título</p>
            <input type="text" placeholder="Título"> -->

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>


    <!-- MODALES -->

    <!-- Recetas -->
    <div id="modalAgregaunaCategoria" class="modalCategoria">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2 class="">Agrega Categoría</h2>
        <p class="parrafoCategoria"> Agrega un título a tu nueva sección </p>
        <form action="">

            <p class="tituloCategoria">Título</p>
            <input type="text" placeholder="Título">

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Recetas -->
    <div id="modalEditaunaCategoria" class="modalEditarCategoria">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Edita la Categoría</h2>
        <p class="parrafoCategoria"> Edita el título de tu categoría </p>
        <form action="">

            <p class="tituloEditaCategoria">Título</p>
            <textarea placeholder="Título de Categoría" rows="4" cols="50"> </textarea>

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Recetas -->
    <div id="modalEliminaUnaCategoria" class="modalEditarCategoria">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Edita la Categoría</h2>
        <p class="parrafoCategoria"> Edita el título de tu categoría </p>
        <form action="">

            <p class="tituloEditaCategoria">Título</p>
            <textarea placeholder="Título de Categoría" rows="4" cols="50"> </textarea>

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

</body>

</html>