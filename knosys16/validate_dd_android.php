<?php
session_start();
    
    try{
        function send_mail($email,$body){
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@knosys.in';   // SMTP username
$mail->Password = '9f91bfcf04456bf6ccad07f91f0a5362';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'android@knosys.in';
$mail->FromName = 'Knosys 16';
$mail->addAddress($email);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Android team';
$mail->Body    = $body;

if(!$mail->send()) {
   // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   // echo 'Message has been sent';
}
}
        
include("dbvars.php");

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    if(isset($_POST['dd_submit'])){
        
            
             $stmt=$db->prepare('SELECT ref FROM android WHERE kid=:kid');
                            $stmt->execute(array(':kid'=>$_SESSION['kid']));
                            $dd = $stmt->fetchColumn(0);
                            if($dd == NULL){
                                echo "Register first to enter the referral code.";
                            }
                           else if($dd != NULL && $dd != 'No')
                            {
                            
                            echo 'You have already entered the referral code';
                        }
        else 
        {
           $stmt1=$db->prepare('UPDATE android SET ref=:ref WHERE kid=:kid');
           $stmt1->execute(array(':kid'=>$_SESSION['kid'],':ref'=>$_POST['ref_code']));
            $body='Success';
            $email = $_SESSION['email'];
            send_mail($email,$body);
            echo 'registered';
        }

 }
}  
catch(PDOException $e){
    $e->getMessage();
}
  ?>