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

        <h2>Nuestra Casa</h2>
        <ul class="tabs">
            <li data-tab-target="#sucursales" class="tab">Sucursales</li>
        </ul>

        <div class="tab-content">
            <!-- Sucursales  -->
            <div class="contenedor" id="sucursales" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalLineadelTiempo()" class="manita"></figure>
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


</body>

</html>