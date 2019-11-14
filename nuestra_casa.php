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
        <h2>Linea del tiempo</h2>
        <div onclick="cerrarModalLineadelTiempo()" class="manita"><i class="far fa-times-circle"></i></div>
        <form action="">
            <p>Año</p>
            <input type="text" placeholder="Año">

            <p>Acontecimiento</p>
            <input type="text" placeholder="Año">

            <button><i class="far fa-save"></i></button>
        </form>
    </div>
</body>

</html>