<!DOCTYPE html>
<html lang="en">
<head>   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/index.css" type="text/css">
        <link rel="stylesheet" href="../styles/form.css">
        <link rel="stylesheet" href="../styles/cabecera.css" type="text/css">
    <title>Crear Evento</title>
</head>
    <?php
    require_once '../../config/parameters.php';
    require_once('./cabecera.php');
    ?>
    
    <div class="form">
        <form action="" method="post" class="form">
            <select name="deporte" id="deporte">
                <option value="futbol">Fútbol</option>
                <option value="baloncesto">Baloncesto</option>
                <option value="tenis">Tenis</option>
                <option value="running">Running</option>
                <option value="padel">Padel</option>
            </select>
            <?php
            $fecha_actual = date('Y-m-d');
            $fecha_maxima = date("Y-m-d",strtotime($fecha_actual."+ 1 Year"));
            ?>
            <input type="number" name="n_personas" id="n_personas" min="2" max="50" placeholder="Nº de personas">
            <input type="date" name="fecha" id="fecha" min=<?php echo $fecha_actual?> max="<?php echo $fecha_maxima?>">
            <input type="text" name="titulo" id="titulo" placeholder="Título" maxlength="20">
            <input type="text" name="direccion" id="direccion" placeholder="Dirección">
            <textarea name="descripcion" id="descripcion" cols="30" rows="7" maxlength="300" placeholder="Máximo 300 caracteres">Descripción del evento</textarea>
            <button type="submit" class="submit" id="crearEvento">Crear evento</button>
            <div class="msg_error" class="alert alert-danger" role="alert" style="display: none">
                <ul class = "erroresForm">
                    <!-- Aqui se mostraran los errores -->
                </ul>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#crearEvento").click(function(){
                var valido = true;
                var errores = [];
                var cList = $('.erroresForm');
                cList.html("");
            })


                //Recoger datos
                var deporte = $.trim($("#deporte").val());
                var personas = $.trim($("#n_personas").val());
                var fecha = $.trim($("#fecha").val());
                var titulo = $.trim($("#titulo").val());
                var direccion = $.trim($("#direccion").val());
                var descripcion = $.trim($("#descripcion").val());


/*                 //Validar formulario
                if(deporte=="" || fecha=="" || titulo=="" || direccion==""){
                    errores.push("Debes rellenar todos los campos obligatorios *");

                    valido = false;
                }else{
                    let regexLetra = /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/; //Comprueba que tenga solo letras o espacios
                    let regexUs = /^[a-z0-9_-]{3,16}$/;//Coprueba que tenga tenga numeros o letras 
                    let regexCor = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //Compurbea que este bien escrito el correo

                    if(usuario.length > 20){
                        errores.push("El nombre de usuario debe contener como máximo 20 caracteres");
                        valido = false;
                    }else if(!regexUs.test(usuario)){
                        errores.push("El nombre de usuario solo puede contener numeros,letras, _ o -");
                        valido = false;
                    }

                    if(pass.length <script 8 || pass.length > 15){
                        errores.push("La contraseña debe contener como mínimo 8 caracteres y 15 como máximo");
                        valido = false;
                    }else if(!regexPas.test(pass)){
                        errores.push("La contraseña debe tener 1 minúscula, 1 mayúscula y un número");
                        valido = false;
                    }
                    
                    if(pass != repPass){
                        errores.push("Las contraseñas no coinciden");
                        valido = false;
                    }

                    if(nombre.length > 25){
                        errores.push("El nombre no puede contener más de 25 caracteres");
                        valido = false;
                    }else if(!regexLetra.test(nombre)){
                        errores.push("El nombre solo puede contener letras");
                        valido = false;
                    }

                    if(apell.length > 25){
                        errores.push("Lo apellidos no pueden contener más de 25 caracteres");
                        valido = false;
                    }else if(!regexLetra.test(apell)){
                        errores.push("Los apellidos solo pueden contener letras");
                        valido = false;
                    }

                    if(correo.length > 50){
                        errores.push("El correo no puede contener mas de 50 caracteres");
                        valido = false;
                    }else if(!regexCor.test(correo)){
                        errores.push("El correo no es válido");
                        valido = false;
                    }


                }

                if(!valido){
                    $(".msg_error").show("slow");
                    $(".msg_error").css("background-color","red");
                    $.each(errores, function(i){
                        var li = $('<li/>').
                                    addClass('li-error')
                                    .text(errores[i])
                                    .appendTo(cList);
                    })
                }else{ */
                    var parametros  = {
                        "deporte" : deporte,
                        "n_personas" : n_personas,
                        "fecha" : fecha,
                        "titulo" : titulo,
                        "direccion" : direccion,
                        "descripcion" : descripcion,
                    }
                    $.ajax({
                        data: parametros,
                        url: '../funciones/crearEvento.php',
                        type: 'post',
                        success: function(result){
                            console.log(result);
                            result = JSON.parse(result);
                            if(result.ok){
                                $(".msg_error").show("slow");
                                $(".msg_error").css("background-color","green");
                                var li = $('<li/>').
                                    addClass('li-error')
                                    .text("Usuario creado")
                                    .appendTo(cList);
                                window.location.href = result.redirect;
                            }
                            else if(result.error != ""){
                                console.log(result);
                                $(".msg_error").show("slow");
                                $(".msg_error").css("background-color","red");
                                var li = $('<li/>').
                                    addClass('li-error')
                                    .text(result.error)
                                    .appendTo(cList);
                            }
                        }
                    })
            })
        
        </script>
</body>
</html>