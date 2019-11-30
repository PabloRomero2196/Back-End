<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Pagina de Productos</h2>
        <ul class="tabs">
            <li data-tab-target="#anadirProductos" class="tab">Añadir Productos</li>
        </ul>

        <div class="tab-content">

            <!-- Añadir Productos -->
            <div class="contenedor" id="anadirProductos" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalProducto()" class="manita"></figure>
                    <p>Agregar Producto</p>
                </div>
                <div class="element">
                    <figure><img src="img/slider1.jpg" alt="img3"></figure>
                    <div>
                        <p>Imagen 1</p>
                    </div>
                    <div class="contenedorIconosEditarBorrar">
                        <a onclick="editar()">
                            <figure class="editar"><img src="img/edit.svg" alt=""></figure>
                        </a>
                        <a onclick="borrar()">
                            <figure class="borrar"><img src="img/trash.svg" alt=""></figure>
                        </a>
                    </div>
                </div>
            </div>

    </section>

    <!-- MODALES -->

    <!-- Productos -->
    <div id="modalproducto" class="modalproducto">
        <div onclick="cerrarModalProducto()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Agrega un nuevo producto</h2>
        <p class="parrafoAdquerir"> Agregar imágen del nuevo producto</p>
        <div class="anadirimgproductos">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">
            <div class="descripcargo">
                <p class="titulodescrip">Descripción del producto</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>
</body>

</html>