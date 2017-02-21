<?php
session_start();
require_once "recaptchalib.php";

	
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

$mail->From = 'knosysteam@knosys.in';
$mail->FromName = 'Knosys 16';
$mail->addAddress($email);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Knosys 16 Registration';
$mail->Body    = $body;
$mail->AltBody  =  $body1;

if(!$mail->send()) {
   // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   // echo 'Message has been sent';
}
}
		/*$secret = "6Le6HhkTAAAAAD-LuKRfxHHlbVTTAQL9zNBl45HB";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}*/
include("dbvars.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['submit'])){
			

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$stmt=$db->prepare("SELECT * FROM users WHERE Email=?");
		$stmt->bindParam(1,$email,PDO::PARAM_STR,50);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($result){   
		echo 'This email id is already registered';
		}
		else{
			
			$pass=$_POST['password'];
			$fullname=$_POST['full_name'];
			$username=$_POST['user_name'];
			$college = $_POST['college'];
			$phone = $_POST['phone'];

			$pass = md5($pass);
			$sex = $_POST['sex'];
			
				$stmt1=$db->prepare('SELECT Sno FROM users ORDER BY Sno DESC LIMIT 1');
				$stmt1->execute();
			$num = $stmt1->fetch();
			$no = $num['Sno'];

			$no = (int)$no;
			$no = $no + 1000;
			$kid = 'K'.$no;

			$stmt2 = $db->prepare('INSERT INTO users(Kid,Status,Email,Username,Fullname,Password,Sex,College,Phone,Moment) VALUES (:kid,:status,:email,:user,:full,:pass,:sex,:clg,:phone,CURRENT_TIMESTAMP)');
			
			$stmt2->execute(array(':kid'=>$kid,':status'=>'inactive',':email'=>$email,':user'=>$username,':full'=>$fullname,':pass'=>$pass,':sex'=>$sex,':clg'=>$college,':phone'=>$phone));
			
			$actual_link = "http://$_SERVER[HTTP_HOST]/"."activate.php?id=" . $kid;
			$body="<p> Hello ".$fullname."<br>
			Thank you for registering with <a href='http://www.knosys.in'>Knosys’16</a>.<br><br>
			 Click on the below link to activate your account.<br>
".$actual_link."<br><br>

Greetings from team KNOSYS. <br><br>
We extend the most warm welcome to all of you. Welcome to the 3rd technical fest conducted by the Department of CSE in NIT Puducherry. <br>
<br><br><u><b>EVENTS</b></u><br><br>
Antagon: Algorithmic coding event by codechef.<br>
Codemath: Online math based coding event.<br>
Ityuktha: Paper presentation.<br>
Hackathon: Ethical hacking competition.<br>
D’Bug C’Bug: Debugging in C language competition.<br>
Linux Expert: linux OS command line competition.<br>
Optimus: Code optimization competition in C and C++.<br>
Cobweb: Online treasure hunt competition.<br>
Shoot the Frame: Online photography competition.<br>
Dubsmash: Online dubsmash competition.<br><br>
<br><br><u><b>WORKSHOPS</b></u><br><br>
HackPro: Ethical hacking workshop<br>
Android Development: Android app development workshop. <br><br><br>

And that’s not it!! We have an amazing funroom for relaxation and gaming for the gamer in you.<br><br>
Please follow us on social media and also be in touch with us on the website, to keep updated on the latest developments in knosys’16. <br>
<a href=''>Facebook</a><a href=''> Twitter</a><a href=''> Google+</a><br><br>
Welcome to the explosion of passion, technology and fun.<br><br><br><br>
Regards,<br>
Administrator,<br> 
Knosys’16,<br>
<a href='https://www.knosys.in'>https://www.knosys.in</a><br><br>
This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Knosys homesite with this mail id. Please ignore the mail otherwise.</p><br>
<br><br>
";
$body1="<p> Hello ".$fullname."<br>
			Thank you for registering with <a href='http://www.knosys.in'>Knosys’16</a>.<br>
			 Click on the below link to activate your account.<br>
".$actual_link."<br>

Greetings from team KNOSYS. <br>
We extend the most warm welcome to all of you. Welcome to the 3rd technical fest conducted by the Department of CSE in NIT Puducherry. <br>
<u><b>EVENTS</b></u><br>
Antagon: Algorithmic coding event by codechef.<br>
Codemath: Online math based coding event.<br>
Ityuktha: Paper presentation.<br>
Hackathon: Ethical hacking competition.<br>
D’Bug C’Bug: Debugging in C language competition.<br>
Linux Expert: linux OS command line competition.<br>
Optimus: Code optimization competition in C and C++.<br>
Cobweb: Online treasure hunt competition.<br>
Shoot the Frame: Online photography competition.<br>
Dubsmash: Online dubsmash competition.<br>
<u><b>WORKSHOPS</b></u><br>
HackPro: Ethical hacking workshop<br>
Android Development: Android app development workshop. <br>

And that’s not it!! We have an amazing funroom for relaxation and gaming for the gamer in you.<br>
Please follow us on social media and also be in touch with us on the website, to keep updated on the latest developments in knosys’16. 
<a href=''>Facebook</a><a href=''> Twitter</a><a href=''> Google+</a><br>
Welcome to the explosion of passion, technology and fun.<br>
Regards,<br>
Administrator,<br> 
Knosys’16,<br>
<a href='https://www.knosys.in'>https://www.knosys.in</a><br>
This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Knosys homesite with this mail id. Please ignore the mail otherwise.</p><br>
<br><br>
";

			
			send_mail($email,$body,$body1);
			echo 'registered';


		}

	}
	
}
}
catch(PDOException $e){
	$e->getMessage();
}
?>