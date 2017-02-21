<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  		
    <title>Gyanith '17 | Dashboard</title>
    
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
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
<option value="" disabled selected  style="width:100%">Select events</option>
<option value="dbugcbug"  style="width:100%">D-Bug C-Bug</option>
<option value="weblicate"  style="width:100%">Weblicate</option>
<option value="enigma"  style="width:100%">Enigma</option>
<option value="antagon"  style="width:100%">Antagon</option>
<option value="sync"  style="width:100%">SYNC</option>
<option value="linkit"  style="width:100%">Linkit</option>
<option value="rush_hour"  style="width:100%">Rush Hour</option>
<option value="deadshot"  style="width:100%">DeadShot</option>
<option value="burnout"  style="width:100%">Burn out</option>
<option value="copterx"  style="width:100%">CopterX</option>
<option value="speculate"  style="width:100%">Speculate</option>
<option value="techpursuit"  style="width:100%">TechPursuit</option>
<option value="detonatex"  style="width:100%">Detonatex</option>
<option value="consilium"  style="width:100%">Consilium</option>
<option value="ityuktha"  style="width:100%">Ityuktha</option>
<option value="prastuti"  style="width:100%">Prastuti</option>
<option value="cobweb"  style="width:100%">Cobweb</option>
<option value="buzzitup"  style="width:100%">Buzz It Up</option>
</select>

<br/>
<input type="text" id="anttxt" name='anttxt' class="txtinp" placeholder="Enter CodeChef Username" title="Refer Website for more details"/><br/>
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
if($result['deadshot']=='1')
{	echo '<div class="tnote">DeadShot</div>';$test=1;}
if($result['burnout']=='1')
{	echo '<div class="tnote">Burnout</div>';$test=1;}
if($result['copterx']=='1')
{	echo '<div class="tnote">Copterx</div>';$test=1;}
if($result['speculate']=='1')
{	echo '<div class="tnote">Speculate</div>';$test=1;}
if($result['techpursuit']=='1')
{	echo '<div class="tnote">Techpursuit</div>';$test=1;}
if($result['detonatex']=='1')
{	echo '<div class="tnote">Detonatex</div>';$test=1;}
if($result['consilium']=='1')
{	echo '<div class="tnote">Consilium</div>';$test=1;}
if($result['ityuktha']=='1')
{	echo '<div class="tnote">Ityuktha</div>';$test=1;}
if($result['prastuti']=='1')
{	echo '<div class="tnote">Prastuti</div>';$test=1;}
if($result['cobweb']=='1')
{	echo '<div class="tnote">CobWeb</div>';$test=1;}
if($result['buzzitup']=='1')
{	echo '<div class="tnote">Buzz It Up</div>';$test=1;}
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
<div style="">For any queries: Chanthiraprabhu - +91 9486850501 workshops@gyanith.org</div> <br/>
<form id="dropworkshops" method="post"><!-- action="dbworkshops.php">-->
<div id="alertwrk"></div>
<div class="label">Workshops</div>
<select name="workshops" id="workshops" class="selectdrp">
<option value="" disabled selected  style="width:100%">Select workshops</option>
<!--<option value="game"  style="width:100%">Game Development Using VR</option>-->
<option value="plugdin"  style="width:100%"> Get Plugdin - jQuery Workshop</option>
<option value="control"  style="width:100%">Take Control - Swarm Robotics</option>
<!--<option value="renewate"  style="width:100%">Solar Smart Energy System</option>-->
<!--<option value="crabot"  style="width:100%">Crabot</option>-->
<option value="take"  style="width:100%"> Take Off - RC Plane Designing</option>
</select>
<br/>
<select name="pay" id="pay" class="selectdrp">
<option value="" disabled selected  style="width:100%">Select your Payment method</option>
<option value="SBI COLLECT"  style="width:100%">SBICollect</option>
<option value="DD"  style="width:100%">DD</option>
<option value="NEFT"  style="width:100%">NEFT</option>
<option value="NET BANKING"  style="width:100%">Internet banking</option>
</select>
<br/>
<input type="text" id="sbitxt" name='sbitxt' class="txtinp" placeholder="Enter DD/UTR/NET banking Reference number" title="Make payment to get Reference number. Refer workshop page for payment details." style="background:rgba(255,255,255,0.5);"/><br/>
<select id="teamdd" name="teamdd" class="selectdrp">
		<option value="" disabled selected  style="width:100%">Select your team for this Workshop</option>
		<?php 
				$sql="select t_id1 from workshops where g_id=:gid";
				$stmt1 = $db->prepare($sql);
				$stmt1->execute(array(':gid'=>$g_id));
				$result=$stmt1->fetch();
				$tid1 = $result['t_id1'];

				if($tid1!=null){
					$sql="select tname from wrkteam where t_id=:tid";
					$stmt1 = $db->prepare($sql);
					$stmt1->execute(array(':tid'=>$tid1));
					$result=$stmt1->fetch();
					$tnm1 = $result['tname'];
		?>

		<option value=<?php echo $tid1 ?> style="width:100%"> <?php echo $tnm1 ?> </option>

		<?php 
		}

		$sql="select t_id2 from workshops where g_id=:gid";
		$stmt1 = $db->prepare($sql);
		$stmt1->execute(array(':gid'=>$g_id));
		$result=$stmt1->fetch();
		$tid2 = $result['t_id2'];

		if($tid2!=null){
			$sql="select tname from wrkteam where t_id=:tid";
			$stmt1 = $db->prepare($sql);
			$stmt1->execute(array(':tid'=>$tid2));
			$result=$stmt1->fetch();
			$tnm2 = $result['tname'];
			?>

		<option value=<?php echo $tid2 ?> style="width:100%"> <?php echo $tnm2 ?> </option>

		<?php 
		}

		$sql="select t_id3 from workshops where g_id=:gid";
		$stmt1 = $db->prepare($sql);
		$stmt1->execute(array(':gid'=>$g_id));
		$result=$stmt1->fetch();
		$tid3 = $result['t_id3'];

		if($tid3!=null){
			$sql="select tname from wrkteam where t_id=:tid";
			$stmt1 = $db->prepare($sql);
			$stmt1->execute(array(':tid'=>$tid3));
			$result=$stmt1->fetch();
			$tnm3 = $result['tname'];
			?>

		<option value=<?php echo $tid3 ?> style="width:100%"> <?php echo $tnm3 ?> </option>

		<?php 
		}
	?>
