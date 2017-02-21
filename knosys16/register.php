<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

   
</head>

<div id='reg'>

  

  <div class="row" style='position:relative;top:20px'>
    
    <div class='col-sm-10 col-md-10 col-lg-10'>
  
	<form class="form-horizontal" method='POST' action='validate.php'>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  name='email' required pattern='[^@]+@[^@]+\.[a-zA-Z]{2,6}'style='width:300px;float:left' class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password"required name='password' style='width:300px;float:left' class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="re-password" class="col-sm-2 control-label">Re-enter Password</label>
    <div class="col-sm-10">
      <input type="password" required style='width:300px;float:left' class="form-control" id="re-password" onkeyup="checkPasswordMatch();" placeholder="Re-enter Password" oninput='check(this)'>
   <div class="registrationFormAlert" id="divCheckPasswordMatch">
</div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#re-password").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
</script>
</div>
  </div>
  <div class="form-group">
    <label for="user" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" required pattern='^[a-zA-Z][a-zA-Z0-9-_\.]{2,20}$' style='width:300px;float:left' class="form-control" id="user" placeholder="User Name">
    </div>
  </div>

  <div class="form-group">
    <label for="user" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" required pattern='^[a-zA-Z. ]{3,30}$' style='width:300px;float:left' class="form-control" id="user" placeholder="Full Name">
    </div>
  </div>
  
    <div class="form-group">
    <label for="" style='' class="col-sm-2 control-label">Sex</label>
    <div class="col-sm-10" style='float:left'>
      <div style='float:left'>
  <label class="radio-inline">
<input type="radio" style='float:left' name="male" id="inlineRadio1" value="male"> Male
</label>
<label class="radio-inline">
  <input type="radio"  style='' name="female" id="inlineRadio2" value="female"> Female
</label>
</div>
</div>
</div>
  
  <div class="form-group">
    <label for="clg" class="col-sm-2 control-label">College</label>
    <div class="col-sm-10">
      <input type="text" style='width:300px;float:left' class="form-control" id="clg" placeholder="College">
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone </label>
    <div class="col-sm-10">
      <input type="text" pattern='^[0-9+]{10,13}$' required style='width:300px;float:left' class="form-control" id="phone" placeholder="Phone">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" value='register' class="btn btn-primary">register</button>
    </div>
  </div>
</form>
</div>

<div class='col-sm-2 col-md-2 col-lg-2'>
    </div>
</div>

	</div>
</html>
<?php

if(isset($_POST['email']))
echo 'H xfgxnhKADKLJwfjLEGAEL,MLi';
?>