<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="login-page">
	<div class="form">
		<form action="activation.php" method="GET" style="color: black">
			Wiadomość została wysłana
		</form>
	</div>
</div>
</body>
</html>

<?php
set_time_limit(0);

session_start();
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);
try {
   $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = "UTF-8";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "troleklolek123123@gmail.com";
$mail->Password = "troleklolek321";
$mail->setFrom('troleklolek123123@gmail.com');
$mail->FromName = base64_decode($_GET['email']);
$mail->addAddress('troleklolek123123@gmail.com');
$mail->Subject = 'TUTAJ WPISZ TYTUŁ';
$mail->Body = "Adres mailowy: ".base64_decode($_GET['email'])." wszedł w link."; //http://localhost/export/activation.php?email=
    $mail->send();
} catch (Exception $e) {
}