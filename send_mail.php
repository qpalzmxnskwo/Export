<?php


require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPMailer\Exception;

$text=$_POST['text'];

$start=0;

send_mail();



function send_mail(){
echo "<script type='text/javascript'>alert('test');</script>";

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mailtestowy74@gmail.com";
$mail->Password = "haslo12345";
$mail->SetFrom("mailtestowy74@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("mailtestowy74@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }















?>