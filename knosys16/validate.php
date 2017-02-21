<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	 <link rel="stylesheet" href="osd/notify-osd.css"/>
	 <link rel="stylesheet" href="css/valid.css"/>
	 <script type="text/javascript" src="jquery.js"/>
	 <script type="text/javascript" src="osd/notify-osd.min.js"/>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	 <script type="text/javascript" charset="utf-8">
	 		function already(){
	 			$('#mainpage').load('events.html #' + $(this).attr('href'));
	 		}
			$(document).ready(function(){
				
				$('#reg a').click(function(){
					$('#mainpage').css({"background-image":"url('img/registerbg.png')"});
				$('#mainpage').load('register.php #' + $(this).attr('href'));
					return false;
				});
				$('#workshop a').click(function(){
					
					$('#mainpage').css({"background-image":"url('img/comingsoon.png')"});
					$('#mainpage').load('workshop.html #' + $(this).attr('href'));
					
					return false;
				});
				$('#events a').click(function(){
					
					$('#mainpage').css({"background-image":"url('img/comingsoon.png')"});
					$('#mainpage').load('events.html #' + $(this).attr('href'));
					
					return false;
				});
				$('#teams a').click(function(){
					
					$('#mainpage').css({"background-image":"url('img/comingsoon.png')"});
					$('#mainpage').load('teams.html #' + $(this).attr('href'));
					
					return false;
				});
				$('#contact a').click(function(){
					
					$('#mainpage').css({"background-image":"url('img/comingsoon.png')"});
					$('#mainpage').load('contact.html #' + $(this).attr('href'));
					
					return false;
				});
				
			});
	function already(){
		$('#mainpage').css({"background-image":"url('img/emailinvalid.png')"});
	}

		</script>
	
<style>


</style>

</head>
<?php
session_start();
	
	try{
		
include("dbvars.php");
$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['submit'])){
			

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$stmt=$db->prepare("SELECT * FROM users WHERE Email=?");
		$stmt->bindParam(1,$email,PDO::PARAM_STR,50);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($result){      ?>
			<script>
    $(function(){
        already();
    });
 </script>
 <?php 
		}
		else{
			
			$pass=$_POST['password'];
			$fullname=$_POST['fullname'];
			$username=$_POST['username'];
			$college = $_POST['college'];
			$phone = $_POST['phone'];

			$pass = md5($pass);
			
			
			if(isset($_POST['male']))
				$sex = 'male';
			else
				$sex = 'female';

			$stmt1=$db->prepare('SELECT Sno FROM users ORDER BY Sno DESC LIMIT 1');
			$stmt1->execute();
			$no = $stmt1->fetch();
			$no = (int)$no;
			$no = $no + 1000;
			$kid = 'K'.$no;

			$stmt2 = $db->prepare('INSERT INTO users(Kid,Email,Username,Fullname,Password,Sex,College,Phone) VALUES (:kid,:email,:user,:full,:pass,:sex,:clg,:phone)');
			
			$stmt2->execute(array(':kid'=>$kid,':email'=>$email,':user'=>$username,':full'=>$fullname,':pass'=>$pass,':sex'=>$sex,':clg'=>$college,':phone'=>$phone));
			$_SESSION['username']= $username;


		}

	}
	
}
}
catch(PDOException $e){
	$e->getMessage();
}
?>
<body id="grad2" style="overflow:hidden;margin-top:1px;padding-top:0px;">

<div >
	<img src="img/body.png" class="center-block" />
</div>
<center>

<!--Content (Screen)-->

<div id="content" >
<div id='taskbar'></div>
<div id="sidebar">
	<ul style="list-style-type:none;padding-left:5px;padding-top:5px">
	<li id='reg'><a href="reg" title='Register'><img src="img/register.png" style="padding-top:5px;padding-bottom:5px"/></a></li>
	<li id='workshop'><a href="work" title='Workshops'><img src="img/workshop.png" style="padding-top:5px;padding-bottom:5px"/></a></li>
	<li id='events'><a href="eve" title='Events'><img src="img/events.png" style="padding-top:5px;padding-bottom:5px"/></a></li>
	<li id='teams'><a href="team" title='Teams'><img src="img/teams.png" style="padding-top:5px;padding-bottom:5px"/></a></li>
	<li id='contact'><a href="contact" title='Contact'><img src="img/contact.png" style="padding-top:5px;padding-bottom:5px"/></a></li>
    </ul> 
</div>
<div id="mainpage">
	
	
</div>
	

</div>

<!--Content-->

</center>
<div id="social">
	<a href="#"><img src="img/facebook.png" /></a>
	<a href="#"><img src="img/twitter.png" /></a>
	<a href="#"><img src="img/youtube.png" /></a>
	<a href="#"><img src="img/gmail.png" /></a>
</div>
<div id="home">
	<a href="index.html"><img src="img/home.png" /></a>
</div>
</div>
<!-- <div class="container" >
	<div class="row" id="img">
	<center>

<img src="img/body.png" style="height:670px;width:1100px;position:relative;top:0px"/>
</center>
</div>
</div>
<div id="content">

<div><p>Hi</p></div>
	</div> -->
</body>
</html>

