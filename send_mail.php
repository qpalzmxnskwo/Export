<?php



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
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "ola.stolorz@gmail.com";
$mail->Password = "makapaka";
$mail->setFrom('ola.stolorz@gmail.com', 'First Last');
$mail->addAddress('ola.stolorz@gmail.com', 'John Doe');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}















?>