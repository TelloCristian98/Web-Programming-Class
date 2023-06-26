<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Envio Datos</title>
	<link rel="stylesheet" type="text/css" href="../css/envio-style.css">
</head>

<body>
	<img src="../img/backgroung.jpeg" alt="">
	<div class="container">
		<h1>Datos del Formulario del Cliente</h1>
		<div class="table-data">
			<?php
			$nombre = $_POST['name'];
			$id = $_POST['id'];
			$ci = $_POST['ci'];
			$date = $_POST['date'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			?>
			<table>
				<tr>
					<th>Nombre Completo</th>
					<th>RUC/ID</th>
					<th>Fecha de Nacimiento</th>
					<th>Direccion</th>
					<th>Telefono</th>
				</tr>
				<tr>
					<td><?php echo ($nombre); ?></td>
					<td><?php echo ($id); ?></td>
					<td><?php echo ($date); ?></td>
					<td><?php echo ($address); ?></td>
					<td><?php echo ($phone); ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>