<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="js/log_scr.js"></script>

</head>

<body style='background-image:url("svg/login_bg.svg")'>
   <br><br><br>

    
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form" action="login_db.php">
      
        </br>
    </br>
       
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
       
        
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
    </br></br>
        
     <!--    <div style='color:blue;position:relative;right:330px' ><a <p>Create account<p></div> -->
    </br>

       
        
       <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" style='float : left' name="login" id="btn-submit">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Login
            </button> 
        </div>  
    </div>
</form>

      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>