</select>
<br/>
<div id='alertwrkteam'></div><br/>
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
{	echo '<div class="tnote">Solar Smart Energy System</div>';$wtest=1;}
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
<div id="teamwrk">
<div class="label" style="text-align:center;">Teams for Workshops</div>
<!--team 1 div begin-->
<div class='boxsh'>

<?php
$sql="SELECT t_id1 FROM workshops WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid1 = $result['t_id1'];
if($tid1==null){
?>
<div id="wcreateteam1">
<button id="wplus1" class="plus">+</button>
<form id="teamworkshops1" method="post">
    <div id="wtxtsub1" name="wtxtsub1">
<input type="text" id="wtname1" name="wtname1" class="txtinp" placeholder="Enter team name" /><br/>
<div id="wtnm1" class=""></div><br/>
<input type="text" id="wemate11" name="wemate11" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr11" class=""></div><br/>
<input type="text" id="wemate12" name="wemate12" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr12" class=""></div><br/>
<input type="text" id="wemate13" name="wemate13" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr13" class=""></div><br/>
<input type="text" id="wemate14" name="wemate14" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr14" class=""></div><br/>
<input type="text" id="wemate15" name="wemate15" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr15" class=""></div><br/>
<input type="text" id="wemate16" name="wemate16" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr16" class=""></div><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk1" name="submittmwrk1" class="bttn" />
</div>
</form>
<div id="wtnmshow1"></div>
</div>
<?php
 }
 else{
  $sql="SELECT tname FROM wrkteam WHERE t_id=:tid";  
  $stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid1));
