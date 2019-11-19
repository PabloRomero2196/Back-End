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


    <section class="recetas">
        <h2>Nuestra Casa</h2>

        <ul class="tabs">
            <li>Linea del Tiempo</li>
            <li>Adquirir Productos</li>
            <li>Nuesto Equipo</li>
            <li>Colaboradores</li>
            <li>Familias</li>
        </ul>

        <div class="contenedor">

            <div class="anadir">
                <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                <p>Agregar Acontecimiento</p>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img2.jpg" alt="img2" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img3.jpg" alt="img3" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

        </div>

        <div class="contenedor">
            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img2.jpg" alt="img2" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img3.jpg" alt="img3" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
                </div>
            </div>

            <div class="element">
                <figure><img src="img/img1.jpg" alt="img1" class="mascara"></figure>
                <div class="contenedorTexto">
                    <p>Comida</p>
                    <a onclick="editar()">editar</a>
                    <a onclick="borrar()">borrar</a>
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
            <input type="number" name="quantity" min="1" max="2020"placeholder="Año">

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

            <button><i class="far fa-save"></i></button>
        </form>
    </div>
</body>

</html>