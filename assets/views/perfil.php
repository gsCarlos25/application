<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css" type="text/css">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/cabecera.css" type="text/css">
    <link rel="stylesheet" href="../styles/perfil.css" type="text/css">
    <title>Perfil</title>
</head>
<body>
    <?php
    require_once '../../config/parameters.php';
    require_once './cabecera.php';
    ?>
    <div class="perfil">
        <div class="contenido">
            <h1>Perfil</h1>
            <h4>Datos</h4>
            <?php//require_once '../funciones/datos.php';?>
        </div>
        <div class="accion">
            <button class="cerrarSesion">Cerrar sesión</button>
            <button class="borrarCuenta">Eliminar cuenta</button>
        </div>
    </div>
 
</body>
</html>