<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Gyanith '17  | Web Team</title>
  
  		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css"/>
  		<!--<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />-->
  		<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">

  		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
		<link rel="stylesheet" href="css/material.min.css">
		<link rel="stylesheet" type="text/css" href="css/style_click_drop.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  		<script type="text/javascript" src="js/snap.svg-min.js"></script>
  		<script type="text/javascript" src="js/events.js"></script>
		<script src="js/material.min.js"></script>
		<script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>


	</head>
  <style>
  html {
  	overflow-y: auto;
  }
	.thumbnail {
	background:rgba(255, 255, 255, 0.75);
    position:relative;
    overflow:hidden;
	-webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
 
.caption {
    
    background:rgba(25, 246, 232, 0);

    text-align:center;
    color:#000000;
    z-index:2;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.thumbnail:hover {
	background:rgba(25, 246, 232, 0.50);
	color: #fff;
    
}
.container-fluid {
	position: relative;
	top:-15%;
}
  </style>
  <body class="event-gradient" >
  <?php
    include 'loginicon.php';
    include("sidebar.php");
   ?>
    <header>
      <div class="title1 row">
        <h2><b>WEB TEAM</b></h2>
      </div>
    </header>
    <br><br><br><br><br><br>
<div class="container-fluid">
<div class="row-fluid" style="width:90%; padding-left: 150px; padding-top: 150px;">

	<div class="col-md-3 col-md-offset-2" style="position:relative;left:-5%;">
		<div class="team-col">
			<div class="team-pic" style="background-image: url('team/abhi.jpg')" >
			</div>
				
			<div class="caption">
				<p class="text-center">ABHIRAMI . A<br>BACK END DEVELOPER<br>+91-9445176716</p>
			</div>
				
		</div>
	</div>

		<div class="col-md-3 col-md-offset-2" style="position:relative;left:1%;">
		<div class="team-col">
			<div class="team-pic" style="background-image: url('team/smruti.jpg');" >
			</div>
				<div class="caption">
					<p class="text-center">SMRUTI SAGARIKA SWAIN
					<br>FRONT END DEVELOPER
					<br>smruti.avanti@gmail.com</p>
					</div>
			</div>
		</div>
		
	</div>
	</div>
<?php 
			include ('footer.php');
		?> 
		<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
			<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
</body>
	</html>
