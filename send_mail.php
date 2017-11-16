<?php


session_start();
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$text= '<pre>'.$_POST['message'].'</pre></br>';

$start=0;

send_mail($text);



function send_mail($text){



$mail = new PHPMailer();
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'poczta.interia.pl';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "mailtestowy74@interia.pl";
$mail->Password = "haslo12345";
$mail->setFrom('mailtestowy74@interia.pl');

//maile

$export_data=$_SESSION['array'];
$export_data = json_decode(json_encode($export_data), true);
$i=0;
do {
   $mail->addAddress($export_data[$i]["Email"]);
   $i++;
} while ($export_data[$i]["Email"]);


$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}











?>