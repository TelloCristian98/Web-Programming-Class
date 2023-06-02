<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP</title>
</head>

<body>
    <h1>Ejemplo de procesado de formularios</h1>
    <?php
    $nombre = $_GET['name'];
    $apellido = $_GET['apellido'];
    $password = $_GET['password'];
    $nombre1 = $_POST['name1'];
    $apellido1 = $_POST['apellido1'];
    $password1 = $_POST['password1'];
    echo ("<br>El nombre y apellido que ha introducido por GET es: ");
    echo ("<br>El nombre introducido es: " . $nombre);
    echo ("<br>El apellido introducido es: " . $apellido);
    echo ("<br>La contraseña introducida es: " . $password);
    echo ("<hr>");
    echo ("<br>El nombre y apellido que ha introducido por POST es: ");
    echo ("<br>El nombre introducido es: " . $nombre1);
    echo ("<br>El apellido introducido es: " . $apellido1);
    echo ("<br>La contraseña introducida es: " . $password1);
    ?>
</body>

</html>