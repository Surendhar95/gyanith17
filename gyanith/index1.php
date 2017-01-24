<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gyanith 2k17</title>
  <meta name="description" content="Gyanith 2k17 is the first national level technical symposium held at Natioanl Institute of Technology , Puducherry called as NIT Puducherry.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta property="og:title" content="Gyanith 17" />
<meta property="og:description" content="Annual technical fest by NIT Puducherry" />
<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">

  <link rel="stylesheet" media="screen" href="css/style_slide_drop.css">
 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_menu.css" />
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_logo.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
		
	
      <script src="js/material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!--
  <link rel="stylesheet" type="text/css" href="css/style_index.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/material.min.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	 <script src="js/material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	-->
    <script>

  var colors = new Array(
  [24,10,92],
  [18,11,50],
  [43,40,57],
  [39,21,132],
  [5,1,27],
  [33,26,67]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.008;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
</script>
</head>
<body>
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
    stroke: 'rgb(255,255,255)',
    strokeWidth: { 6: 0 },
    angle: { 360: 0 },
    radius: { 30: 5 },
    duration: 5000
  }
});

var burst1 = new mojs.Burst({
  radius: { 0: 160 },
  count: 15,
  children: {
    shape: 'cross',
    stroke: 'rgb(255,255,255)',
    strokeWidth: { 6: 0 },
    angle: { '-360': 0 },
    radius: { 30: 5 },
    duration: 5000
  }
});

var burst2 = new mojs.Burst({
  radius: { 0: 300 },
  count: 12,
  children: {
    shape: 'zigzag',
    points: 7,
    stroke: { 'blue': 'rgb(240,200,200)' },
    fill: 'none',
    strokeWidth: { 6: 0 },
    angle: { '-360': 0 },
    radius: { 30: 5 },
    opacity: { 1: 0 },
    duration: 5000
  }
});
var burst6 = new mojs.Burst({
  radius: { 0: 270 },
  count: 13,
  children: {
    shape: 'zigzag',
    points: 7,
    stroke: { 'blue': 'rgb(240,200,200)' },
    fill: 'none',
    strokeWidth: { 6: 0 },
    angle: { '-360': 0 },
    radius: { 30: 5 },
    opacity: { 1: 0 },
    duration: 5000
  }
});

var burst4 = new mojs.Burst({
  radius: { 0: 250 },
  count: 12,
  children: {
    shape: 'zigzag',
    points: 5,
    stroke: { 'rgb(200,200,200)': 'rgb(255,250,250)' },
    fill: 'none',
    strokeWidth: { 6: 0 },
    angle: { '-360': 0 },
    radius: { 30: 5 },
    opacity: { 1: 0 },
    duration: 5000
  }
});


var burst3 = new mojs.Burst({
  radius: { 0: 200 },
  count: 9,
  children: {
    fill:'rgb(255,200,100)',
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
    fill:'rgb(193,193,255)',
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
  stroke: 'rgb(255,255,255 )',
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
}).add(burst,burst1, burst2, burst3,burst4,burst5,burst6, circ, circ2,circ3).play();
  </script>

  <!--<div class="contain"style="background:transparent;">-->
  <!--changd position property as absolute from relative-->
					<div style="position:absolute;top:0%;right:0%;">
					
					<div class="menuBackground">
					<div class="center">
					<ul class="dropDownMenu">
			
					<li><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">account_circle</i>
						
                    </button>
					<ul>
					<li><a href="log.php">Login</a></li>
					<li><a href="#">Schedule</a></li>
					</ul>
					</li>		
					</ul>
					</div>
				</div>
				 </div>	
						
	
			<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="#"><i class="fa fa-fw fa-star-o"></i><span>Events</span></a>
						<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Workshops</span></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Guest Lectures</span></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Non Technical</span></a>
						<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Hospitality</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Teams</span></a>
						<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>About Us</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button">Open Menu</button>
	<!--</div>-->
<!--image add begin-->
<div id="logo">
<img src="images/logo.svg"/>
</div>
<div id="hmenu">
<ul class="a">
<li><a href="#">Events</a></li>
<li><a href="#">Schedule</a></li>
<li><a href="#">Workshop</a></li>
</ul>
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