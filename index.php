<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/54e3edb7eb.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php'; ?>


    <section class="recetas">
        <h2>Pagina de Inicio</h2>
        <!-- tabs -->
        <ul class="tabs">
            <li data-tab-target="#home" class="active tab">Home</li>
            <li data-tab-target="#pricing" class="tab">Pricing</li>
            <li data-tab-target="#about" class="tab">About</li>
        </ul>

        <!-- carrusel de imagenes -->
        <div class="tab-content">
            <div id="home" data-tab-content class="active">
                <h1>Home</h1>
                <p>This is the home</p>
            </div>
            <div id="pricing" data-tab-content>
                <h1>Pricing</h1>
                <p>Some information on pricing</p>
            </div>
            <div id="about" data-tab-content>
                <h1>About</h1>
                <p>Let me tell you about me</p>
            </div>
        </div>




    </section>
</body>

</html>