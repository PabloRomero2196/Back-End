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

        <h2>Bienvenido</h2>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus adipisci officiis, aut vel possimus dolore praesentium. Quis velit sapiente harum, perspiciatis dolorum nobis hic explicabo repudiandae laborum ipsum quasi dolore!</p>

        <div>
            <p>Descarga el manual de usabilidad aqui</p>

            <button>Descargar</button>
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