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

        <h2>Recetas Categorías</h2>
        <ul class="tabs">
            <a href="recetas.php">
                <li class="tab">Recetas</li>
            </a>
            <a href="categorias_recetas.php" class="activado">
                <li class="tab">Categorías</li>
            </a>
        </ul>

        <div class="tab-content">
            <!-- categorias  -->
            <div class="contenedor" id="categorias" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalAgregaUnaCategoria()" class="manita"></figure>
                    <p>Agregar Categoria</p>
                </div> <!-- Elemento -->
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

                </div>

                <!-- Elemento  -->
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
                </div>

                <!-- Elemento  -->
                <div class="element">
                    <p>Categoria</p>
                    <form action="POST">
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