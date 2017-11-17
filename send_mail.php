<?php



require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$text=$_POST['subject'];

$tmp_name= $_FILES['filesToUpload']['tmp_name'];
$name= $_FILES['filesToUpload']['name'];

send_mail($text, $tmp_name, $name);



function send_mail($text, $tmp_name, $name){

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
$mail->Username = "";
$mail->Password = "";
$mail->setFrom('');


 $i=0;
 while ($i <= 1) {
$mail->addAddress();
	 $i++;
 }

$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;
foreach (array_keys($tmp_name) as $key){
$mail->AddAttachment($tmp_name[$key],$name[$key]);
}

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}



?>