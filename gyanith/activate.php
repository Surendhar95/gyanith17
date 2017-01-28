<!DOCTYPE html>
	

<html lang="en">

	<head>
		<title>Gyanith</title>
		<link href='images/logo.png' rel='icon'>
		<meta charset="utf-8"/>
		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<meta name='description' content='Knosys is an annual technical fest by Computer Science and Engineering Department,NIT Puducherry '/>
		<meta property="og:title" content="Knosys 16" />
		<meta property="og:description" content="Annual technical fest by Computer Science and Engineering Department,NIT Puducherry" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic&amp;subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<script>
	$(function(){
		//$('#mainpage').css({"background-image":"url('images/imageb.jpg') "});
		$('#mainpage').load('log.php');
			$("title").html("Gyanith - Login");
						return false;
		});
		</script>
	</head>

	
		<body style="background-color:#0f2851">
	<div id="mainpage">

	</div>

	</body>
	
</html>

<?php
 session_start();
 function send_mail($email,$body,$body1){
require_once('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;
$path="images/landlogo.png";
$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@mail.gyanith.org';   // SMTP username
$mail->Password = 'ea215a2bb46488c538e3904e52ee8f1d';                           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port =587;    
$mail->From='gyanith.nitpy@gmail.com';                             // Enable encryption, only 'tls' is accepted

$mail->FromName = 'Gyanith17';
$mail->addAddress($email);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'gyanith 17 Registration';
$mail->Body    = $body;
$mail->AltBody  =  $body1;
$mail->addAttachment($path);
//$mail->SMTPDebug = 2;
if(!$mail->send()) {
   // echo 'Message could not be sent.';
 //   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  // echo 'Message has been sent';
}
}
	try{
	include("dbcon.php");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
				$stmt=$db->prepare('UPDATE users SET active = 1 WHERE g_id = "'. $_GET["id"]. '"');
				$stmt->execute();
				//update timestamp
				$stmt=$db->prepare('UPDATE users SET activetime=now() WHERE g_id = "'. $_GET["id"]. '"');
				$stmt->execute();
				
				
				$stmt1=$db->prepare('SELECT name,g_id,email FROM users WHERE g_id= "'. $_GET["id"]. '"');
				$stmt1->execute();
				$result=$stmt1->fetch();
				$name = $result['name'];
				$g_id = $result['g_id'];
				$email =$result['email'];

				$_SESSION['active']='true';
				$body="<p>Your account has been activated.Your account details:<br><br>
				Username : ".$name."<br>
				Gid : ".$g_id."<br><br>
				Regards,<br>
	Administrator,<br> 
	Knosys’16,<br>
	<a href='https://www.knosys.in'>https://www.knosys.in</a><br>
	This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Knosys homesite with this mail id. Please ignore the mail otherwise.</p><br>
	<br><br></p>";
	$body1="<p>Your account has been activated.Your account details:<br><br>
				Username : ".$name."<br>
				Kid : ".$g_id."<br><br>
				Regards,<br>
	Administrator,<br> 
	Knosys’16,<br>
	<a href='https://www.knosys.in'>https://www.knosys.in</a><br>
	This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Knosys homesite with this mail id. Please ignore the mail otherwise.</p><br>
	<br><br></p>";
				send_mail($email,$body,$body1);
}  

	catch(PDOException $e){
		$e->getMessage();
	}
	
	if(isset($_SESSION['active'])){
	unset($_SESSION['active']);}
	?>
