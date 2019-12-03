<?php
session_start();
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
    <title>Home</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section class="paginaHome">

        <h2>BIENVENIDO</h2>

        <p class="bienvenido">Bienvenido al administrador de contenido de Chabtic, donde podrás editar, borrar, y actualizar la información de ciertas secciones del sitio web</p>

        <div>
            <p class="descarga">Descarga el manual de usabilidad aqui</p>
            <p class="btndescargar">
                <a class="letra">Descargar</a>
            </p>
        </div>

    </section>


    <!-- <script>
        function headerHome() {
            document.getElementById("headerHome").style.textDecoration = undeline;
        }
        headerHome()
    </script> -->

</body>
<?php
//cheamos si existe la sesión de administrador (admin)
if (isset($_SESSION["usuario"])) {
    echo "<div class='usuario'>Bienvenido(a) " . $_SESSION["usuario"];
    echo " - ";
    echo "<a href='log-in.php'>Logout</a></div>";
}
?>

</html>