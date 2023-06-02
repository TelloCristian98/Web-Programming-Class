<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Envio Datos</title>
</head>
<body>
	<div class="titulo" id="titulo" style="width: 50%; margin: auto" align="center">
		<h1>Datos del Formulario de la Empresa: Excursiones el Reto</h1>
	</div>
	<?php	
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$sangre = $_POST['sangre'];
	
	echo("<br>Nombre Completo: ".$nombre);
	echo("<br>Email: ".$email);
	echo("<br>Cedula: ".$id);
	echo("<br>Fecha de Nacimiento: ".$date);
	echo("<br>Telefono: ".$phone);
	echo("<br>Tipo de Sangre: ".$sangre);
	?>
</body>
</html>