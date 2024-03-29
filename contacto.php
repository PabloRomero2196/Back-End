<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Contacto</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Teléfono</h2>
        <ul class="tabs">
            <a href="contacto.php" class="activado">
                <li class="tab">Télefono</li>
            </a>
            <a href="direccion.php">
                <li class="tab">Dirección</li>
            </a>
        </ul>

        <div class="tab-content">

            <!--*********************** Direccion ***********************-->
            <div class="contenedor" id="direccion" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalTelefono()" class="manita"></figure>
                    <p>Agregar Télefono</p>
                </div>
                <!-- Elemento -->
                <div class="element">
                    <p>Dirección</p>
                    <div action="POST">
                        <p name="" id="direccion" cols="50" rows="10">555-555-555
                        </p>
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
    <!-- Telefono -->
    <div id="modalTelefono" class="modalTelefono">
        <div onclick="cerrarModalTelefono()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Agrega Teléfono</h2>
        <form action="agregar_telefono_xt.php" method="POST">
            <p class="titulonum">Número de Teléfono</p>
            <textarea placeholder="Descripción" rows="4" cols="50" name="telefono"> </textarea>
            <button class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>
</body>

</html>