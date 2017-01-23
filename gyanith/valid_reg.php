<?php
session_start();
require_once "recaptchalib.php";

	
	try{
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
include("dbcon.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['submit'])){
			

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$stmt=$db->prepare("SELECT * FROM users WHERE email=?");
		$stmt->bindParam(1,$email,PDO::PARAM_STR,50);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($result){   
		echo 'This email id is already registered';
		}
		else{

			 $fname=$_POST['first_name'];
        $sname=$_POST['second_name'];
        $email=$_POST['email'];
        $passwd=$_POST['password'];
        $gender=$_POST['sex'];
        $college=$_POST['college'];
        $phone=$_POST['phone'];
      $name=$fname." ".$sname;
 		if($gender=='female')
            $gender='F';
        else if($gender=='male')
            $gender='M';
$passwd=md5(sha1($passwd));

$sql = "SELECT MAX(id) FROM users;";
$statement = $db->prepare($sql);
$statement->execute(); // no need to add `$sql` here, you can take that out
$id = $statement->fetchColumn();
//echo $id;
//echo $last_id;
$id=$id+1;  
//$last_id=2;
$g_id='GY17';
$g_id=$g_id . str_pad($id,4,'0',STR_PAD_LEFT);
 $stmt = $db->prepare("INSERT INTO users (g_id,name,email,passwd,gender,college,phone) VALUES (:g_id,:name,:email,:passwd,:gender,:college,:phone)");
            $stmt->bindParam(':g_id', $g_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passwd', $passwd);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':college', $college);
            $stmt->bindParam(':phone', $phone);
            // insert a row
            $stmt->execute();
           // echo 'Registered successfully!!'.'<br/>'.'Thank you for registering '.'<br/>'.'Your Gyanith id is '.$g_id;

/*BEGIN OF NEW VERSION*/
$actual_link = "http://$_SERVER[HTTP_HOST]/"."gyanith/activate.php?id=" . $g_id;
			$body="<p> Hello ".$name."<br>
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
$body1="<p> Hello ".$name."<br>
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


/*END OF NEW VERSION*/
send_mail($email,$body,$body1);

			echo 'Registered.Please Activate your account through mail!!';


			}

	}
	
}
}
catch(PDOException $e){
	$e->getMessage();
}
?>
			