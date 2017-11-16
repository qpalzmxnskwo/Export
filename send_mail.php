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


$mailaddress = array("mailtestowy74@gmail.com", "mailtestowy74@interia.pl");
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
$mail->Username = "mailtestowy74@gmail.com";
$mail->Password = "haslo123";
$mail->setFrom('mailtestowy74@gmail.com');

//maile
$i=0;
while ($i <= 1) {
	$mail->addAddress($mailaddress[$i]);
	$i++;
}

$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}















?>