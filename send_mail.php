<?php


session_start();
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


<<<<<<< HEAD
$text= $_POST['message'];
$export_data=$_SESSION['array'];
$export_data = json_decode(json_encode($export_data), true);
$num=1;

send_mail($text, $export_data, $num);



function send_mail($text, $export_data, $num){
=======
$text=$_POST['subject'];

$tmp_name= $_FILES['filesToUpload']['tmp_name'];
$name= $_FILES['filesToUpload']['name'];

send_mail($text, $tmp_name, $name);
>>>>>>> 4695a2ae00372ff648c49346ec1a281a19b6ad95



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
$mail->Host = 'poczta.interia.pl';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
<<<<<<< HEAD
$mail->Username = "mailtestowy74@interia.pl";
$mail->Password = "haslo12";
$mail->setFrom('mailtestowy74@interia.pl');

//maile

set_time_limit(0); 

if ($num == 1) {
foreach($export_data as $key=>$val){

$email_list[]=$val['Email'];
}
 $shifted = array_shift($email_list);
}
=======
$mail->Username = "";
$mail->Password = "";
$mail->setFrom('');


 $i=0;
 while ($i <= 1) {
$mail->addAddress();
	 $i++;
 }
>>>>>>> 4695a2ae00372ff648c49346ec1a281a19b6ad95

	$mail->addAddress($shifted);
   
	

$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;
foreach (array_keys($tmp_name) as $key){
$mail->AddAttachment($tmp_name[$key],$name[$key]);
}

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    if (!empty($email_list)) {
    	var_dump($email_list);
    	sleep(10);
    	send_mail($text, $shifted, 2);
    }
}
}



<<<<<<< HEAD








?>






=======
?>
>>>>>>> 4695a2ae00372ff648c49346ec1a281a19b6ad95
