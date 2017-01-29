<!DOCTYPE html >
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
     <script src="js/jquery.js"></script>
       <script type="text/javascript" src="js/validation.min.js"></script>
       <!--   <script src="js/script.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="js/log_scr.js"></script>
</head>

<body><!-- style='background-image:url("svg/login_bg.svg")'>-->
   <br><br><br>

    
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        </br>
    </br>
       
        <div id="error">
        <!-- error will be showen here ! 
        for test fade out-->
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
            <button type="submit" class="btn btn-primary" style='float : left' name="login" id="btn-submit">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Login
            </button> 
        </div>  
    </div>
</form>

      
      </form>

    </div>
    
</div>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->

</body>
</html>