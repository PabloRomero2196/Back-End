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
            <a href="recetas.php" class="activado">
                <li class="tab">Recetas</li>
            </a>
            <a href="categorias_recetas.php">
                <li class="tab">Categorías</li>
            </a>
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
        <form action="agregar_receta_xt.php" method="post">
            <p class="tituloReceta">Título</p>
            <textarea rows="4" cols="50" placeholder="Título" name="titulo_receta"> </textarea>
            <p class="categoria">Categoría</p>
            <textarea placeholder="Categoría" rows="4" cols="50" name="categoria_receta"> </textarea>
            <p class="tiempo">TIEMPO</p>
            <textarea placeholder="Tiempo de Preparación" rows="4" cols="50" name="tiempo_receta"> </textarea>
            <p class="porcion">PORCIÓN</p>
            <textarea placeholder="Porción" rows="4" cols="50" name="porcion_receta"> </textarea>
            <p class="ingre">INGREDIENTES</p>
            <textarea placeholder="Ingredientes" rows="4" cols="50" name="ingredientes_receta"> </textarea>
            <p class="prep">PREPARACIÒN</p>
            <textarea placeholder="Año" rows="4" cols="50" name="preparacion_receta"> </textarea>
            <p class="varia">VARIACIONES</p>
            <textarea placeholder="Variaciones" rows="4" cols="50" name="variacion_receta"> </textarea>
            <p class="chef">COMO LO HACE EL CHEF</p>
            <textarea placeholder="Inserta URL" rows="4" cols="50" name="comoLoHaceElChef_receta"> </textarea>
            <!-- <p class="imagenReceta">Título</p>
            <input type="text" placeholder="Título"> -->

            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>