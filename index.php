<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
    <link rel="stylesheet" href="assets/styles/cabecera.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/evento.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/index.css" type="text/css">

    <?php
        session_start();
    ?>

</head>
<body>
    <?php
    include_once('./assets/views/cabecera.php');
    ?>

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
        if(!$_SESSION['id']){
            header("Location: assets/views/login.php");
        }
    ?>

</body>
</html>