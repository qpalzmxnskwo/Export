<?php

<<<<<<< HEAD

session_start();
=======
session_start();

>>>>>>> 7c5c2dd4dda476af0308556f2c4783d64dd7a2f3
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD

$text= '<pre>'.$_POST['message'].'</pre></br>';
=======
>>>>>>> 7c5c2dd4dda476af0308556f2c4783d64dd7a2f3

$text=$_POST['subject'];

$name= $_FILES['filesToUpload']['tmp_name'];
$sname= $_FILES['filesToUpload']['name'];

$export_data=$_SESSION['array'];
$export_data = json_decode(json_encode($export_data), true);
    



send_mail($text, $tmp_name, $name, $export_data);



<<<<<<< HEAD
=======
function send_mail($text, $tmp_name, $name, $export_data){
>>>>>>> 7c5c2dd4dda476af0308556f2c4783d64dd7a2f3

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
<<<<<<< HEAD
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

=======
$mail->Username = "";
$mail->Password = "";
$mail->setFrom('');


 $i=0;
 while ($i <= 1) {
$mail->addAddress();
	 $i++;
 }
>>>>>>> 7c5c2dd4dda476af0308556f2c4783d64dd7a2f3

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



<<<<<<< HEAD








=======
>>>>>>> 7c5c2dd4dda476af0308556f2c4783d64dd7a2f3
?>