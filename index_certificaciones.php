<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <link href="styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
    <title>Nuestra Casa</title>
</head>

<body>

    <?php include 'header.php'; ?>


    <section>

        <h2>Pagina de Inicio</h2>
        <ul class="tabs">
            <a href="index_carrusel.php">
                <li class="tab">Carrusel de Imagenes</li>
            </a>
            <a href="index_certificaciones.php" class="activado">
                <li class="tab">Certificaciones</li>
            </a>
        </ul>

        <div class="tab-content">

            <!-- Certificaciones  -->
            <div class="contenedor" id="certificaciones" data-tab-content class="active" class="tabActivado">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="abrirModalCertificaciones()" class="manita"></figure>
                    <p>Agregar Certificación</p>
                </div>

                <!-- Elemento  -->
                <div class="element">
                    <figure><img src="img/logo_usda.svg" alt="img1"></figure>
                    <div>
                        <p>Certificación organica Usda</p>
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

                <!-- Elemento  -->
                <div class="element">
                    <figure><img src="img/logo_certimex.svg" alt="img1"></figure>
                    <div>
                        <p>Certificación certimex</p>
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

    </section>


    <!-- MODALES -->

    <!-- Certificaciones -->
    <div id="modalCertificaciones" class="modalCertificaciones">
        <div onclick="cerrarModalCertificaciones()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Certificaciones</h2>
        <p class="parrafoAdquerir"> AGREGA IMÁGEN DE LA NUEVA CERTIFICACIÓN</p>
        <div class="anadircert">
            <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="agregarImagen()" class="manita"></figure>
        </div>
        <form action="agregar_certificacion_xt.php" method="POST">
            <p class="titulocert">Insertar Nombre de Certificación</p>
            <textarea placeholder="Nombre de certifación" rows="4" cols="50" name="nombre_certificacion" class="nombre_certificacion"> </textarea>
            <p class="linkcert">Insertar Link de Certificación</p>
            <textarea placeholder="URL" rows="4" cols="50" name="link_certificacion" class="link_certificacion"> </textarea>
            <button type="submit" target="_self" class="save">
                <p><i class="far fa-save"></i></p>
            </button>
        </form>
    </div>

</body>

</html>

<!-- AÑADIR -->