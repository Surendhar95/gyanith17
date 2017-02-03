<?php
session_start();
try{

		function send_mail($email,$body,$body1){
require_once('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;
//$path="/pdf/Gyanith'17 Schedule.pdf";
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

$mail->Subject = 'Acknowledgement Email for Paper Presentation';
$mail->Body    = $body;
$mail->AltBody  =  $body1;
//$mail->addAttachment($path);
//$mail->SMTPDebug = 2;
if(!$mail->send()) {
   // echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  // echo 'Message has been sent';
}
}

include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submiteve']) && isset($_POST['events'])){
   //find whether present in table
      $select=$_POST['events'];
      // check for team events
      $teame=0;
      if($select!='dbugcbug' && $select!='weblicate' && $select!='antagon'){
        $teame=1;
      }
      

      $sql="SELECT * FROM events WHERE g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':gid'=>$g_id));
      $result=$stmt1->fetch();
			$gid = $result['g_id'];
      $events=$result[$select];
      $email=$_SESSION['email'];

        $body="<p>
        Hi!<br/>
        Greetings from Team Gyanith.<br/>
        Thanks a lot for registering for the event: <b>Paper Presentation</b>.<br/>
        We request you to do the following:<br/>
        1.	All team members must register for the event Paper Presentation from our web site www.gyanith.org<br/>
        2.	The participant( any one participant from your team ) must submit an abstract of the paper via e-mail to papersubmit@gyanith.org<br/>
        3.	The abstract should be submitted as a PDF document (.pdf format) with Times New Roman font (size 12) and single spacing <br/>
        4.	IEEE format should be adopted.<br/>
        5.	The selection in the first round will be based on the abstract submitted.<br/>
        6.	Results will be mailed to the team members of the selected teams.<br/>
        7.	The participants should send the title of the topic of presentation, participants name, college name, branch and year, phone number of participants and their email ids while mailing the abstract.<br/>
        </p>
        Regards,<br/>
        Team Gyanith,<br/>
        NIT Puducherry.";
        
        
        $body1="<p>
        Hi!<br/>
        Greetings from Team Gyanith.<br/>
        Thanks a lot for registering for the event: <b>Paper Presentation</b>.<br/>
        We request you to do the following:<br/>
        1.	All team members must register for the event Paper Presentation from our web site www.gyanith.org<br/>
        2.	The participant( any one participant from your team ) must submit an abstract of the paper via e-mail to papersubmit@gyanith.org<br/>
        3.	The abstract should be submitted as a PDF document (.pdf format) with Times New Roman font (size 12) and single spacing <br/>
        4.	IEEE format should be adopted.<br/>
        5.	The selection in the first round will be based on the abstract submitted.<br/>
        6.	Results will be mailed to the team members of the selected teams.<br/>
        7.	The participants should send the title of the topic of presentation, participants name, college name, branch and year, phone number of participants and their email ids while mailing the abstract.<br/>
        </p>
        Regards,<br/>
        Team Gyanith,<br/>
        NIT Puducherry.";
     if($gid!=null)
    {  
      if($events=='0'){
      //echo $select.'<br/>';
      $sql = "UPDATE events SET ".$select."=1 WHERE g_id=:gid";
      $stmt2 = $db->prepare($sql);
      $stmt2->execute(array(':gid'=>$g_id));
      //send mail for paper registration
     if($select=='consilium' || $select=='ityuktha' || $select=='prastuti')
      { send_mail($email,$body,$body1);
      }
      //for antagon code chef username
      if($select=='antagon'){
        if(isset($_POST['anttxt'])){
          $sql="update events set codechef='".$_POST['anttxt']."' WHERE g_id=:gid";
          $stmt2 = $db->prepare($sql);
          $stmt2->execute(array(':gid'=>$g_id));
      
        }
      }

      echo "upd ".$select." bltm ".$teame;
      }
      else{
        echo 'Already registered';
      }

   }
   else{
     $sql="insert into events(g_id,".$select.") values (:gid,1)";
     $stmt3 = $db->prepare($sql);
    $stmt3->execute(array(':gid'=>$g_id));
    //send mail for paper registration
     if($select=='consilium' || $select=='ityuktha' || $select=='prastuti')
      { send_mail($email,$body,$body1);
      }
      if($select=='antagon'){
        if(isset($_POST['anttxt'])){
          $sql="update events set codechef='".$_POST['anttxt']."' WHERE g_id=:gid";
          $stmt2 = $db->prepare($sql);
          $stmt2->execute(array(':gid'=>$g_id));
      
        }
      }
    echo "ins ".$select." bltm ".$teame;
   }

}
}
catch(PDOException $e){
$e->getMessage();
}
?>