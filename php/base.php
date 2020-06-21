<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//phpmailer
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth   = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Username = 'c3d9a99784e03d';
$mail->Password = 'b121781a1b39e3';
$mail->Port = 2525;

$mail->setFrom('me@mailtrap.io', 'John Doe');
//Send the message to yourself, or whoever should receive contact for submissions
$mail->addAddress('60a9d6fcf0-85b064@inbox.mailtrap.io', 'John Doe');