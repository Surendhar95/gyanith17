<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  		
    <title>Gyanith '17 | Dashboard</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jqDashboard</script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
	
    <script type="text/javascript" src="js/dashboard.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_dashboard.css">
    
	<link rel="stylesheet" type="text/css" href="css/style_click_drop.css">
			
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
	<script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>

</head>

<body>
    <?php include 'loginicon.php'; ?>
				 <?php include 'sidebar.php'; ?>
				
<div class="login-wrap">
<div class="login-html">
    
<?php //session_start();
  
      
         if(!isset($_SESSION['g_id']))        
          header("Location:/log.php");
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
}
catch(PDOException $e){
$e->getMessage();
}
?>
<div class="hdng">PROFILE</div>
<div class="hr"></div>
<div class="label">GY-ID</div><div class="txtval" id="gid"><?=$_SESSION['g_id'];?></div><br/>
<div class="label">NAME</div><div id="pname" class="txtval"><?=$_SESSION['name'];?></div><br/>
<div class="label">EMAIL</div><div class="txtval" id="pemail"><?=$_SESSION['email'];?></div><br/>


<div>
   <br/><br/><br/> <div class="hdng">Events Registration</div>
   <div class="hr"></div>
<form id="dropevents" method="post"><!-- action="dbevents.php">-->
<div id="alerteve"></div>
<div class="label">Events</div>
<select name="events" id="events" class="selectdrp">
<option value="" disabled selected>Select events</option>
<option value="dbugcbug">D-Bug C-Bug</option>
<option value="weblicate">Weblicate</option>
<option value="enigma">Enigma</option>
<option value="antagon">Antagon</option>
<option value="sync">SYNC</option>
<option value="linkit">Linkit</option>
<option value="rush_hour">Rush Hour</option>
<option value="junkyard">Junkyard Wars</option>
<option value="burnout">Burn out</option>
<option value="copterx">CopterX</option>
<option value="pixel">Pixel</option>
<option value="techpursuit">TechPursuit</option>
<option value="detonatex">Detonatex</option>
</select>
<br/>
<input type="submit" id="submiteve" name="submiteve" class="bttn" value="Click to Register for events"/>
<br/>
<div id="regd">
<div>Registered events are:</div><br/>
<div id='infoeve'><!--for mssg display-->

<?php

try{
//include("dbcon.php");
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
//$g_id=$_SESSION['g_id'];
$sql="SELECT * FROM events WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$test=0;
if($result['dbugcbug']=='1')
{	echo '<div class="tnote">Dbug Cbug</div>';$test=1;}
if($result['weblicate']=='1')
{	echo '<div class="tnote">Weblicate</div>';$test=1;}
if($result['enigma']=='1')
{	echo '<div class="tnote">Enigma</div>';$test=1;}
if($result['antagon']=='1')
{	echo '<div class="tnote">Antagon</div>';$test=1;}
if($result['sync']=='1')
{	echo '<div class="tnote">SYNC</div>';$test=1;}
if($result['linkit']=='1')
{	echo '<div class="tnote">Linkit</div>';$test=1;}
if($result['rush_hour']=='1')
{	echo '<div class="tnote">Rush Hour</div>';$test=1;}
if($result['junkyard']=='1')
{	echo '<div class="tnote">Junkyard</div>';$test=1;}
if($result['burnout']=='1')
{	echo '<div class="tnote">Burnout</div>';$test=1;}
if($result['copterx']=='1')
{	echo '<div class="tnote">Copterx</div>';$test=1;}
if($result['pixel']=='1')
{	echo '<div class="tnote">Pixel</div>';$test=1;}
if($result['techpursuit']=='1')
{	echo '<div class="tnote">Techpursuit</div>';$test=1;}
if($result['detonatex']=='1')
{	echo '<div class="tnote">Detonatex</div>';$test=1;}
}
catch(PDOException $e){
$e->getMessage();
}
?>
</div>
</div>
</form>
</div>

<!--workshops regs start--><!--
<div>
    <br/><br/><br/> <div class="hdng">Workshops Registration</div>
   <div class="hr"></div>
<form id="dropworkshops" method="post"><!-- action="dbworkshops.php">
<div id="alertwrk"></div>
<div class="label">Workshops</div>
<select name="workshops" id="workshops" class="selectdrp">
<option value="" disabled selected>Select workshops</option>
<option value="android">Android</option>
<option value="hackpro">Hackpro</option>
</select>
<br/>
<input type="submit" id="submitwrk"  class="bttn" name="submitwrk" value="Click to Register for Workshops"/>
<br/>
<div>Registered Workshops are:</div><br/>
<div id='infowrk'><!--for mssg display-->

<?php
/*
try{
//include("dbcon.php");
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
//$g_id=$_SESSION['g_id'];
$sql="SELECT * FROM workshops WHERE g_id=:gid";
$stmt2 = $db->prepare($sql);
$stmt2->execute(array(':gid'=>$g_id));
$result=$stmt2->fetch();
$wtest=0;
if($result['android']=='1')
{	echo '<div class="tnote">Android</div>';$wtest=1;}
if($result['hackpro']=='1')
{	echo '<div class="tnote">Hackpro</div>';$wtest=1;}
}
catch(PDOException $e){
$e->getMessage();
}*/
?>
<!--</div><br/>
</form>
</div>
-->
<!--workshops regs end-->

