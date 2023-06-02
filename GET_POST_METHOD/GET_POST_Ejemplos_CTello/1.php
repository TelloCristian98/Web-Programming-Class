<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP</title>
</head>

<body>
    <h1>Formulario por GET</h1>
    <p>INICIO <a href="html/empresa.html" target="contenedor">EMPRESA</a><a href="html/contactos.html" target="contenedor">CONTACTOS</a></p>
    <p><a href="#nosotros">NOSOTROS</a></p>
	<p><a href="#video">VIDEO</a></p>
    <form action="procesa2.php" method="GET">
      <label for="name">Introduzca su nombre: </label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="apellido">Introduzca su apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <br><br>
        <label for="password">Introduzca una contraseña: </label>
        <input type="password" name="password" id="password" minlength="8" required>
        <br> <br>
        <input type="submit" value="Enviar">		
</form>	
<iframe src="https://elcomercio.com" width="100%" height="400px" name="contenedor"></iframe>
<div class="nosotros" id="nosotros" align="center">
	<img src="img/services-left.jpg" width="844" height="714" alt=""/> </div>
<div class="video" id="video" style="height: 500px">
	<iframe width="100%" height="100%" src="https://www.youtube.com/embed/vbvyNnw8Qjg?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
<footer class="footer" id="footer">Content for  class "footer" id "footer" Goes Here</footer>
</body>

</html>