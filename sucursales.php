<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Sucursales</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Pagina de Sucursales</h2>
        <ul class="tabs">
            <li data-tab-target="#anadirProductos" class="tab">Añadir Productos</li>
        </ul>

        <div class="tab-content">

            <!-- Añadir Productos -->
            <div class="contenedor" id="anadirProductos" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
                    <p>Agregar Producto</p>
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

    </section>

    <!-- MODALES -->

    <!-- Productos -->
    <div id="modalImagenProductos" class="modalimgproductos">
        <div onclick="cerrarModal()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>IMÁGENES DE LOS PRODUCTOS</h2>
        <p class="parrafoAdquerir"> Agregar Imágen del Producto </p>
        <div class="anadirimgsucursal">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">
            <p class="titulodescrip">Descripción</p>
            <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>
</body>

</html>