<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Envio Datos</title>
</head>
<body>
	<div class="titulo" id="titulo" style="width: 50%; margin: auto" align="center">
		<h1>Datos del Formulario de SERVICIOS DE FUMIGACIÓN GRAVITAO</h1>
	</div>
	<?php	
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$color = $_POST['color'];
	$servicio = $_POST['servicio'];
	
	echo("<br>Nombre Completo: ".$nombre);
	echo("<br>Email: ".$email);
	echo("<br>Direccion: ".$direccion);
	echo("<br>Fecha de Nacimiento: ".$date);
	echo("<br>Telefono: ".$phone);
	echo("<br>Color Favorito: ".$color);
	echo("<br>Servicio Requerido: ".$servicio);
	?>
</body>
</html>