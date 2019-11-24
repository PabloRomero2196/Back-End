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

    <!-- Nuestra Casa -->
    <div id="modalLineadelTiempo" class="modal">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Línea del tiempo</h2>
        <form action="">
            <p>Año:</p>
            <input type="number" name="quantity" min="1" max="2020" placeholder="Año">

            <p>Acontecimiento:</p>
            <input type="text">

            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Nuestra casa -->
    <div id="modalequipo" class="modalequipo">
        <div onclick="cerrarmodalequipo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nuestro Equipo</h2>
        <p class="parrafoAdquerir"> Agregar Imágen del Nuevo Integrante</p>
        <div class="anadirimgsucursal">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">
            <div class="nombretrab">
                <p class="titulonombre">Nombre</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>

            <div class="cargo">
                <p class="titulocargo">Cargo</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>
            <div class="descripcargo">
                <p class="titulodescrip">Descripción</p>
                <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            </div>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Inicio, Nuestra Casa Propia seccion  -->
    <div id="modalSucursales" class="modalAdquerirProducto">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>DÓNDE ADQUIRIR NUESTRO PRODUCTO</h2>
        <p class="parrafoAdquerir"> AGREGAR NUEVO LUGAR </p>
        <div class="anadirimgsucursal">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">

            <p class="tituloAdquerir">Título</p>
            <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            <p class="tituloAdquerir">Enlace de ubicación</p>
            <textarea placeholder="Descripción" class="url" rows="4" cols="50"> </textarea>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

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

    <!-- Inicio -->
    <div id="modalCarrusel" class="modalCarrusel">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Carrusel de Imágenes</h2>
        <p class="parrafoAdquerir"> AGREGAR NUEVA IMÁGEN</p>
        <div class="anadirimgsucursal">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form action="">
            <p class="tituloCarrusel">Insertar Frases:</p>
            <textarea placeholder="Frase" rows="4" cols="50"> </textarea>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>

    <!-- Productos -->
    <div id="modalImagenProductos" class="modalimgproductos">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
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