$result=$stmt1->fetch();
$tname1 = $result['tname'];
?>
<div class="label" id="msgwrk">You are in team:&nbsp;&nbsp;<span class="tnote"><?php echo $tname1 ?></span></div>
<?php } ?>
</div>
<!--team 1 div end-->
<br/>
<!--team 2 div begin-->
<div class='boxsh'>

<?php
$sql="SELECT t_id2 FROM workshops WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid2 = $result['t_id2'];
if($tid2==null){
?>
<div id="wcreateteam2">
<button id="wplus2" class="plus">+</button>
<form id="teamworkshops2" method="post">
    <div id="wtxtsub2" name="wtxtsub2">
<input type="text" id="wtname2" name="wtname2" class="txtinp" placeholder="Enter team name" /><br/>
<div id="wtnm2" class=""></div><br/>
<input type="text" id="wemate21" name="wemate21" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr21" class=""></div><br/>
<input type="text" id="wemate22" name="wemate22" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr22" class=""></div><br/>
<input type="text" id="wemate23" name="wemate23" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr23" class=""></div><br/>
<input type="text" id="wemate24" name="wemate24" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr24" class=""></div><br/>
<input type="text" id="wemate25" name="wemate25" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr25" class=""></div><br/>
<input type="text" id="wemate26" name="wemate26" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr26" class=""></div><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk2" name="submittmwrk2" class="bttn" />
</div>
</form>
<div id="wtnmshow2"></div>
</div>
<?php
 }
 else{
  $sql="SELECT tname FROM wrkteam WHERE t_id=:tid";  
  $stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid2));
$result=$stmt1->fetch();
$tname2 = $result['tname'];
?>
<div class="label" id="msgwrk">You are in team:&nbsp;&nbsp;<span class="tnote"><?php echo $tname2 ?></span></div>
<?php } ?>
</div>
<!--team 2 div end-->
<br/>
<!--team 3 div begin-->
<div class='boxsh'>
<?php
$sql="SELECT t_id3 FROM workshops WHERE g_id=:gid";
$stmt1 = $db->prepare($sql);
$stmt1->execute(array(':gid'=>$g_id));
$result=$stmt1->fetch();
$tid3 = $result['t_id3'];
if($tid3==null){
?>
<div id="wcreateteam3">
<button id="wplus3" class="plus">+</button>
<form id="teamworkshops3" method="post">
    <div id="wtxtsub3" name="wtxtsub3">
<input type="text" id="wtname3" name="wtname3" class="txtinp" placeholder="Enter team name" /><br/>
<div id="wtnm3" class=""></div><br/>
<input type="text" id="wemate31" name="wemate31" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr31" class=""></div><br/>
<input type="text" id="wemate32" name="wemate32" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr32" class=""></div><br/>
<input type="text" id="wemate33" name="wemate33" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr33" class=""></div><br/>
<input type="text" id="wemate34" name="wemate34" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr34" class=""></div><br/>
<input type="text" id="wemate35" name="wemate35" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr35" class=""></div><br/>
<input type="text" id="wemate36" name="wemate36" class="txtinp" placeholder="Enter team Member GY-ID"/><br/>
<div id="wterr36" class=""></div><br/>
<div class="label">Refer Workshop details for number of members in team</div>
<input type="submit" id="submittmwrk3" name="submittmwrk3" class="bttn" />
</div>
</form>
<div id="wtnmshow3"></div>
</div>
<?php
 }
 else{
  $sql="SELECT tname FROM wrkteam WHERE t_id=:tid";  
  $stmt1 = $db->prepare($sql);
$stmt1->execute(array(':tid'=>$tid3));
$result=$stmt1->fetch();
$tname3 = $result['tname'];
?>
<div class="label" id="msgwrk">You are in team:&nbsp;&nbsp;<span class="tnote"><?php echo $tname3 ?></span></div>
<?php } ?>
</div>
<!--team 3 div end-->

</div>

<!--team for workshops end-->




