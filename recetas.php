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
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalAgregaUnaReceta()" class="manita"></figure>
                    <p>Agregar Receta</p>
                </div>

                <!-- Element -->
                <div class="element">
                    <figure><img src="img/img1.jpg" alt="img3"></figure>
                    <div>
                        <p>Receta 1</p>
                    </div>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="abrirModalEditaUnaCategoria()">
                            <figure class="editar"><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure class="borrar"><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>
            </div>

            <!-- categorias  -->
            <div class="contenedor" id="categorias" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalAgregaUnaCategoria()" class="manita"></figure>
                    <p>Agregar Categoria</p>
                    <<<<<<< HEAD </div> <!-- Elemento -->
                        <div class="element">
                            <p>Categoria</p>
                            <form action="POST">
                                <textarea name="" id="direccion" cols="50" rows="10">Recetas de la abuela
                    </textarea>
                            </form>
                            <div class="contenedorIconosEditarBorrar">
                                <a onclick="editar()">
                                    <figure><img src="img/edit.svg" alt=""></figure>
                                </a>
                                <a onclick="borrar()">
                                    <figure><img src="img/trash.svg" alt=""></figure>
                                </a>
                            </div>
                            =======
                            >>>>>>> master
                        </div>

                        <!-- Elemento  -->
                        <div class="element">
                            <p>Categoria</p>
                            <form action="POST">
                                <<<<<<< HEAD=======<textarea name="" id="direccion" cols="50" rows="10">Recetas de la abuela
                                    </textarea>
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

                        <!-- Elemento  -->
                        <div class="element">
                            <p>Categoria</p>
                            <form action="POST">
                                >>>>>>> master
                                <textarea name="" id="direccion" cols="50" rows="10">Picar la dieta
                    </textarea>
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

            </div>

    </section>


    <!-- MODALES -->

    <!-- Recetas -->
    <div id="modalAgregaUnaReceta" class="modalReceta">
        <div onclick="cerrarModalAgregaUnaReceta()" class="manita">
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

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

    <!-- Recetas -->
    <div id="modalAgregaUnaCategoria" class="modalCategoria">
        <div onclick="cerrarModalAgregaUnaCategoria()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2 class="">Agrega Categoría</h2>
        <p class="parrafoCategoria"> Agrega un título a tu nueva sección </p>
        <form action="">

            <p class="tituloCategoria">Título</p>
            <input type="text" placeholder="Título">

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

    <!-- Recetas -->
    <div id="modalEditaUnaCategoria" class="modalEditarCategoria">
        <div onclick="cerrarModalEditaUnaCategoria()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Edita la Categoría</h2>
        <p class="parrafoCategoria"> Edita el título de tu categoría </p>
        <form action="">

            <p class="tituloEditaCategoria">Título</p>
            <textarea placeholder="Título de Categoría" rows="4" cols="50"> </textarea>

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

    <!-- Recetas -->
    <div id="modalEliminaUnaCategoria" class="modalEditarCategoria">
        <div onclick="cerrarModalEliminaUnaCategoria()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Edita la Categoría</h2>
        <p class="parrafoCategoria"> Edita el título de tu categoría </p>
        <form action="">

            <p class="tituloEditaCategoria">Título</p>
            <textarea placeholder="Título de Categoría" rows="4" cols="50"> </textarea>

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>