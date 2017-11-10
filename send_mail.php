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

$mail = new PHPMailer(true);
	$mail->SMTPDebug = 2;
	$mail->CharSet = 'UTF-8';                                
    $mail->isSMTP();
	$mail->SMTPAutoTLS = false;	 
    $mail->Host = '';  
    $mail->SMTPAuth = true;                               
    $mail->Username = '';                 
    $mail->Password = '';                                             
    $mail->Port = 587;  
	$mail->SetFrom('', '');
	$mail->Subject = '';
	$mail->Body = $text;
	
	
	for ($i=$start; $i<$i+11, $i++){
	$mail->AddAddress('');
}


 if ($mail->Send(){
	 ini_set('max_execution_time', 10); // delay 10s
	 $start+=10;
	 send_mail();
     
}}














?>