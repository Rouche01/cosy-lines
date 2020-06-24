<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// use Dotenv\Dotenv;





require "../vendor/autoload.php";
//phpmailer
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "localhost";
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25;

$mail->setFrom('me@cosy-lines.test', 'John Doe');
//Send the message to yourself, or whoever should receive contact for submissions
$mail->addAddress('joseph@lazpet.com');




    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'c3d9a99784e03d';                     // SMTP username
    $mail->Password   = 'b121781a1b39e3';                               // SMTP password
    $mail->SMTPSecure = 'tls';  //PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    