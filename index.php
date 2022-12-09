<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="assets/styles/cabecera.css" type="text/css"></link>
    <link rel="stylesheet" href="assets/styles/evento.css" type="text/css">

    <?php
        session_start();
    ?>

</head>
<body>
    <header id="cabecera">
        <h1 class="vista"></h1>
        <div class="cabecera">
            <li id="li-izquierda">
                <ul><div id="cabecera-img"></div></ul>
                <ul>Inicio</ul>
                <ul>Buscar</ul>
                <ul>Crear evento</ul>
                <ul>Chat</ul>
            </li>
            <li>
                <ul>Perfil</ul>
            </li>
        </div>
    </header>

    <!-----------------Cabecera-------------------->

    <h1>Eventos disponibles</h1>
    <div id="padreEventos">
        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>

        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>

        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>

        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>

        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>

        <div class="evento">
            <img src="assets/img/pelota.jpg">
            <div class="infoEvento">
                <p class="nomEv">Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p>17:00h</p>
            </div>
        </div>
    </div>

    <?php
        echo $_SESSION['id'];
    ?>

</body>
</html>