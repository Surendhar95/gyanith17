<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	 
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	 <script type="text/javascript" src="login_effect.js"></script>

	 <link rel="stylesheet" href="osd/notify-osd.css"/>
	 <link rel="stylesheet" href="css/style.css"/>
	 <script type="text/javascript" src="jquery.js"/>
	 <script type="text/javascript" src="osd/notify-osd.min.js"/>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

	 <script type="text/javascript" charset="utf-8">

			$( document ).ready(function(){
				$("#show_login").click(function(){
					$('#mainpage').css({"background-image":"url('img/registerbg.png')"});
				$('#mainpage').load('login.html');
					return false;
				});
				 
   
        
				$('#reg a').click(function(){
					$('#mainpage').css({"background-image":"url('img/registerbg.png')"});
				$('#mainpage').load('register.html #' + $(this).attr('href'));
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
function fail(){
		$('#mainpage').css({"background-image":"url('img/emailinvalid.png')"});
	}
		</script>
	
<style>


</style>

</head>




<body id="grad2" style="overflow:hidden;margin-top:1px;padding-top:0px;">

<div >
	<img src="img/body.png" class="center-block" />
</div>
<center>

<!--Content (Screen)-->

<div id="content" >
	


<div id='taskbar'>
<div id='profile'>
	
		 <a href='' id="show_login" value="Show Login" ><b>Login</b></a>
        
      </div>
</div>
<div id="sidebar">
	<ul style="list-style-type:none;padding-left:5px;padding-top:5px">
	<li id='reg'><a href="reg" class='reg' title='Register'></a></li>
	<li id='workshop'><a href="work" class='ws' title='Workshops'></a></li>
	<li id='events'><a href="eve" class='ev' title='Events'></a></li>
	<li id='teams'><a href="team" class='tm' title='Teams'></a></li>
	<li id='contact'><a href="contact" class='ct' title='Contact'></a></li>
    </ul> 
</div>
<div id="mainpage">
	<img src="img/hacker.gif" style="height:410px;width:100%;opacity:0.3;"/>
	
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
	<a href="index.php"><img src="img/home.png" /></a>
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