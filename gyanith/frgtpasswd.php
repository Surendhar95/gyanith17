<!DOCTYPE html>
	

<html lang="en">

	<head>
		<title>Forg0t Password</title>
        <!--<link rel="stylesheet" href="css/style_login.css">
        <script src="js/frgtpass.js"></script>-->
    </head>

    <body>
    <link rel="stylesheet" href="css/style_login.css" type="text/css">
        <script src="js/frgtpass.js" type="text/javascript"></script>
    <div class="login-form">

    <form id="frgtpassfrm" method="post" action="valid_frgtpass.php">
        <div class="group">
        <div class="label" style="color:white;">Forgot Password</div>
        </div><br/><br/><br/>
    <div id="infofrgt" name="infofrgt"><!--for showing mssg--></div>
    <div class="group">
		<label for="femail1" class="label">Email</label>
		<input type="email" class="input" name="femail1" id="femail1"/>
    </div>
    <div class="group">
         <label for="fpassword" class="label">New Password</label>
         <input type="password" id="fpassword" name="fpassword" class="input" data-type="password"/>
    </div>
    <div class="group">
        <label for="cfpassword" class="label">Confirm New Password</label>
        <input type="password" id="cfpassword" name="cfpassword" class="input" data-type="password"/>
    </div><br/><br/>
    <div class="group">
         <input type="submit" id="fsubmit" name="fsubmit" class="button" value="Submit"/>
    </div>
    </form>
    </div>
    </body>
</html>
