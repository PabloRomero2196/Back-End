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


</body>

</html>