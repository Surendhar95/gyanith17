<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="css/style_login.css">
	 <script src="js/script.js" type="text/javascript"></script>
	 <script type="text/javascript" src="js/log_scr.js"></script>
	 <script>
	 function clr(){
			document.getElementById("error1").innerHTML = "";
			 $('#log-form')[0].reset();
	 }
	  function clr1(){
		document.getElementById("error").innerHTML = "";
	    $('#signup-form')[0].reset();
	 }
	 function frgtpass(){
		 $('#mainpage1').load('frgtpasswd.php');
			$("title").html("Forget Password");
						return false;
		}
	 
	 </script>
	<!--  <style>
      .glyphicon-remove {
   opacity:0;
   }

/* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input1  { padding-left:  30px; }
.right-addon input1 { padding-right: 30px; }

      </style>-->
</head>

<body><!-- style="background-color:#0f2851">-->
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
				<!--<label>--><span class="undfrgt" style="color:blue;" onclick=frgtpass()>Forgot Password?</span></a><!--</label>--><br/>
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
			 <form method="post" id="signup-form" autocomplete="off" >
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
				<!--<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input name="cpassword" id="cpassword" type="password" class="input" >
					<i class="glyphicon glyphicon-remove"></i>
				</div>-->
				<!--abhi add-->
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<div class="inner-addon right-addon group">
    					<input name="cpassword" id="cpassword" type="password" class="input1 form-control input" />
						<i class="test glyphicon glyphicon-remove" style="color:#17680c"></i>
					</div>
				</div>
				<div class="group" style="text-align:center;">
					<label for="pass" class="label">Gender</label>
					<input type="radio" name="sex" id="inlineRadio1" value="male" class="radiov"> Male  &nbsp;
					<input type="radio" name="sex" id="inlineRadio2" value="female" class="radiov"> Female<br>
				</div>
				<div class="group">
					<label for="pass" class="label">College</label>
					<input name="college" id="college" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mobile</label>
					<input id="pass" type="text" pattern="[789]{1}[0-9]{9}" title='Enter valid phone number' class="input" name="phone" id="phone">
				</div><br>
				<div class="group">
			<!--	<div class="g-recaptcha" style="position:relative;left:40px;" data-sitekey="6Ld3lhEUAAAAABmQ8BNIvQHpk8ZijgjE3TgWsPO1"></div>-->
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
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>
</html>
