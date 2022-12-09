<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css" type="text/css"></link>
    <link rel="stylesheet" href="../styles/form.css">
    <title>Crear Evento</title>
</head>
<body>
    <div class="form">
        <form action="" method="post" class="form">
            <select name="deporte" id="deporte">
                <option value="futbol">Fútbol</option>
                <option value="baloncesto">Baloncesto</option>
                <option value="tenis">Tenis</option>
                <option value="running">Running</option>
                <option value="padel">Padel</option>
            </select>
            <input type="number" name="n_personas" id="n_personas" max="" placeholder="Nº de personas">
            <input type="date" name="fecha">
            <input type="text" name="titulo" id="titulo" placeholder="Título">
            <input type="text" name="direccion" id="direccion" placeholder="Dirección">
            <textarea name="descripcion" id="" cols="30" rows="7" maxlength="300" placeholder="Máximo 300 caracteres">Descripción del evento</textarea>
            <input type="submit" value="Crear" id="submit">
        </form>
    </div>
</body>
</html>