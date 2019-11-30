<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Log-in</title>
</head>

<body>
    <section class="log-in">
        <article>
            <figure><img src="img/manos_abejas1.jpg" alt=""></figure>
        </article>

        <article>
            <figure><img src="img/logo.png" alt="Logo chabtic"></figure>
            <h2>BIENVENIDO</h2>
            <div>
                <form id="f1" method="post" action="log-in_xt.php">
                    <i class="fas fa-user"></i>
                    <input type="text" class="user" name="usuario" size="40" placeholder="Usuario">
                    <br>
                    <i class="fas fa-lock"></i>
                    <input type="password" class="pw" name="pw" size="40" placeholder="Contraseña">
                    <br>
                    <button type="submit">Ingresar</button>
                    <br>
                </form>
            </div>
        </article>
    </section>
    <?php
    if (isset($_REQUEST["login"])) {
        if ($_REQUEST["login"] == "error") {
            echo "<div class='error'>La combinación user name y password no es correcta</div>";
        }
    }
    ?>
</body>

</html>