<br/>
<div id="team">
<div class="hdng">Teams</div>
<div class="hr"></div>
<div id="teameve" class="boxsh">
    <div class="label" style="text-align:center;">Team for events</div>
<?php
$sql="SELECT t_id FROM events WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid = $result['t_id'];
if($tid==null){
    if($test==1){
?>
<div id="createteam1">
<button id="plus" class="plus">+</button>
<form id="teamevents" method="post">
<div id="txtsub" name="txtsub">
<input type="text" id="etname" name="etname" class="txtinp" placeholder="Enter team name"/><br/>
<input type="text" id="emate1" name="emate1" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr1" class="alert alert-danger"></div><br/>
<input type="text" id="emate2" name="emate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr2" class="alert alert-danger"></div><br/>
<input type="text" id="emate3" name="emate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr3" class="alert alert-danger"></div><br/>
<input type="text" id="emate4" name="emate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr4" class="alert alert-danger"></div><br/>
<input type="text" id="emate5" name="emate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr5" class="alert alert-danger"></div><br/>
<div class="label">Refer events details for number of members in team</div>
<input type="submit" id="submittmeve" name="submittmeve"  class="bttn"/>
</div>
</form>
<div id="tnmshow"></div>
</div>
<?php }
else{?>
    <div class="label" id="dispeve">&nbsp;Register in a team event to create team</div>
<?php }
}else{
$sql="SELECT tname FROM team WHERE t_id=:tid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid));
$result=$stmt1->fetch();
$tname = $result['tname'];
//echo'You are in team: '.$tname;?>
<div class="label" id="msgeve">&nbsp;You are in team:&nbsp;&nbsp;<span class="tnote"> <?php echo $tname ?></span></div>
<?php }?>
<div id="createteam">
<button id="plus" class="plus">+</button>
<form id="teamevents" method="post">
<div id="txtsub" name="txtsub">
<input type="text" id="etname" name="etname" class="txtinp" placeholder="Enter team name"/><br/>
<input type="text" id="emate1" name="emate1" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr1" class="alert alert-danger"></div><br/>
<input type="text" id="emate2" name="emate2" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr2" class="alert alert-danger"></div><br/>
<input type="text" id="emate3" name="emate3" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr3" class="alert alert-danger"></div><br/>
<input type="text" id="emate4" name="emate4" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr4" class="alert alert-danger"></div><br/>
<input type="text" id="emate5" name="emate5" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr5" class="alert alert-danger"></div><br/>
<div class="label">Refer events details for number of members in team</div>
<input type="submit" id="submittmeve" name="submittmeve"  class="bttn"/>
</div>
</form>
<div id="tnmshow"></div>
</div>

</div>

<br/><br/>
<!--team wrkshop regs begin--><!--
<div id="teamwrk" class="boxsh">
<div class="label" style="text-align:center;">Team for Workshops</div>
<?php/*
$sql="SELECT t_id FROM workshops WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid = $result['t_id'];
if($tid==null){
     if($wtest==1){*/
?>
<div id="wcreateteam1">
<button id="wplus" class="plus">+</button>
<form id="teamworkshops" method="post">
    <div id="wtxtsub" name="wtxtsub">
<input type="text" id="wtname" name="wtname" class="txtinp" placeholder="Enter team name" /><br/>
<input type="text" id="wemate1" name="wemate1" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate2" name="wemate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate3" name="wemate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate4" name="wemate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate5" name="wemate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk" name="submittmwrk" class="bttn" />
</div>
</form>
<div id="wtnmshow"></div>
</div>
<?php /*
}
else{ */?>
    <div class="label" id="dispwrk">&nbsp;Register in a team Workshops to create team</div>
<?php/* }
}else{
  $sql="SELECT tname FROM wrkteam WHERE t_id=:tid";  
  $stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid));
$result=$stmt1->fetch();
$tname = $result['tname'];*/
?>
<div class="label" id="msgwrk">You are in team:&nbsp;&nbsp;<span class="tnote"><?php echo $tname ?></span></div>
<?php/* } */?>
<div id="wcreateteam">
<button id="wplus" class="plus">+</button>
<form id="teamworkshops" method="post">
    <div id="wtxtsub" name="wtxtsub">
<input type="text" id="wtname" name="wtname" class="txtinp" placeholder="Enter team name" /><br/>
<input type="text" id="wemate1" name="wemate1" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate2" name="wemate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate3" name="wemate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate4" name="wemate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<input type="text" id="wemate5" name="wemate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk" name="submittmwrk" class="bttn" />
</div>
</form>
<div id="wtnmshow"></div>
</div>
</div>-->
<!--team wrkshop regs begin-->
</div>
</div>

</div>
</div>

		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		

</body>
</html>