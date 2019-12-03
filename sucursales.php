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

        <h2>Agrega Nueva Sucursal</h2>
        <ul class="tabs">
            <a href="sucursales.php" class="activado">
                <li class="tab">Sucursales</li>
            </a>
        </ul>

        <div class="tab-content">
            <!-- Sucursales  -->
            <div class="contenedor" id="sucursales" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalSucursales()" class="manita"></figure>
                    <p>Agregar Sucursales</p>
                </div>
                <!-- Elemento -->
                <div class="element">
                    <figure><img src="img/sucursal_Amazon.png" alt="amazon"></figure>
                    <div>
                        <p>Amazon</p>
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
        </div>

        </div>

    </section>
    <!-- MODALES -->

    <div id="modalSucursales" class="modalSucursales">
        <div onclick="cerrarModalSucursales()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>AGREGA NUEVA SUCURSAL</h2>
        <form action="agregar_sucursales_xt.php" method="POST">
            <p class="tituloAdquerir">Nombre del lugar:</p>
            <textarea placeholder="Descripción" rows="4" cols="50" name="nombre_lugar"> </textarea>
            <p class="tituloAdquerir">Enlace de ubicación:</p>
            <textarea placeholder="Descripción" class="url" rows="4" cols="50" name="hipervinculo"> </textarea>
            <button class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>


</body>

</html>