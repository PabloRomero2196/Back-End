<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Nuestra Equipo</h2>
        <ul class="tabs">
            <a href="nuestro_casa.php">
                <li class="tab">Nuestro Equipo</li>
            </a>
            <a href="linea_del_tiempo.php">
                <li class="tab">Línea del Tiempo</li>
            </a>
            <a href="trabajadores_y_familias.php" class="activado">
                <li class="tab">Trabajadores y Familias</li>
            </a>
        </ul>

        <div class="tab-content">

            <!-- Trabajadores y Familas  -->
            <div class="contenedor" id="trabajadoresYfamilias" data-tab-content class="active">

                <form action="">
                    <p>Trabajadores y Familias</p>
                    <br>
                    <p>Familias productoras</p>
                    <input type="number" value="29">

                    <p>Trabajadores</p>
                    <input type="number" value="3">
                    <button type="submit" target="_self" class="save">
                        <p><i class="far fa-save"></i></p>
                    </button>
                </form>
            </div>
    </section>
    <!-- MODALES -->


    <!-- Nuestra casa -->
    <div id="modalequipo" class="modalequipo">
        <div onclick="cerrarModalequipo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nuestro Equipo</h2>
        <p class="parrafoAdquerir"> Agregar Imágen del Nuevo Integrante</p>
        <div class="anadirimgsucursal">
            <figure class="mascara"><img class="mascara" src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
        </div>
        <form method="POST" action="agregar_equipo_xt.php">
            <div class="nombretrab">
                <p class="titulonombre">Nombre</p>
                <textarea placeholder="Descripción" rows="4" cols="50" id="nombre_trabajador" name="nombre_trabajador"> </textarea>
            </div>

            <div class="cargo">
                <p class="titulocargo">Cargo</p>
                <textarea placeholder="Descripción" rows="4" cols="50" id="puesto" name="puesto"> </textarea>
            </div>
            <div class="descripcargo">
                <p class="titulodescrip">Descripción</p>
                <textarea placeholder="Descripción" rows="4" cols="50" id="descripcion_trabajador" name="descripcion_trabajador"> </textarea>
            </div>
            <button type="submit" target="_self" class="save">
                <figure><img src="img/save.svg" alt=""></figure>
            </button>
        </form>
    </div>

</body>