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

        <h2>Línea del Tiempo</h2>
        <ul class="tabs">
            <a href="nuestra_casa.php">
                <li class="tab">Nuestro Equipo</li>
            </a>
            <a href="linea_del_tiempo.php" class="activado">
                <li class="tab">Línea del Tiempo</li>
            </a>
            <a href="trabajadores_y_familias.php">
                <li class="tab">Trabajadores y Familias</li>
            </a>
        </ul>

        <div class="tab-content">

            <!-- Linea del Tiempo -->
        </div>
    </section>
    <!-- MODALES -->

    <!-- Nuestra Casa -->
    <div id="modalLineadelTiempo" class="modal">
        <div onclick="cerrarModalLineadelTiempo()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Línea del tiempo</h2>
        <form method="POST" action="">
            <p>Año:</p>
            <input type="number" name="ano_linea" id="ano_linea" min="1" max="2100" placeholder="Año">

            <p>Acontecimiento:</p>
            <input type="text" name="acontecimiento_linea" id="acontecimiento_linea">
            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>
    </div>

</body>

</html>