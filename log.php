<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
  		<title>Gyanith '17 | Feb 24-26</title>
		
		<script type="text/javascript" src="js/jquery.js"></script>
    	<script type="text/javascript" src="js/validation.min.js"></script>
    	<script type="text/javascript" src="js/material.min.js"></script>
		<script type="text/javascript" src="js/script.js" ></script>
		<script type="text/javascript" src="js/log_scr.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
		
		<link rel="stylesheet" type="text/css" href="css/material.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style_click_drop.css">
		<link rel="stylesheet" type="text/css" href="css/style_login.css">
		
    	<script src='https://www.google.com/recaptcha/api.js'></script>
	 	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
		<script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>


	</head>
	<body>

		<div>

				 <?php include 'loginicon.php'; ?>
				 <?php include 'sidebar.php'; ?>
				
    <div class="login-wrap">
		<div class="login-html">
			<div id="mainpage1">

				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" onclick=clr()>Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" onclick=clr1()>Sign Up</label>
				<div class="login-form">
				<!--login form begin-->
					
					<div class="sign-in-htm">
					<br/><br/><br/><br/><br/>
					<form class="form-signin" method="post" id="log-form" autocomplete="off"><br/><br/>
					<div id="error1">
						<!-- error will be showen here ! 
						for test fade out-->
					</div>
						<div class="group">
							<label for="email1" class="label">Email</label>
							<input type="email" class="input" name="email1" id="email1">
						</div>
						<div class="group">
							<label for="password1" class="label">Password</label>
							<input name="password1" id="password1" type="password" class="input" data-type="password">
						</div>
						<!--<div class="label"><a href="forgetPass.php">Forget Password?</a></div>-->
					&nbsp;&nbsp;	<!--<label>--><span class="undfrgt" style="color:blue;" onclick=frgtpass()>Forgot Password?</span></a><!--</label>--><br/><br/>
						<div class="group">
							<input type="submit" class="button" value="Sign In" name="login1" id="btn-submit1">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-2" onclick=clr1()>Don't have an Account?<span class="und" style="color:blue;">Signup</span></a>
						</div>
						</form>
					</div>


		<!--login form end-->

		<!--signup form begin-->
					<div class="sign-up-htm">
					<form method="post" id="signup-form" autocomplete="off"><!-- method="post" action="valid_reg.php">-->
					<br/><div class="group" style="text-align:center;position:relative;left:-15px;" id="error">
									<!-- error will be showen here ! -->
								</div>
						<div class="group">
							<label for="first_name" class="label">First Name</label>
							<input type="text" class="input" name="first_name" id="first_name">
						</div>
						<div class="group">
							<label for="second_name" class="label">Last Name</label>
							<input type="text" class="input" name="second_name" id="second_name">
						</div>
						<div class="group">
							<label for="pass" class="label">Email</label>
							<input name="email" id="email" type="email" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input name="password" id="password" type="password" class="input" >
						</div>
						<div class="group">
							<label for="pass" class="label">Confirm Password</label>
							<div class="inner-addon right-addon group">
								<input name="cpassword" id="cpassword" type="password" class="input1 form-control input" />
								<i class="test glyphicon glyphicon-remove" style="color:#17680c"></i>
							</div>
						</div>
						<div class="group" style="text-align:center;">
							<label for="pass" class="label">Gender</label>
							<input type="radio" name="sex" id="inlineRadio1" value="male" class="radiov"> <span class="label" style="display:inline;">Male  &nbsp;</span>
							<input type="radio" name="sex" id="inlineRadio2" value="female" class="radiov"><span class="label" style="display:inline;"> Female</span><br>
						</div>
						<div class="group">
							<label for="pass" class="label">College</label>
							<?php include ('collegeselect.php'); ?><br/>
							<input name="collegetxt" id="collegetxt" type="text" class="input coltxt" required placeholder="College name">
						</div>
						<div class="group">
							<label for="pass" class="label">Mobile</label>
							<input id="pass" type="text" pattern="[789]{1}[0-9]{9}" title='Enter valid phone number' class="input" name="phone" id="phone">
						</div><br>
						<div class="group">
						<!--<div class="g-recaptcha"  style="position:relative;left:24%;" data-sitekey="6Ld3lhEUAAAAABmQ8BNIvQHpk8ZijgjE3TgWsPO1"></div>-->
						<div class="g-recaptcha"  style="position:relative;left:24%;" data-sitekey="6LdjkhMUAAAAAMqucx_ESvFQLjysrDaIPmnCkOzT"></div>
						</div>

						<div class="group">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hospitality" value="hospitality" style="-ms-transform: scale(2, 2);  -webkit-transform: scale(2, 2);  transform: scale(2, 2);"/><span class="label" style="display:inline;">&nbsp;&nbsp;Register for accomodation</span><br>
						</div>

						<div class="group">
							<input type="submit" class="button" value="Create Account" name="submit" id="btn-submit">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1" onclick=clr()>Already Member?<span class="und" style="color:blue;">Sign In</span></a>
						</div>
						</form>
					</div>
					
					
			<!--sign form end-->
		</div>
		</div>
	</div>
</div>
  
</div>   <!-- /content-wrap -->
		<!--</div>-->
		</div><!-- /container -->

	<!--footer in this file has different position property-->	
		<div>
	
<style>
footer{
	
	position:absolute;
	top:1300px;
	left:0%;
	right:0%;
	font-size:15px;
	text-align:center;
	color:#fff;
	/*margin-bottom:2%;*/
	opacity:0.7;
	z-index:-1;
}

footer hr{
	width:97%;
	position:relative;
	left:17px;
	
}
.clrch:hover{
color:#19f6e8;
}
#socialicon{
	padding-left:5%;
/*padding-right:20px;*/
margin-bottom:5px;
}

</style>

<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

<footer>
<hr/>
	<div class="footer">
		<div class="row">
			<div id="socialicon" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="/images/twitter.svg" />
					<img src="/images/youtube.svg"/>
					<img src="/images/insta.svg"/>
					<div style="padding-bottom:-40px;" class="fb-like" data-href="https://www.facebook.com/gyanith.nitpy/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clrch">
					MADE WITH <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> BY WEB TEAM NITPY
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">GYANITH LOGO</div>
		</div>
	</div>
</footer>


		</div>
		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
		
	</body>
</html>