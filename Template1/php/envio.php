<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Envio Datos</title>
</head>
<body>
	<div class="titulo" id="titulo" style="width: 50%; margin: auto" align="center">
		<h1>Datos del Formulario de Cristian Tello</h1>
	</div>
	<?php	
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$url = $_POST['url'];
	$date = $_POST['date'];
	$datetime = $_POST['datetime'];
	$sueldo = $_POST['sueldo'];
	$phone = $_POST['phone'];
	$color = $_POST['color'];
	
	echo("<br>Nombre Completo: ".$nombre);
	echo("<br>Email: ".$email);
	echo("<br>Website: ".$url);
	echo("<br>Fecha de Nacimiento: ".$date);
	echo("<br>Fecha y Hora Local: ".$datetime);
	echo("<br>Sueldo: ".$sueldo);
	echo("<br>Telefono: ".$phone);
	echo("<br>Color Favorito: ".$color);
	?>
</body>
</html>