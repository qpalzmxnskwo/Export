<?php

session_start();

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$text=$_POST['subject'];

$tmp_name= $_FILES['filesToUpload']['tmp_name'];
$name= $_FILES['filesToUpload']['name'];

$export_data=$_SESSION['array'];
$export_data = json_decode(json_encode($export_data), true);


foreach($export_data as $key=>$val){
$email_list[]=$val['Email'];
}


send_mail($text, $tmp_name, $name, $email_list);



function send_mail($text, $tmp_name, $name, $email_list){

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


for($i=0; $i<10; $i++){
	if(isset($email_list[$i])){
		$mail->addAddress($email_list[$i]);
		unset($email_list[$i]);
		$email_list=array_values($email_list);
}}


$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;
foreach (array_keys($tmp_name) as $key){
$mail->AddAttachment($tmp_name[$key],$name[$key]);
}

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    
	if(!empty($email_list)){
	send_mail($text, $tmp_name, $name, $email_list);
	}
	
}
}



?>