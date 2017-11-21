<?php
set_time_limit(0);

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


$ii=0;
send_mails($email_list, $text, $tmp_name,$name);

function send_mails($email_list, $text, $tmp_name,$name){
if (!empty($email_list)) {
<<<<<<< HEAD
	for($i=0; $i<10; $i++){
=======
	for($i=0; $i<5; $i++){
>>>>>>> 2b8982186c2726a59c1e017ca1312b7bf1d5b457
	$email = array_shift($email_list);	
	echo$ii;
	$ii++;}
	send_mail($text,$tmp_name, $name, $email);
	sleep(10);
send_mails($email_list, $text, $tmp_name,$name);}
else {
echo 'wsio wysłane';}
}

function send_mail($text, $tmp_name, $name, $email){

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
$mail->Username = "mailtestowy75@interia.pl";
$mail->Password = "haslo12345";
$mail->setFrom('mailtestowy75@interia.pl');
$mail->AddCC($email);
} 


=======
$mail->Username = "troleklolek123123@gmail.com";
$mail->Password = "troleklolek321";
$mail->setFrom('troleklolek123123@gmail.com');
$mail->AddCC($email);
>>>>>>> 2b8982186c2726a59c1e017ca1312b7bf1d5b457
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = $text;

foreach (array_keys($tmp_name) as $key){
$mail->AddAttachment($tmp_name[$key],$name[$key]);
}

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
<<<<<<< HEAD
} else {	
    echo 'ok';
=======
} else {
    echo 'wysłano';
>>>>>>> 2b8982186c2726a59c1e017ca1312b7bf1d5b457
}



?>

