<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="description" content="Gyanith '17 is the first ever single technical symposium of NIT Puducherry.">
  <meta name="author" content="Web Team,NIT Py" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Gyanith '17  | Feb 24-26</title>
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
  

  <!-- Facebook -->
 
  <meta property="fb:app_id"          content="108145976368443" /> 
  <meta property="og:type"            content="Website" /> 
  <meta property="og:url"             content="http://www.gyanith.org" /> 
  <meta property="og:title"           content="Gyanith '17 | NIT Puducherry" /> 
  <meta property="og:image"           content="https://www.dropbox.com/s/b567e31jytqaky8/gyanith_thumb.png?dl=0" /> 
  <meta property="og:description" content="Gyanith '17 is the first ever single technical symposium of NIT Puducherry." />
  <!-- Facebook tags end -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/material.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
  <link rel="stylesheet" type="text/css" href="css/style_click_drop.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" type="text/css" href="css/buttons.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
 <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/material.min.js"></script>
  <script type="text/javascript" src="js/background.js"></script>
  <script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>
  <script type="text/javascript" src="noty-2.4.0/js/noty/packaged/jquery.noty.packaged.js"></script>
  <script type="text/javascript" src="js/notification.js"></script>
<!--cobweb -->
<style>
#cobweb1{
float:right;
	position: absolute;
	top:2%;
	left: 28%;
	font-size: 16px; 
}

#cobweb1 {
	color:#fff;
	cursor:pointer;
	
}
#cobweb1 a:hover{
	color:#19f6e8;
}
#antagon1 a{

	position: absolute;
	top:5%;
	left: 28%;
	font-size: 18px; 
	text-decoration:none;
}

#antagon1 a {
	color:#fff;
	cursor:pointer;
	
}
#antagon1 a:hover{
	color:#19f6e8;
}
</style>

<script>
function blinker() {
	$('.blinking').fadeOut(500);
	$('.blinking').fadeIn(500);
}
setInterval(blinker, 800);

$(document).ready(
function(){
$( "#cobweblink" ).click(function() {
  $( "#cobwebform" ).submit();
});
});
</script>

<!--cobweb -->
</head>

<body>
		
		<?php include 'loginicon.php';?>
		<?php include "sidebar.php";?>
		<?php include "preloader.php" ?>
		
		
		<div id="gradient" />
		<script src='https://cdn.jsdelivr.net/mojs/0.265.6/mo.min.js'></script>
		<script type="text/javascript">
			$(window).on('load',function(){
				$('.preloader').hide();
			});


		</script>
	<!--	<script>
			'use strict';

		var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

		var burst = new mojs.Burst({
		  radius: { 0: 140 },
		  count: 20,
		  children: {
			shape: 'cross',
			stroke: '#ffffff',
			strokeWidth: { 6: 0 },
			angle: { 360: 0 },
		  opacity: { 1: 0 },
			radius: { 30: 5 },
			duration: 5000
		  }
		});

		var burst1 = new mojs.Burst({
		  radius: { 0: 160 },
		  count: 15,
		  children: {
			shape: 'cross',
			stroke: '#ffffff',
		  opacity: { 1: 0 },
			strokeWidth: { 6: 0 },
			angle: { '-360': 0 },
			radius: { 30: 5 },
			duration: 5000
		  }
		});
		var burst3 = new mojs.Burst({
		  radius: { 0: 200 },
		  count: 9,
		  children: {
			fill:'#ffffff',/*rgb(255,200,100)*/
			points: 7,
			angle: { '-360': 0 },
			radius: { 10: 5 },
			opacity: { 1: 0 },
			duration: 4000
		  }
		});

		var burst5 = new mojs.Burst({
		  radius: { 0: 230 },
		  count: 20,
		  children: {
			fill:'#ffffff',/*rgb(193,193,255)*/
			points: 7,
			angle: { '-360': 0 },
			radius: { 9: 6 },
			opacity: { 1: 0 },
			duration: 4200
		  }
		});

		var circ_opt = {
		  radius: { 0: 220 },
		  fill: 'none',
		  stroke: '#ffffff',/*rgb(255,255,255 )*/
		  opacity: { 1: 0 },
		  duration: 4500
		};

		var circ = new mojs.Shape(_extends({}, circ_opt));

		var circ2 = new mojs.Shape(_extends({}, circ_opt, {
		  delay: 500
		}));
		var circ2 = new mojs.Shape(_extends({}, circ_opt, {
		  delay: 200
		}));
		var circ3 = new mojs.Shape(_extends({}, circ_opt, {
		  delay: 100
		}));

		var timeline = new mojs.Timeline({
		  repeat: 999
		}).add(burst,burst1, burst3,burst5,circ, circ2,circ3).play();


		  </script>-->
		<!--	<div id="ongc">
					<img src="images/ongc-big.jpg" style="height:70px;width:70px;"/><br/>
				 	
			</div>	
		-->
			
	<div id="payment">
		<a href="pdf/bus.pdf" target="_blank"><h4 style="color: white">Bus Schedule at NITPy</h4></a>
		</div>
		<div id="antagon1">
			<a href="https://www.codechef.com/ATGN2017" target="_blank">Link to Antagon</a>
		</div>
	<!-- <div id="cobweb1"> -->
		<!-- <?php //if(isset($_SESSION['cobweb'])){ ?>
		<br/>
			<form action="http://cobweb-knosys16.rhcloud.com" method="post" id="cobwebform" target="_blank">
			<input type="hidden" name="g_id" value=<?php //echo $_SESSION['g_id']; ?>>
			<input type="hidden" name="name" value=<?php// echo $_SESSION['name'];?>>
			<span class="blinking" id="cobweblink">Link to CobWeb</span>
			</form>
		<?php //} ?> -->
	<!-- 	</div>
 -->
		<div id="logo">
			<img src="images/logo.svg"/>
		</div>
		<div class="hover-menu"  style="text-align:center;">
				<div class="row">
						<div class="col-sm-1 col-md-1 col-lg-1">
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
						<div class="svg-wrapper">
						  <a href="events.php"> <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">EVENTS</div>
						  </svg></a>
						</div>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1">
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
						<div class="svg-wrapper">
						  <a href="workshops.php"><svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">WORKSHOPS</div>
						  </svg></a>
						</div>
						</div>

						<div class="col-sm-2 col-md-2 col-lg-2" >
						<div class="svg-wrapper">
						<a href="gallery.php">
						 <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">GALLERY</div>
						  </svg></a>
						</div>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
						</div>
				</div>
				<div class="row">
						<div class="col-sm-1 col-md-1 col-lg-1">
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
						<div class="svg-wrapper">
						  <a href="paper.php"> <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">PAPER</div>
						  </svg></a>
						</div>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1">
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
						<div class="svg-wrapper">
						  <a href="nontech.php"><svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">BAZINGA</div>
						  </svg></a>
						</div>
						</div>

						<div class="col-sm-2 col-md-2 col-lg-2" >
						<div class="svg-wrapper">
						<a href="expo.php">
						 <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">PROJECT EXPO</div>
						  </svg></a>
						</div>
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
						</div>
				</div>
						

		</div>

		
		<?php include("footer.php"); ?>
		<div id="particles-js"></div>
		<script src="js/particles.js"></script>
		<script src="js/app.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>


</body>
</html>