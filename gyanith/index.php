<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="description" content="Gyanith '17 is the first ever single technical symposium of NIT Puducherry.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta property="og:title" content="Gyanith '17" />
  <meta property="og:description" content="Gyanith '17 is the first ever single technical symposium of NIT Puducherry." />
  
  <title>Gyanith '17  | Feb 24-26</title>
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/material.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
  <link rel="stylesheet" type="text/css" href="css/style_click_drop.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
 
 <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/material.min.js"></script>
  <script type="text/javascript" src="js/background.js"></script>
  <script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>
  
</head>

<body>
		<?php include 'loginicon.php';?>
		<?php include "sidebar.php";?>
		
		<div id="gradient" />
		<script src='https://cdn.jsdelivr.net/mojs/0.265.6/mo.min.js'></script>

		<script>
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
		  </script>
		<!--image add begin-->
		<div id="logo">
			<img src="images/logo.svg"/>
		</div>
		<div class="hover-menu"  style="text-align:center;">
				<div class="row">
						<div class="col-sm-2 col-md-2 col-lg-2">
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2">
						<div class="svg-wrapper">
						  <a href="events.php"> <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">EVENTS</div>
						  </svg></a>
						</div>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="svg-wrapper">
						  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">WORKSHOPS</div>
						  </svg>
						</div>
						</div>

						<div class="col-sm-2 col-md-2 col-lg-2" style="position: relative;left:-60px">
						<div class="svg-wrapper">
						  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
							<rect class="shape" height="60" width="320" />
							<div class="text">GUEST TALKS</div>
						  </svg>
						</div>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1">
						</div>
				</div>
		</div>

		<!--image add end-->
		<!-- particles.js container -->
		
		<div id="particles-js"></div>

		<!-- scripts -->
		<script src="js/particles.js"></script>
		<script src="js/app.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>


</body>
</html>