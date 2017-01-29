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
//$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->Host = 'md-in-63.webhostbox.net'; 
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'team@gyanith.org';   // SMTP username
$mail->Password = '**whatever**';                           // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port =465;    
$mail->From='team@gyanith.org';                             // Enable encryption, only 'tls' is accepted

$mail->FromName = 'Gyanith Team';
$mail->addAddress($email);                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Gyanith Team';
$mail->Body    = $body;
$mail->AltBody  =  $body1;
$mail->addAttachment($path);
//$mail->SMTPDebug = 2;
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
/*hospitality checkbox*/
if(isset($_POST['hospitality']) && $_POST['hospitality'] == 'hospitality') 
{
    $sql="insert into hospitality (g_id) values (:gid)";
    $stmt1 = $db->prepare($sql);
    $stmt1->execute(array(':gid'=>$g_id));
}






/*BEGIN OF NEW VERSION*/
$actual_link = "http://$_SERVER[HTTP_HOST]/"."gyanith/activate.php?id=" . $g_id;
			$body="<p>Greetings from team GYANITH!!<br>
			Congrats.. You have successfully registered for GYANITH’17.<br><br>
			 Click on the below link to activate your account.<br>
".$actual_link."<br><br>

We welcome you to NIT Puducherry to experience three days of innovation and science. Gear up to experience engineering like never before.
GYANITH ‘17 is the first collaborated technical fest hosted by NIT Puducherry. It is a union of 4 departments, coming together to celebrate science and innovation. GYANITH literally translates to “inspiring”. Hence, we are here to inspire you and give you an unforgettable experience of learning, fun and creation. We invite you to join us, from 24th  to 26th of February, in the inaugural edition of GYANITH and get inspired.
We have attached the schedule of events for your reference. Do visit our website www.gyanith.org for more information and registration of events. In case of any queries please contact                          
We hope to serve you in the best way and provide you with a great learning experience.

Regards,
Team GYANITH.";

$body1="<p>Greetings from team GYANITH!!<br>
			Congrats.. You have successfully registered for GYANITH’17.<br><br>
			 Click on the below link to activate your account.<br>
".$actual_link."<br><br>

We welcome you to NIT Puducherry to experience three days of innovation and science. Gear up to experience engineering like never before.
GYANITH ‘17 is the first collaborated technical fest hosted by NIT Puducherry. It is a union of 4 departments, coming together to celebrate science and innovation. GYANITH literally translates to “inspiring”. Hence, we are here to inspire you and give you an unforgettable experience of learning, fun and creation. We invite you to join us, from 24th  to 26th of February, in the inaugural edition of GYANITH and get inspired.
We have attached the schedule of events for your reference. Do visit our website www.gyanith.org for more information and registration of events. In case of any queries please contact                          
We hope to serve you in the best way and provide you with a great learning experience.

Regards,
Team GYANITH.";


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
			