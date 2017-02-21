<?php
session_start();
	
	try{
		function send_mail($email,$body,$body1){
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@knosys.in';   // SMTP username
$mail->Password = '9f91bfcf04456bf6ccad07f91f0a5362';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'dbugcbug@knosys.in';
$mail->FromName = 'Knosys 16';
$mail->addAddress($email);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'DBug Cbug Team';
$mail->Body    = $body;
$mail->AltBody = $body1;

if(!$mail->send()) {
   // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   // echo 'Message has been sent';
}
}
		
include("dbvars.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['reg'])){
			$event=$_SESSION['event'];

			$stmt=$db->prepare('SELECT username FROM dbug WHERE Kid=:kid');
			$stmt->execute(array(':kid'=>$_SESSION['kid']));
			$username = $stmt->fetchColumn(0);
			if($username != NULL)
			{
			
			echo 'You have already registered for this event';
		}
		else 
		{
			$stmt1=$db->prepare('INSERT INTO dbug VALUES(:kid,:username)');
			$stmt1->execute(array(':kid'=>$_SESSION['kid'],':username'=>$_SESSION['username']));
			$body='<p>Thank you for registering for D’BugC’Bug<br>
The event will be conducted on 20th March 2016 from 11pm – 1 pm at NIT Puducherry.<br>
We would love to have your presence at the venue on 19th and 20th of March.<br>
Kindly carry your college Id card with you.<br>
For any queries regarding the event please post a mail to dbugcbug@knosys.in<br>
For further details about event and accommodation visit www.knosys.in<br>
Hope you’ll enjoy participating<br>
Happy coding!!<br>
Regards<br>
Event coordinator.</p>
';
$body1='<p>Thank you for registering for D’BugC’Bug<br>
The event will be conducted on 20th March 2016 from 11pm – 1 pm at NIT Puducherry.<br>
We would love to have your presence at the venue on 19th and 20th of March.<br>
Kindly carry your college Id card with you.<br>
For any queries regarding the event please post a mail to dbugcbug@knosys.in<br>
For further details about event and accommodation visit www.knosys.in<br>
Hope you’ll enjoy participating<br>
Happy coding!!<br>
Regards<br>
Event coordinator.</p>
';
			$email = $_SESSION['email'];
			send_mail($email,$body,$body1);
			echo 'registered';
		}

 }
}  
catch(PDOException $e){
    $e->getMessage();
}
  ?>