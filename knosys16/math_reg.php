<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/events.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="js/events_reg.js"></script>

</head>

<body>
<?php
session_start();
$_SESSION['event'] = 'antagon';

?>
    
<div class="signin-form">

    <div class="container">
     
        
       
      
        </br>
    </br>
        
        <div id="error" >
        <!-- error will be shown here ! -->
        </div>
       
        
       
      
        <h4 style='position:relative;left:-150px'>Click here to register for the event</h4></br></br>
        
        <?php
        if(!isset($_SESSION['username'])){?>
    <div style='position:relative;right:140px' class='text-danger'><h5>Login to register for the event.</h5></div>

  
       <div class="form-group" style='position:relative;left:170px'>
    <div class="col-sm-offset-2 col-sm-10">
            <button type="" class="btn btn-default disabled" style='float : left;' name="reg" id="">
            <span class="glyphicon glyphicon-expand"></span> &nbsp; Register
            </button> 
        </div>  
    </div>
<?php }else{?>
<form class="form-signin" method="post" id="reg_math">
 <div class="form-group" style='position:relative;left:170px'>
    <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" style='float : left;' name="reg" id="btn-submit">
            <span class="glyphicon glyphicon-expand"></span> &nbsp; Register
            </button> 
        </div>  
    </div>
     </form>



<?php }?>


      
     

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>