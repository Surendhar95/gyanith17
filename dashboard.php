<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  		
    <title>Gyanith '17 | Dashboard</title>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
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
    <?php include 'loginicon.php'; 
	if(!isset($_SESSION['g_id'])){
header('Location: /log.php');
} 
				 include 'sidebar.php'; ?>
				
<div class="login-wrap">
<div class="login-html">
    
<?php 
//session_start();
 
      
	  
         //if(!isset($_SESSION['g_id']))        
         //{ header("Location:/log.php");}
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
<option value="consilium">Consilium</option>
<option value="ityuktha">Ityuktha</option>
<option value="prastuti">Prastuti</option>
<option value="cobweb">Cobweb</option>
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

<!--workshops regs start-->
<div>
    <br/><br/><br/> <div class="hdng">Workshops Registration</div>
   <div class="hr"></div>
<form id="dropworkshops" method="post"><!-- action="dbworkshops.php">-->
<div id="alertwrk"></div>
<div class="label">Workshops</div>
<select name="workshops" id="workshops" class="selectdrp">
<option value="" disabled selected>Select workshops</option>
<option value="game">Game Development Using VR</option>
<option value="plugdin">Get PlugdIn</option>
<option value="control">Take Control</option>
<option value="renewate">Renewate Out World</option>
<option value="crabot">Crabot</option>
<option value="take">Take Off</option>
</select>
<br/>
<input type="text" id="sbitxt" name='sbitxt' class="txtinp" placeholder="Enter SBI collect number" title="Make payment to get SBI collect number. Refer website for payment details."/><br/>
<input type="submit" id="submitwrk"  class="bttn" name="submitwrk" value="Click to Register for Workshops"/>
<br/>
<div>Registered Workshops are:</div><br/>
<div id='infowrk'><!--for mssg display-->

<?php

try{
$sql="SELECT * FROM workshops WHERE g_id=:gid";
$stmt2 = $db->prepare($sql);
$stmt2->execute(array(':gid'=>$g_id));
$result=$stmt2->fetch();
$wtest=0;
if($result['game']=='1')
{	echo '<div class="tnote">Game Development Using VR</div>';$wtest=1;}
if($result['plugdin']=='1')
{	echo '<div class="tnote">Get PlugdIn</div>';$wtest=1;}
if($result['control']=='1')
{	echo '<div class="tnote">Take Control</div>';$wtest=1;}
if($result['renewate']=='1')
{	echo '<div class="tnote">Renewate Out World</div>';$wtest=1;}
if($result['crabot']=='1')
{	echo '<div class="tnote">Crabot</div>';$wtest=1;}
if($result['take']=='1')
{	echo '<div class="tnote">Take Off</div>';$wtest=1;}
}
catch(PDOException $e){
$e->getMessage();
}
?>
</div><br/>
</form>
</div>

<!--workshops regs end-->
<br/><br/>
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
<div id="terr1" class=""></div><br/>
<input type="text" id="emate2" name="emate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr2" class=""></div><br/>
<input type="text" id="emate3" name="emate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr3" class=""></div><br/>
<input type="text" id="emate4" name="emate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr4" class=""></div><br/>
<input type="text" id="emate5" name="emate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="terr5" class=""></div><br/>
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
<div id="terr1" class=""></div><br/>
<input type="text" id="emate2" name="emate2" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr2" class=""></div><br/>
<input type="text" id="emate3" name="emate3" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr3" class=""></div><br/>
<input type="text" id="emate4" name="emate4" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr4" class=""></div><br/>
<input type="text" id="emate5" name="emate5" class="txtinp" placeholder="Enter team Member GY-ID"/>
<div id="terr5" class=""></div><br/>
<div class="label">Refer events details for number of members in team</div>
<input type="submit" id="submittmeve" name="submittmeve"  class="bttn"/>
</div>
</form>
<div id="tnmshow"></div>
</div>

</div>

<br/><br/>
<!--team wrkshop regs begin-->
<div id="teamwrk" class="boxsh">
<div class="label" style="text-align:center;">Team for Workshops</div>
<?php
$sql="SELECT t_id FROM workshops WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid = $result['t_id'];
if($tid==null){
     if($wtest==1){
?>
<div id="wcreateteam1">
<button id="wplus" class="plus">+</button>
<form id="teamworkshops" method="post">
    <div id="wtxtsub" name="wtxtsub">
<input type="text" id="wtname" name="wtname" class="txtinp" placeholder="Enter team name" /><br/>
<input type="text" id="wemate1" name="wemate1" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr1" class=""></div><br/>
<input type="text" id="wemate2" name="wemate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr2" class=""></div><br/>
<input type="text" id="wemate3" name="wemate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr3" class=""></div><br/>
<input type="text" id="wemate4" name="wemate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr4" class=""></div><br/>
<input type="text" id="wemate5" name="wemate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr5" class=""></div><br/>
<input type="text" id="wemate6" name="wemate6" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr6" class=""></div><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk" name="submittmwrk" class="bttn" />
</div>
</form>
<div id="wtnmshow"></div>
</div>
<?php 
}
else{ ?>
    <div class="label" id="dispwrk">&nbsp;Register in a team Workshops to create team</div>
<?php }
}else{
  $sql="SELECT tname FROM wrkteam WHERE t_id=:tid";  
  $stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid));
$result=$stmt1->fetch();
$tname = $result['tname'];
?>
<div class="label" id="msgwrk">You are in team:&nbsp;&nbsp;<span class="tnote"><?php echo $tname ?></span></div>
<?php } ?>
<div id="wcreateteam">
<button id="wplus" class="plus">+</button>
<form id="teamworkshops" method="post">
    <div id="wtxtsub" name="wtxtsub">
<input type="text" id="wtname" name="wtname" class="txtinp" placeholder="Enter team name" /><br/>
<input type="text" id="wemate1" name="wemate1" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr1" class=""></div><br/>
<input type="text" id="wemate2" name="wemate2" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr2" class=""></div><br/>
<input type="text" id="wemate3" name="wemate3" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr3" class=""></div><br/>
<input type="text" id="wemate4" name="wemate4" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr4" class=""></div><br/>
<input type="text" id="wemate5" name="wemate5" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr5" class=""></div><br/>
<input type="text" id="wemate6" name="wemate6" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr6" class=""></div><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk" name="submittmwrk" class="bttn" />
</div>
</form>
<div id="wtnmshow"></div>
</div>
</div>
<!--team wrkshop regs begin-->
</div>
</div>

</div>
</div>

<!--footer in this file has different position property-->	
		<div>
	
<style>
footer{
	
	position:absolute;
	top:2600px;
	left:0%;
	right:0%;
	font-size:15px;
	text-align:center;
	color:#fff;
	/*margin-bottom:2%;*/
	opacity:0.7;
	z-index:-1;
}

footer hr{
	width:97%;
	position:relative;
	left:17px;
	
}
.clrch:hover{
color:#19f6e8;
}
#socialicon{
	/*padding-left:5%;*/
/*padding-right:20px;*/
margin-bottom:5px;
}

</style>

<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

<footer>
<hr/>
	<div class="footer">
		<div class="row">
			<div id="socialicon" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<img src="/images/twitter.svg" />
					<img src="/images/youtube.svg"/>
					<img src="/images/insta.svg"/>
					<div style="padding-bottom:-40px;" class="fb-like" data-href="https://www.facebook.com/gyanith.nitpy/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clrch">
					MADE WITH <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> BY WEB TEAM NITPY
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
		</div>
	</div>
</footer>


		</div>


		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		

</body>
</html>