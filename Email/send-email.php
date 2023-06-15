<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

