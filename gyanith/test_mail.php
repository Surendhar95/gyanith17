<?php

try{
		function send_mail(){
require_once('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@mail.gyanith.org';   // SMTP username
$mail->Password = 'ea215a2bb46488c538e3904e52ee8f1d';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->port=587;

$mail->From='gyanith@gmail.com';                             // Enable encryption, only 'tls' is accepted

$mail->FromName = 'gyanith17';
$mail->addAddress("vmkaabhirami@gmail.com");                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'gyanith 17 Registration';
$mail->Body    = "Hello";
$mail->AltBody  = "Hello";
$mail->SMTPDebug = 5;
if(!$mail->send()) {
   // echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Message has been sent';
}
}
}
catch(Exception $e){

}
send_mail();
?>