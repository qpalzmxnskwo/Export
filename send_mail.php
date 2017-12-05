
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



send_mails($email_list, $text, $tmp_name,$name);

function send_mails($email_list, $text, $tmp_name,$name){
if (!empty($email_list)) {
	for($i=0; $i<5; $i++){
		$email = array_shift($email_list);	
		if(!empty($email)){	
	send_mail($text,$tmp_name, $name, $email);
	}}
	sleep(10);//niepotrzebnie opóźnia przy pierwszym loopie
send_mails($email_list, $text, $tmp_name,$name);}
else {
 exit('Wiadomości zostały wysłane');}
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
$emailencoded = base64_encode($email);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = "UTF-8";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "biuro.informatics@gmail.com";//
$mail->Password = "Test991!";//
$mail->setFrom('biuro.informatics@gmail.com');//
$mail->AddCC($email);
$mail->Subject = 'RODO';//
$mail->Body = $text.PHP_EOL.PHP_EOL."W tym celu wystarczy odpowiedzieć na przesłane zapytanie lub skorzystać z linku zamieszczonego poniżej, w celu wyrażenia zgody.".' http://localhost/export/activation.php?email='.$emailencoded;//

foreach (array_keys($tmp_name) as $key){
$mail->AddAttachment($tmp_name[$key],$name[$key]);
}

if (!$mail->send()) {
   echo "Wystapił błąd przy wysyłaniu wiadomości do ".$email.PHP_EOL;
}
}

?>