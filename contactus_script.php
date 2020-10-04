<?php

 require 'phpmailer/PHPMailer.php';
 require 'phpmailer/SMTP.php';
 require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$subject = $_POST["subject"];
$message = $_POST["message"];
$mail->IsSMTP();
$mail->Host= "smtp.gmail.com";

$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "foodie.hub.07@gmail.com";
$mail->Password = "Foodie_hub7925";
$mail->Subject="$subject";
$mail->setFrom ($_POST['email']);
$mail->Body = "$message";	
//$mail->addAttachment('img/800px_COLOURBOX9362318.jpg');
$mail->addAddress('foodie.hub.07@gmail.com');
$mail->addReplyTo($_POST['email']);

$mail->IsHTML(true);

if(!$mail->Send()) {
       echo "error";
} else {
    echo "Thanks for contacting.We will get back to you soon";
}
$mail->smtpClose();
?>

