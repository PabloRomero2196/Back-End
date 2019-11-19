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
            <li>Familias</li>
        </ul>

        <div class="contenedor">
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

        <div class="contenedor">
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

        <div class="contenedor">
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

        <div class="contenedor">
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

    </section>

    <div id="modalLineadelTiempo" class="modal">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Linea del tiempo</h2>
        <form action="">
            <p>Año</p>
            <input type="text" placeholder="Año">

            <p>Acontecimiento</p>
            <input type="text" placeholder="Acontecimiento">

            <button><i class="far fa-edit"></i></button>
        </form>
    </div>

</body>

</html>