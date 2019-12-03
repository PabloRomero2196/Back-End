<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Colaboradores</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section>

        <h2>Colaboradores</h2>
        <ul class="tabs">
            <a href="colaboradores.php" class="activado">
                <li class="tab">Colaboradores</li>
            </a>
        </ul>

        <div class="tab-content">
            <!-- Colaboradores  -->
            <div class="contenedor" id="colaboradores" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalColaboradores()" class="manita"></figure>
                    <p>Agregar Colaboradores</p>
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

    <div id="modalColaboradores" class="modalCertificaciones">
        <div onclick="cerrarModalColaboradores()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Colaboradores</h2>
        <p class="parrafoAdquerir">AGREGA IMÁGEN DEL COLABORADOR</p>
        <div class="anadircert">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalColaboradores()" class="manita"></figure>
        </div>
        <form action="agregar_colaboradores_xt.php" method="POST">
            <p class="titulocert">Insertar Nombre de colaborador</p>
            <textarea placeholder="Nombre de certifación" rows="4" cols="50" name="nombre_certificacion" class="nombre_certificacion"> </textarea>
            <p class="linkcert">Insertar Link de colaborador</p>
            <textarea placeholder="URL" rows="4" cols="50" name="link_certificacion" class="link_certificacion"> </textarea>
            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>