</div>
</div>

</div>
</div>


<!--footer start-->

<script type="text/javascript" src="js/snap.svg-min.js"></script>

<style>
footer{
	position:absolute;
	top:2700px;
	left:0%;
	right:0%;
	font-size:15px;
	text-align:center;
	color:#fff;
	/*margin-bottom:2%;*/
	opacity:0.7;
	z-index:50;
}

footer hr{
	width:97%;
	position:relative;
	left:17px;
	
	
}
.foot-btn{
height:25px;
width:30px;
opacity: 1;
}
.clrch:hover{
color:#19f6e8;
}
#socialicon{
	padding-left:5%;
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
			<div id="socialicon" class="col-md-3">   <!-- col-lg-3 col-sm-3 col-xs-3">-->
					<a href="https://twitter.com/nitpygyanith" target="_blank"><button style="background-color: transparent;border:none;"  class="foot-btn button button--line button--effect-1">
							<span class="twitter-shape" data-morph-active="M361.5,118.5c-24-6.5-29.314-6.731-42.264-5.184c13.216-7.922,23.365-20.466,28.146-35.414
		c-12.37,7.336-26.067,12.663-40.647,15.533c-11.676-12.44-28.313-20.213-46.725-20.213c-35.35,0-64.009,28.658-64.009,64.008
		c0,5.017,0.566,9.902,1.657,14.587C144.459,149.147,104.571,100.727,73,62c-5.51,9.454-7,31.269-7,43
		c0,22.208,16.324,51.522,33.5,63c-10.493-0.333-27.5-2.5-39.5-26c-0.006,0.267,0-0.27,0,0c0,31.014,18.597,78.079,47.88,83.961
		C97.315,225.674,92,224.5,92,224.5c-10-1.666-15.591-7.75-19.5-8.5c8.146,25.43,38.258,54.995,66.268,55.51
		c-21.907,17.172-49.507,27.402-79.498,27.402c-5.167,0-10.262-0.303-15.27-0.896C72.327,316.18,111.852,332,148,332
		c117.739,0,182.5-66.5,176.245-187.348c-0.144-2.771-0.063-5.536-0.187-8.282C336.566,127.347,344,122.25,361.5,118.5z">
								<svg width="100%" height="100%" viewBox="0 0 400 400" preserveAspectRatio="none">
									<path fill="#7AA7D9" d="M356.001,103.237c-11.48,5.091-23.815,8.532-36.764,10.079c13.215-7.922,23.364-20.466,28.145-35.414
		c-12.37,7.336-26.067,12.663-40.648,15.533c-11.675-12.44-28.312-20.213-46.724-20.213c-35.35,0-64.009,28.658-64.009,64.008
		c0,5.017,0.566,9.902,1.657,14.587c-53.199-2.67-100.365-28.153-131.936-66.88c-5.51,9.454-8.667,20.449-8.667,32.18
		c0,22.208,11.3,41.801,28.476,53.279c-10.493-0.333-20.363-3.212-28.992-8.006c-0.006,0.267-0.006,0.535-0.006,0.805
		c0,31.014,22.064,56.884,51.347,62.766c-5.371,1.462-11.026,2.247-16.864,2.247c-4.125,0-8.134-0.402-12.043-1.151
		c8.146,25.43,31.785,43.938,59.795,44.453c-21.907,17.171-49.507,27.402-79.498,27.402c-5.167,0-10.262-0.302-15.27-0.896
		c28.327,18.164,61.974,28.761,98.122,28.761c117.739,0,182.123-97.538,182.123-182.125c0-2.775-0.063-5.536-0.186-8.282
		C336.567,127.347,347.42,116.073,356.001,103.237z"
	/>
								</svg>
							</span>
						</button></a>
					<a href=""><button style="background-color: transparent;border:none;"  class="foot-btn button button--line button--effect-1">
							<span class="twitter-shape" data-morph-active="M373.708,170.887c-0.127-6.987-0.681-15.82-1.646-26.492c-0.975-10.678-2.364-20.221-4.176-28.629
		c-2.07-9.445-6.566-17.404-13.488-23.873c-6.922-6.472-14.977-10.222-24.166-11.259C301.505,77.401,258.095,65.5,200,65.5
		S98.495,77.401,69.769,80.634c-9.188,1.036-17.211,4.788-24.067,11.259c-6.858,6.467-11.322,14.426-13.394,23.873
		c-1.938,8.411-3.396,17.954-4.366,28.629c-0.969,10.672-1.52,19.502-1.648,26.492c-0.131,6.987-0.195,16.69-0.195,29.113
		c0,12.421,0.064,22.127,0.196,29.113c0.128,6.99,0.679,15.818,1.647,26.49c0.971,10.679,2.362,20.222,4.174,28.631
		c2.07,9.447,6.565,17.406,13.488,23.873c6.924,6.469,14.98,10.221,24.166,11.258C98.495,322.6,141.903,333.5,200.001,333.5
		c58.101,0,101.504-10.899,130.231-14.135c9.189-1.036,17.209-4.789,24.068-11.258c6.858-6.469,11.321-14.43,13.391-23.873
		c1.939-8.409,3.396-17.952,4.371-28.631c0.967-10.67,1.517-19.504,1.646-26.49c0.129-6.985,0.194-16.691,0.194-29.113
		S373.839,177.874,373.708,170.887z M268.709,210.48l-99.373,62.105c-1.812,1.295-4.014,1.941-6.601,1.941
		c-1.939,0-3.945-0.521-6.015-1.555c-4.269-2.328-6.402-5.951-6.402-10.867v-124.21c0-4.915,2.134-8.539,6.402-10.868
		c4.401-2.332,8.604-2.202,12.616,0.388l99.373,62.106c3.881,2.196,5.82,5.692,5.82,10.479S272.587,208.284,268.709,210.48z">
								<svg width="100%" height="100%" viewBox="0 0 400 400" preserveAspectRatio="none">
									<path fill="#7AA7D9" d="M373.708,170.887c-0.127-6.987-0.68-15.82-1.646-26.492c-0.974-10.678-2.364-20.221-4.175-28.629
		c-2.07-9.445-6.567-17.404-13.488-23.873c-6.922-6.472-14.977-10.222-24.167-11.259c-28.727-3.233-72.137-4.851-130.231-4.851
		c-58.095,0-101.506,1.618-130.232,4.851c-9.188,1.036-17.211,4.788-24.067,11.259c-6.858,6.467-11.322,14.426-13.394,23.873
		c-1.938,8.411-3.396,17.954-4.366,28.629c-0.969,10.672-1.52,19.502-1.648,26.492c-0.131,6.987-0.195,16.69-0.195,29.113
		c0,12.421,0.064,22.127,0.196,29.113c0.128,6.991,0.679,15.819,1.647,26.491c0.971,10.678,2.362,20.221,4.174,28.631
		c2.07,9.447,6.565,17.405,13.488,23.872c6.924,6.469,14.98,10.221,24.166,11.258c28.725,3.235,72.133,4.852,130.231,4.852
		c58.1,0,101.504-1.616,130.231-4.852c9.19-1.036,17.21-4.789,24.069-11.258c6.858-6.469,11.321-14.429,13.39-23.872
		c1.94-8.41,3.397-17.953,4.371-28.631c0.967-10.67,1.517-19.505,1.646-26.491c0.129-6.985,0.194-16.691,0.194-29.113
		C373.902,187.578,373.839,177.874,373.708,170.887z M268.709,210.481l-99.373,62.105c-1.812,1.295-4.014,1.942-6.601,1.942
		c-1.939,0-3.945-0.521-6.015-1.555c-4.269-2.328-6.402-5.952-6.402-10.868V137.895c0-4.915,2.134-8.539,6.402-10.868
		c4.401-2.332,8.604-2.202,12.616,0.388l99.373,62.106c3.881,2.196,5.82,5.692,5.82,10.479
		C274.529,204.787,272.587,208.284,268.709,210.481z"
	/>
								</svg>
							</span>
						</button></a>
					<a href="https://www.instagram.com/nitpygyanith/" target="_blank">			<button style="background-color: transparent;border:none;"  class="foot-btn button button--line button--effect-1">
							<span class="twitter-shape" data-morph-active="M367.384,32.065c-9.114-9.118-20.039-13.676-32.768-13.676H65.389c-12.73,0-23.652,4.559-32.77,13.676
		c-9.117,9.115-13.674,20.038-13.674,32.766v269.224c0,12.729,4.557,23.653,13.674,32.768c9.118,9.115,20.042,13.678,32.77,13.678
		h269.224c12.725,0,23.652-4.56,32.768-13.678c9.12-9.113,13.673-20.039,13.673-32.768V64.831
		C381.052,52.1,376.501,41.183,367.384,32.065z M148.965,148.875c14.222-13.75,31.315-20.628,51.274-20.628
		c20.113,0,37.284,6.878,51.509,20.628c14.228,13.753,21.336,30.375,21.336,49.862c0,19.483-7.108,36.11-21.336,49.855
		c-14.225,13.757-31.388,20.634-51.509,20.634c-19.959,0-37.05-6.883-51.274-20.634c-14.225-13.747-21.337-30.372-21.337-49.855
		C127.628,179.25,134.739,162.628,148.965,148.875z M340.04,324.393c0,4.084-1.418,7.502-4.246,10.254
		c-2.833,2.749-6.207,4.125-10.142,4.125H73.641c-4.085,0-7.507-1.376-10.254-4.125c-2.753-2.747-4.127-6.17-4.127-10.254V171.624
		H92.5c-3.142,9.902-4.713,20.199-4.713,30.883c0,30.183,11.001,55.915,33.003,77.216c22.005,21.291,48.488,31.942,79.449,31.942
		c20.432,0,39.29-4.873,56.583-14.617c17.289-9.748,30.954-22.985,41.019-39.727c10.06-16.738,15.091-35.01,15.091-54.811
		c0-10.686-1.577-20.979-4.719-30.885h31.828v152.769l0,0V324.393L340.04,324.393z M340.04,113.866
		c0,4.557-1.571,8.408-4.719,11.552c-3.143,3.145-6.993,4.716-11.553,4.716H282.75c-4.555,0-8.411-1.571-11.552-4.716
		c-3.143-3.144-4.714-6.995-4.714-11.552V74.97c0-4.401,1.571-8.212,4.714-11.435c3.141-3.221,6.997-4.833,11.552-4.833h41.019
		c4.56,0,8.41,1.612,11.553,4.833c3.147,3.222,4.719,7.034,4.719,11.435V113.866z">
								<svg width="100%" height="100%" viewBox="0 0 400 400" preserveAspectRatio="none">
									<path fill="#7AA7D9" d="M342.012,57.992c-7.732-7.736-17.002-11.603-27.801-11.603H85.794c-10.801,0-20.067,3.868-27.803,11.603
		c-7.735,7.733-11.601,17-11.601,27.799v228.414c0,10.799,3.866,20.068,11.601,27.801c7.736,7.734,17.004,11.604,27.803,11.604
		h228.414c10.796,0,20.067-3.869,27.801-11.604c7.737-7.731,11.601-17.002,11.601-27.801V85.791
		C353.607,74.99,349.746,65.728,342.012,57.992z M156.701,157.095c12.066-11.666,26.568-17.501,43.502-17.501
		c17.064,0,31.632,5.835,43.701,17.501c12.07,11.668,18.102,25.771,18.102,42.304c0,16.531-6.031,30.636-18.102,42.298
		c-12.069,11.672-26.631,17.506-43.701,17.506c-16.934,0-31.434-5.84-43.502-17.506c-12.069-11.664-18.103-25.768-18.103-42.298
		C138.598,182.866,144.631,168.764,156.701,157.095z M318.813,306.008c0,3.465-1.203,6.365-3.603,8.699
		c-2.403,2.332-5.267,3.5-8.604,3.5H92.795c-3.466,0-6.369-1.168-8.7-3.5c-2.335-2.33-3.501-5.234-3.501-8.699V176.396h28.201
		c-2.666,8.401-3.999,17.137-3.999,26.202c0,25.607,9.333,47.439,28,65.512c18.67,18.063,41.138,27.101,67.406,27.101
		c17.334,0,33.334-4.135,48.006-12.401c14.668-8.271,26.263-19.502,34.801-33.705c8.535-14.201,12.804-29.703,12.804-46.502
		c0-9.066-1.338-17.8-4.004-26.204h27.004V306.01l0,0V306.008L318.813,306.008z M318.813,127.393c0,3.867-1.334,7.134-4.004,9.801
		c-2.666,2.668-5.933,4.001-9.801,4.001h-34.801c-3.865,0-7.137-1.333-9.801-4.001c-2.667-2.667-4-5.934-4-9.801v-33
		c0-3.734,1.333-6.967,4-9.701c2.664-2.733,5.936-4.101,9.801-4.101h34.801c3.868,0,7.135,1.368,9.801,4.101
		c2.67,2.734,4.004,5.967,4.004,9.701V127.393z"
	/>
								</svg>
							</span>
						</button></a>
					<div class="fb-like" style="position:relative;top:2px;" data-href="https://www.facebook.com/gyanith.nitpy/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
			</div>
			<div class="col-md-5 clrch" style="padding-left:12%;"><!-- col-md-4 col-sm-4 col-xs-4 ">-->
					MADE WITH <i class="fa fa-heart" aria-hidden="true" style="color:red;"></i> BY WEB TEAM NITPY
			</div>

			
			<div class="col-md-4"><!--" col-lg-3 col-sm-3 col-xs-3">-->
			<a href="/reach.php"><span style="color:pink">How to reach us</span></a>&nbsp&nbsp&nbsp
			queries@gyanith.org &nbsp&nbsp&nbsp+91 70942 50770
			
			</div>
		</div>
	</div>
