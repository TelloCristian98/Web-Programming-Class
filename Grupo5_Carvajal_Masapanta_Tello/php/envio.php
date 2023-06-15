<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shorcut icon" href="../img/taza-caliente.png" />
	<title>Envio Formulario</title>
</head>

<body style="margin: 0; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">
	<div class="cabecera" id="cabecera" style="background-image: linear-gradient(to right, #1f1c45 67%, #db341e 33%); margin: auto; height: 80px; width: 100%">
		<div class="logo" id="logo" style="float: left; padding-left: 30px; padding-top: 10px"><img src="../img/logo.png" width="100px" height="80px" alt="" /></div>
		<nav class="navbar" id="navbar" style="float: right; padding-top: 10px; padding-right: 220px; font-size: 30px">
			<ul style="margin: 0; list-style-type: none;padding: 0;overflow: hidden;">
				<li style="float: left;"><a href="../index.html" style="display: block; color: white;text-align: center;padding: 14px 16px;text-decoration: none;">INICIO</a></li>
				<li style="float: left;"><a href="nosotros.html" style="display: block; color: white;text-align: center;padding: 14px 16px;text-decoration: none;">NOSOTROS</a></li>
				<li style="float: left;"><a href="servicios.html" style="display: block; color: white;text-align: center;padding: 14px 16px;text-decoration: none;">SERVICIOS</a></li>
				<li style="float: left;"><a href="contactos.html" style="display: block; color: white;text-align: center;padding: 14px 16px;text-decoration: none;">CONTACTO</a></li>
			</ul>
		</nav>
	</div>
	<div class="banner" id="banner" style="background-image: linear-gradient(to right, #1f1c45 67%, #db341e 33%);height: 500px;width: 100%; ">
		<h1 style="margin: 0; font-size: 50px; color: white;padding-top: 100px" align="center">Gracias por llenar nuestro formulario.</h1>
	</div>
	<footer class="footer" id="footer" style="background-color: #1f1c45;height: 220px;width: 100%">
		<div class="footer-nav" id="footer-nav" style="width: 100%; position: relative; color: white" align="center">
			<div class="footer-nav-i" id="footer-nav-i" style="display:inline-block; width:33%; height: 100%;">
				<h3>MENÚ</h3>
				<ul style="list-style-type: none;margin: 0;padding: 0px;">
					<li style="padding: 7px"><a href="../index.html" style="text-decoration: none;color: white;">Inicio</a></li>
					<li style="padding: 7px"><a href="nosotros.html" style="text-decoration: none;color: white">Nosotros</a></li>
					<li style="padding: 7px"><a href="servicios.html" style="text-decoration: none;color: white">Servicios</a></li>
					<li style="padding: 7px"><a href="contactos.html" style="text-decoration: none;color: white">Contacto</a></li>
				</ul>
			</div>
			<div class="footer-services" id="footer-services" style="display:inline-block; width:33%; height: 100%;">
				<h3>SERVICIOS DE CAFÉ</h3>
				<ul style="list-style-type: none;margin: 0;padding: 0px;">
					<li style="padding: 7px">Café Negro</li>
					<li style="padding: 7px">Café Rojo</li>
					<li style="padding: 7px">Café Serviec</li>
					<li style="padding: 7px">Té Verde</li>
				</ul>
			</div>
			<div class="footer-social" id="footer-social" style="display:inline-block; width:33%; height: 100%;">
				<h3>NUESTRAS REDES SOCIALES</h3>
				<ul style="list-style-type: none;margin: 0;padding: 0;">
					<li style="padding: 7px; align-content: center;">
						<ul style="margin: 0; list-style-type: none;padding: 0;overflow: hidden;display: flex; flex-direction: row;flex-wrap: wrap;">
							<li style="width: 20%"><a href="https://es-la.facebook.com/" target="_blank" style="display: block; color: white;text-align: center;text-decoration: none;"><img src="../img/fb-icon.png" width="31" height="32" alt="" /></a></li>
							<li style="width: 20%"><a href="https://www.instagram.com/" target="_blank" style="display: block; color: white;text-align: center;text-decoration: none;"><img src="../img/instagram-icon.png" width="31" height="32" alt="" /></a></li>
							<li style="width: 20%"><a href="https://walink.co/0edb82" target="_blank" style="display: block; color: white;text-align: center;text-decoration: none;"><img src="../img/whatsapp.png" width="32" height="32" alt="" /></a></li>
							<li style="width: 20%"><a href="https://twitter.com/login" target="_blank" style="display: block; color: white;text-align: center;text-decoration: none;"><img src="../img/twitter-32.png" width="32" height="32" alt="" /></a></li>
							<li style="width: 20%"><a href="https://www.linkedin.com/" target="_blank" style="display: block; color: white;text-align: center;text-decoration: none;"><img src="../img/linkedin-32.png" width="32" height="32" alt="" /></a></li>
						</ul>
					</li>
					<li style="padding: 7px">Av. América y 12 de Octubre</li>
					<li style="padding: 7px">+593 0978867645</li>
					<li style="padding: 7px">demo@gmail.com</li>
				</ul>
			</div>
		</div>
	</footer>
</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$direction = $_POST['direccion'];
	$phone = $_POST['phone'];
	$body = $_POST['msg'];
	$subject = 'Mensaje de ' . $name;
	$email2 = "pprruueebbaasseemmaaiil@outlook.com";

	require_once "PHPMailer/PHPMailer.php";
	require_once "PHPMailer/SMTP.php";
	require_once "PHPMailer/Exception.php";

	$mail = new PHPMailer();

	//SMTP Settings
	$mail->isSMTP();
	$mail->Host = "smtp-mail.outlook.com";
	$mail->SMTPAuth = true;
	$mail->Username = "pprruueebbaasseemmaaiil@outlook.com";
	$mail->Password = 'pruebasEmail..';
	$mail->Port = 587; //587
	$mail->SMTPSecure = "tls"; //tls

	//Email Settings
	$mail->isHTML(true);
	$mail->setFrom($email2, $name);
	$mail->addAddress("cristian.andres.t98@gmail.com");
	$mail->Subject = $subject;
	$mail->Body = "Nombre: " . $name . "<br>" . "Correo: " . $email . "<br>" . "Direccion: " . $direction . "<br>" . "Telefono: " . $phone . "<br>" . "Mensaje: " . $body;

	if ($mail->send()) {
		$status = "success";
		$response = "Email is sent!";
	} else {
		$status = "failed";
		$response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
	}

	echo ($status . $response);
}
