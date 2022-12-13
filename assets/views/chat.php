<?php
    include_once "../conexion.php";

    session_start();

    if(isset($_GET['id_evento'])){
        $id_evento = $_GET['evento'];
    }else{
        echo "<alert>Se ha producido un error</alert>";
        header('Location: ../../index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT</title>
    <link rel="stylesheet" href="../styles/chat.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/cabecera.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/evento.css" type="text/css">
    <link rel="stylesheet" href="assets/styles/index.css" type="text/css">
</head>
<body>
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat">
                <div id="datos-chat">
                    <?php
                        $consulta = "SELECT * FROM mensajes WHERE id_evento=$id_evento  ORDER BY id ";
                        $resMen = $conn->query($consulta);
                        while($row = $resMen->fetch_array()):
                    ?>
                    <span style="color : #1c62c4;"><?=$row['id_usuario']?></span>
                    <span style="color : #848484;"><?=$row['mensaje']?></span>
                    <span style="float : right;"><?=formatearFechaChat($row['fecha'])?></span>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
        <form method="POST" action="chat.php">
            <input type="text" name="nombre" id="" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" id="" placeholder="ingresa tu nombre"></textarea>
            <input type="submit" name="enviar" value="ENVIAR">
        </form>

        <?php
            if(isset($_POST['enviar'])){
                $id_usuario = $_SESSION['id'];
                $mensaje = $_POST['mensaje'];

                $sql = "INSERT INTO chat(id_evento, id_usuario, mensaje) VALUES ('$id_evento','$id_usuario','$mensaje')";
                $ejecutar = $conexion->query($sql);

            }
        ?>
    </div>
</body>
</html>