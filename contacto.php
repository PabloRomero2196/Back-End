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

        <h2>Contacto</h2>
        <ul class="tabs">
            <li data-tab-target="#direccion" class="tab">Dirección</li>
            <li data-tab-target="#telefono" class="tab">Teléfono</li>
        </ul>

        <div class="tab-content">

            <!-- Dirección  -->
            <div class="contenedor" id="direccion" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="cerrarModalDireccion()" class="manita"></figure>
                    <p>Agregar Dirección</p>
                </div>
                <!-- Elemento -->
                <div class="element">
                    <p>Dirección</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Prolongacion Paseo de la Reforma 880, Lomas de Santa Fe, Zedec Sta Fé, Álvaro Obregón, 01219 Ciudad de México, CDMX                        
                    </textarea>
                    </form>
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

            <!-- Teléfono  -->
            <div class="contenedor" id="telefono" data-tab-content class="active">
                <div class="anadir">
                    <figure><img src="img/anadir.svg" alt="añadir elemento" onclick="cerrarModalTelefono()" class="manita"></figure>
                    <p>Agregar Telefono</p>
                </div>

                <!-- Elemento  -->
                <div class="element">
                    <p>Telefono 1</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Calle Generica 123 int 456</textarea>
                    </form>
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
                    <p>Telefono 2</p>
                    <form action="POST">
                        <textarea name="" id="direccion" cols="50" rows="10">Calle Generica 123 int 456</textarea>
                    </form>
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
    <!-- Modal -->
    <div id="modalDireccion" class="modalDireccion">
        <div onclick="cerrarModalDireccion()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nueva Dirección</h2>
        <form action="">
            <p class="tituloubicacion">Nombre de la ubicación</p>
            <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            <p class="tituloenlace">Enlace de ubicación</p>
            <textarea placeholder="Link de ubicación" class="url" rows="4" cols="50"> </textarea>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>
    <!-- Telefono -->
    <div id="modalTelefono" class="modalTelefono">
        <div onclick="cerrarModalTelefono()" class="manita">
            <p class="cerrar"><i class="far fa-times-circle"></i></p>
        </div>
        <h2>Nueva Teléfono</h2>
        <form action="">
            <p class="titulonum">Número de Teléfono</p>
            <textarea placeholder="Descripción" rows="4" cols="50"> </textarea>
            <p class="save"><i class="far fa-save"></i></p>
        </form>
    </div>
</body>

</html>