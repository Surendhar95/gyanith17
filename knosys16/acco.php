<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/events.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="js/events_reg.js"></script>

</head>
<style>
#conts_tit{
    font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida;
    text-decoration:underline;
    color:black;
    
}
</style>

<body>
<div id='conts_tit'>
    <h2 ><b>HOSPITALITY</b></h2>
</div>
<?php
session_start();


?>
    
<div class="signin-form">

	<div class="container">
     
        
       
      
       

        
      
       
        
       
    
        
            <h5 style='text-align:left'>All members of a team should register for accommodation individually.<br>      
It is mandatory to bring your college ID card .<br>
Accommodation Charge will be Rs.100/- per day per person.<br>
PR Desk Registration fee: 50 per person.<br>
Accommodation will start only from 18th of March 2016, 17:00 and should vacate the rooms  before 23:59 on 20th March 2016.<br> Please plan your travel accordingly.</h5>

         <div id="error" >
        <!-- error will be shown here ! -->
        </div>
   
        <h5 style='position:relative;left:150px'>Click here to register for Accomodation</h5>
        
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





<?php }?>

<form class="form-signin" method="post" id="reg_hosp">
 <div class="form-group" style='position:relative;left:170px'>
    <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" style='float : left;' name="reg" id="btn-submit">
            <span class="glyphicon glyphicon-expand"></span> &nbsp; login
            </button> 
        </div>  
    </div>
     </form>


      
     

    </div>
    
</div>
    <br><br><br><br>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>