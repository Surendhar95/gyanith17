
<?php session_start();?>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>Knosys 16</title>
	<link href='img/logo.png' rel='icon'>
	<meta charset="utf-8"/>
	<meta name='viewport' content='width=device-width,initial-scale=1'>
	<meta name='description' content='Knosys is an annual technical fest by Computer Science and Engineering Department,NIT Puducherry '/>
	<!-- <meta property="og:image" content="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/12794392_1020136798047139_5551897208969284665_n.jpg?oh=4c8c9eb7b341ba31681e3b940cfd8709&oe=574E55A3&__gda__=1466283420_3ddcdf9374851891248162d0dff9aba6" /> -->
<meta property="og:title" content="Knosys 16" />
<meta property="og:description" content="Annual technical fest by Computer Science and Engineering Department,NIT Puducherry" />
	
	<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 
	 <link rel="stylesheet" href="css/style.css"/>

	 <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> --> 


	  
	  <link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic&amp;subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	
 
  <link rel='stylesheet' href='css/events.css' >
  
 
  
  <script type='text/javascript' src="js/super.js"></script>
  

	
	
	 

	 <script type="text/javascript" charset="utf-8">

jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay().fadeOut("slow");
});


$(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();  
});

   
	

		</script>
	
<style>
  /* Tooltip */
 
  </style>

</head>

<?php


if(isset($_SESSION['active'])){

unset($_SESSION['active']);?>
	<script>
	$(function(){
		$('#mainpage').css({"background-image":"url('svg/login_bg.svg') "});
		

				$('#mainpage').load('login.php');
				$("title").html("Knosys'16 - Login");
					return false;
	});
	</script>

	<?php
}

if(isset($_SESSION['dd_hackpro'])){

?>
	<script>
	$(function(){
		$('#mainpage').css({"background-image":"url('svg/default.svg') "});
		

				$('#mainpage').load('hackpro_reg.php');
				$("title").html("Knosys 16 - Hackpro");
					return false;
	});
	</script>

	<?php
}
	if(isset($_SESSION['dd_android'])){

?>
	<script>
	$(function(){
		$('#mainpage').css({"background-image":"url('svg/default.svg') "});
		

				$('#mainpage').load('android_reg.php');
				$("title").html("Knosys 16 - Android");
					return false;
	});
	</script>

<?php }

 if(isset($_SESSION['username'])){?>
 	<script>
    $(function(){
        hide();
    });
 </script>

 	<?php
 }
 ?>



<body id="" style="overflow:hidden;margin-top:1px;padding-top:0px;">
	<div class='container-fluid'>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="preloader">
  <div id="status">&nbsp;</div>
</div>


<!-- Uttam CSS edit -->
<div  id='uttamcontainer'>
    <img src="img/body.png" id="uttambody" />

    <div id="uttamhome">
    <a href="index.php"><img src="img/home.png" /></a>
    </div>

    <div id="uttamsocial">
    <a href="https://www.facebook.com/knosys"><img src="img/facebook.png" /></a>
    <a href="https://twitter.com/knosys_nitpy"><img src="img/twitter.png" /></a>
	<a href="#"><img src="img/youtube.png" /></a>
	<a href="#"><img src="img/gmail.png" /></a>
	<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    </div>

    <div id='counter'>
	<img src="http://www.e-zeeinternet.com/count.php?page=1135629&style=odometer&nbdigits=6&reloads=1" alt=" " border="0" >
	</div>

	

<!--Content (Screen)-->
<div id="content">
<div id='taskbar'>
<div id='profile'>
<?php 

	if(!isset($_SESSION['username'])){?>

		<div class='inline'><div style='position:relative;left:700px;top:4px;font-size:14px;color:white' ><b>Welcome Guest</b></div></div>
		<div class='inline'><a href='' id='show_login' value="Show Login" ><b>Login</b></a></div>
<?php	
}
else
{
	$user=$_SESSION['username'] ?>
	<div class='inline'><div style='position:relative;left:720px;top:4px;font-size:14px;color:white'><b><?php echo $user ?></b></div></div>
	<div class='inline'><a href='logout.php' id='show_logout' value="show"><b>Logout</b></a></div>
	<?php

}
?>

</div>
</div>
<center>
<div id="sidebar">
	<ul style="list-style-type:none;padding-left:5px;padding-top:5px">
	<li id='reg'><a href="" class='test reg' data-toggle="tooltip" data-placement="right" title="Register"><img src='img/register.png'></a></li>
	<li id='workshop'><a href="" class='test ws' data-toggle="tooltip" data-placement="right" title="Workshop"><img src='img/workshop.png'></a></li>
	<li id='events'><a href="" class='test ev' data-toggle="tooltip" data-placement="right" title="Events"><img src='img/events.png'></a></li>
	<li id='accom'><a href="" class='test acc' data-toggle="tooltip" data-placement="right" title="Hospitality"><img src='img/acco.png'></a></li>
	<li id='contact'><a href="" class='test tm' data-toggle="tooltip" data-placement="right" title="Contacts"><img src='img/teams.png'></a></li>
	<li id='sponsors'><a href="" class='test' data-toggle="tooltip" data-placement="right" title="Sponsors"><img src='img/sponsors.png'></a></li>


    </ul> 
</div>
<div id="mainpage">	
	<?php include('menu.php');?>
</div>
</center>
</div>
</div><!-- Uttam CSS edit -->

</body>
</html>