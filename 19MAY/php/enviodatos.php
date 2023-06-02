<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Envio Datos</title>
</head>
<body>
	<?php
	$cedula = $_POST['ced'];
	$nombre = $_POST['name'];
	$apellido = $_POST['apell'];
	$nombreUsuario = $_POST['nombreUsuario'];
	echo("Los datos del alumno son: <br>");
	echo("<br>Cedula: ".$cedula);
	echo("<br>Nombres: ".$nombre);
	echo("<br>Apellidos: ".$apellido);
	echo("<br>Nombre de usuario: ".$nombreUsuario);
	?>
</body>
</html>