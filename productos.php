<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php'; ?>


    <section class="recetas">
        <h2>Productos</h2>

        <ul class="tabs">
            <li>Carrusel de Imagenes</li>
            <li>Imagenes de los Productos</li>
        </ul>

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



    <div id="" class="modal">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Linea del tiempo</h2>
        <form action="">
            <p>Año</p>
            <input type="text" placeholder="Año">

            <p>Acontecimiento</p>
            <input type="text" placeholder="Acontecimiento">

            <button><i class="far fa-save"></i></button>
        </form>
    </div>

</body>

</html>