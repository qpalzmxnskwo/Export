<?php


require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//$text=$_POST['text'];

//$start=0;

//send_mail();


//function send_mail(){

$mail = new PHPMailer(true);
	$mail->SMTPDebug = 2;
	$mail->CharSet = 'UTF-8';                                
    $mail->isSMTP();
	$mail->SMTPAutoTLS = false;	 
    $mail->Host = 'smtp.poczta.onet.pl';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'ola.stolorz@vp.pl';                 
    $mail->Password = 'Masakra28218';                                             
    $mail->Port = 587;  
	$mail->SetFrom('ola.stolorz@vp.pl', 'olka');
	$mail->Subject = 'hehe';
	$mail->Body = $text;
	//$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']); //attachments
	
	
	//for ($i=$start; $i<$i+11, $i++){
	$mail->AddAddress('ola.stolorz@vp.pl');
//}


 if ($mail->Send()){
	// ini_set('max_execution_time', 10); // delay 10s
	 //$start+=10;
	 //send_mail();
	 echo 'ok';
     
}














?>