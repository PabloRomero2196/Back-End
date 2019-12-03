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
            <a href="nuestro_casa.php" class="activado">
                <li class="tab">Nuestro Equipo</li>
            </a>
            <a href="linea_del_tiempo.php">
                <li class="tab">Línea del Tiempo</li>
            </a>
            <a href="trabajadores_y_familias.php">
                <li class="tab">Trabajadores y Familias</li>
            </a>
        </ul>

        <div class="tab-content">

            <!-- Nuestro Equipo  -->
            <div class="contenedor" id="nuestroEquipo" data-tab-content class="active">

                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalequipo()" class="manita"></figure>
                    <p>Agregar Integrante</p>
                </div>

                <?php include "nuestro_equipo_subir.php" ?>

            </div>


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
            <button class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>