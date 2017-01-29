
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Gyanith '17 | Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="js/script.js" type="text/javascript"></script>
  
     <style>
      .glyphicon-remove {
   opacity:0;
   }

      </style>
</head>

<body><!--style='background-image:url("svg/register_bg.svg")'>  -->

  <br><br> <br>
    <div class="signin-form">
    	<div class="container" style="background-color:#ddffcc;">
            <div class="row" style='position:relative;top:20px'>
                <div class='col-sm-10 col-md-10 col-lg-10'>
                    <form class="form-signin" method="post" id="register-form" autocomplete="off" >
                        </br>
                         <div id="error">
                            <!-- error will be showen here ! -->
                        </div>
                 <!--      <div class="glyphicon glyphicon-ok">
                           
                        </div>-->
                        <div class="form-group">
                            <label for="first_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Fist Name</label>
                            <input type="text" class="form-control" pattern='^[a-zA-Z][a-zA-Z0-9-_\.]{2,20}$' title="First name should start with alphabet followed by numbers or characters(alphabets ,_,.).<br/>The length should be between 2 to 20" style='width:300px;float:left' placeholder="" name="first_name" id="first_name" />
                        </div>
                      
                        </br></br>
                        </br>
                        <div class="form-group">
                            <label for="second_name" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Second Name</label>
                            <input type="text" class="form-control" style='width:300px;float:left' pattern='^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$' title="Second name should start with alphabet followed by numbers or characters(alphabets ,_,.).<br/>The length should be between 1 to 20" placeholder="" name="second_name" id="second_name" />
                         </div>
                         </br></br>
                        </br>
                        <div class="form-group">
                            <label for="email" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Email</label>
                            <input type="email" class="form-control" style='width:300px;float:left' name="email" id="email" />
                            <!--<span id="check-e"></span>-->
                        </div>
                        </br> </br></br>
                        <div class="form-group">
                            <label for="password" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Password</label>
                            <input type="password" class="form-control" style='width:300px;float:left' placeholder="" name="password" id="password" />
                        </div>
                        </br></br>
                        </br>
                        <div class="form-group">
                            <label for="cpassword" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Confirm Password</label>
                            <input type="password" class="form-control" style='width:300px;float:left' placeholder="" name="cpassword" id="cpassword" />
                        <i class="glyphicon">
                      
                        </i>

                        </div>
                        <div id="tick"></div>
                        </br></br>
                        </br>
                        <div class="form-group">
                            <label for="gender" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Gender</label>
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
                            <label for="college" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">College</label>
                            <input type="text" class="form-control" style='width:300px;float:left' placeholder="" name="college" id="college" />
                        </div>
                        </br></br>
                        </br>
                        <div class="form-group">
                            <label for="phone" style='padding-top:10px;color:;float:left;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif' class="col-sm-2 control-label">Phone</label>
                            <input type="text" pattern="[789]{1}[0-9]{9}" title='Enter valid phone number' class="form-control" style='width:300px;float:left' placeholder="" name="phone" id="phone"   />
                        </div>
                        </br></br>
                        </br>
                        <!--<div class="g-recaptcha" style='position:relative;left:165px' data-sitekey="6Ld3lhEUAAAAABmQ8BNIvQHpk8ZijgjE3TgWsPO1"></div>-->
                        </br>
                       
                        <br/>   
                       
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

