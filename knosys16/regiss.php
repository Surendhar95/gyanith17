<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>

<body style='background-image:url("svg/register_bg.svg")'>  

  <br><br> <br>
<div class="signin-form">

	<div class="container">
     
        <div class="row" style='position:relative;top:20px'>
    
    <div class='col-sm-10 col-md-10 col-lg-10'>
       <form class="form-signin" method="post" id="register-form">
       </br>
   
       
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">User Name</label>
        <input type="text" class="form-control" style='width:300px;float:left' placeholder="" name="user_name" id="user_name" />
        </div>
    </br></br>
</br>
        
        <div class="form-group">
            <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Email</label>
        <input type="email" class="form-control" style='width:300px;float:left' placeholder="" name="email" id="email" />
        <span id="check-e"></span>
        </div>
     </br></br>
</br>
        
        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Password</label>
        <input type="password" class="form-control" style='width:300px;float:left' placeholder="" name="password" id="password" />
        </div>
        </br> </br></br>

        
        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Confirm password</label>
        <input type="password" class="form-control" style='width:300px;float:left' placeholder="" name="cpassword" id="cpassword" />
        </div>
         </br></br>
</br>

        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Full Name</label>
        <input type="text" class="form-control" style='width:300px;float:left' placeholder="" name="full_name" id="full_name" />
        </div>
        </br></br>
</br>
        <div class="form-group">
     <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10" style='float:left'>
      <div style='float:left'>
  <label class="radio-inline">
<input type="radio" style='float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' name="sex" id="inlineRadio1" value="male"> Male
</label>
<label class="radio-inline">
  <input type="radio"  style='font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' name="sex" id="inlineRadio2" value="female"> Female
</label>
</div>
</div>
</div>
 </br></br>
</br>
        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">College</label>
        <input type="text" class="form-control" style='width:300px;float:left' placeholder="" name="college" id="college" />
        </div>
         </br></br>
</br>
        <div class="form-group">
             <label for="user_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Phone</label>
        <input type="text" class="form-control" style='width:300px;float:left' placeholder="" name="phone" id="phone" />
        </div>
    </br></br>
</br>
<!--<div class="g-recaptcha" style='position:relative;left:165px' data-sitekey="6Ld3lhEUAAAAABmQ8BNIvQHpk8ZijgjE3TgWsPO1"></div>-->

</br>
</br>
     
        
       <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" style='float:left' name="submit" id="btn-submit">
    		<span class="glyphicon glyphicon-user"></span> &nbsp; Create Account
			</button> 
        </div>  
    </div>
</br>
</br><br><br>

      
      </form>

    </div>
    
</div>
    


</body>
</html>