</footer>

<script>
			(function() {

				function extend( a, b ) {
					for( var key in b ) { 
						if( b.hasOwnProperty( key ) ) {
							a[key] = b[key];
						}
					}
					return a;
				}
				
				function SVGButton( el, options ) {
					this.el = el;
					this.options = extend( {}, this.options );
					extend( this.options, options );
					this.init();
				}

				SVGButton.prototype.options = {
					speed : { reset : 800, active : 150 },
					easing : { reset : mina.elastic, active : mina.easein }
				};

				SVGButton.prototype.init = function() {
					this.shapeEl = this.el.querySelector( 'span.twitter-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						active : this.shapeEl.getAttribute( 'data-morph-active' )
					};

					this.initEvents();
				};

				SVGButton.prototype.initEvents = function() {
					this.el.addEventListener( 'mouseover', this.down.bind(this) );
					this.el.addEventListener( 'touchstart', this.down.bind(this) );

					this.el.addEventListener( 'mouseup', this.up.bind(this) );
					this.el.addEventListener( 'touchend', this.up.bind(this) );

					this.el.addEventListener( 'mouseout', this.up.bind(this) );
				};

				SVGButton.prototype.down = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.active }, this.options.speed.active, this.options.easing.active );
				};

				SVGButton.prototype.up = function() {
					this.pathEl.stop().animate( { 'path' : this.paths.reset }, this.options.speed.reset, this.options.easing.reset );
				};

				[].slice.call( document.querySelectorAll( 'button.button--effect-1' ) ).forEach( function( el ) {
					new SVGButton( el );
				} );

				[].slice.call( document.querySelectorAll( 'button.button--effect-2' ) ).forEach( function( el ) {
					new SVGButton( el, {
						speed : { reset : 650, active : 650 },
						easing : { reset : mina.elastic, active : mina.elastic }
					} );
				} );

			})();			
		</script>

<!--footer end-->
		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		

</body>
</html>
