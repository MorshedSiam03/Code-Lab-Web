<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'projectwork42058@gmail.com';
$mail->Password = 'mpeolggxuqrdwxkx';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
return $mail;

?>