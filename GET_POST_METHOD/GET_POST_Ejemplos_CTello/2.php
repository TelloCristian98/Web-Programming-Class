<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Post</title>
</head>

<body>
    <h1>Ejemplo de procesado de formularios</h1>
    <form action="procesa2.php" method="POST">
        <label for="name1">Introduzca su nombre: </label>
        <input type="text" name="name1" id="name1">
        <br> <br>
        <label for="apellido1">Introduzca su apellido: </label>
        <input type="text" name="apellido1" id="apellido1">
        <br> <br>
        <label for="password1">Introduzca una contraseña: </label>
        <input type="password" name="password1" id="password1" minlength="8" required>
        <br> <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>