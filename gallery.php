<!doctype html>
<html>
<head>
	<title>Gyanith '17  | GALLERY</title>
	<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_click_drop.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/material.min.js"></script>
	<script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>

<style type="text/css">	
	p,h1,a{
		font-family: 'Droid Sans', sans-serif;

	}
html {  
    background: #a9e4f7; /* Old browsers */
    background-color:#222222;
    filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#222222, endColorstr=#00ACE9);
    background-image:-moz-linear-gradient(top, #222222 0%, #00ACE9 50%,#222222 100%);
    background-image:linear-gradient(top, #222222 0%, #00ACE9 50%,#222222 100%);
    background-image:-webkit-linear-gradient(top, #222222 0%, #00ACE9 50%,#222222 100%);
    background-image:-o-linear-gradient(top, #222222 0%, #00ACE9 50%,#222222 100%);
    background-image:-ms-linear-gradient(top, #222222 0%, #00ACE9 50%,#222222 100%);
    background-attachment: fixed;
}

div{
	background:transparent;
}
body {
	color:white;
  margin-top: 0px;
  margin-bottom: 0px;
  background:transparent;
}


.row{
	/*border-width: 5px;
	margin-left: 20px;
	margin-right: 30px;
	border-color: #ffffff;*/
	background:transparent;
	background-color:transparent;
}

#logo{
	
    padding: 20px; 
    width: 85%;
    height: 120px; 
    margin-left: 7%;
    margin-right: 5%;
	background:transparent;
}
#content{
  margin-top:100px;
  padding: 30px 20px;
  border-radius:15px;
  width: 65%;
  height: 450px; 
  margin-left: 2%;
 
  font-size: 1.1em;
  background: #d9d9d9; /* Old browsers */
  background-color:rgba(217,217,217,0.4); 
  background-attachment: fixed;
 
  color: black;
  position: relative;
 
  margin-bottom:10px;
  border: 1px white solid;
  
  
}
p{
	text-align: justify;
  display: inline-block;
  vertical-align: middle;
   line-height:50px;
  font-size: 1.3em;
}

header{
	position:relative;
	top:2%;
	left:40%;
}
</style>

</head>
<body >
<?php
	include ('loginicon.php');
		include("sidebar.php");
	 ?>
	 <header>
			<div class="title1 row">
				<h2><b>GALLERY</b></h2>
			</div>
		</header>
<div>
	<div id="logo"><!--<img width="10%"src="dragon.svg"/><h1 id="head"></h1>--></div>

	<div class="row" id="ind">
		<div class="col-lg-2">
		</div>
	<div class="col-lg-8" id="content" >
		<div style="height=100%">
		<div class="row">
			<div class="col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-xs-4 col-sm-4 ">
				<img src="images/2.jpeg" class="pics" style="height:100%;width:100%"/>
			</div>
			<div class="col-lg-offset-2 col-md-offset-2 col-xs-offset-2 col-sm-offset-2 col-lg-4 col-md-4 col-xs-4 col-sm-4 ">
				<img src="images/3.jpeg" class="pics" style="height:100%;width:100%"/>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-offset-4 col-md-offset-4 col-xs-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-xs-4 col-sm-4 ">
				<img src="images/1.jpeg" class="pics" style="height:100%;width:100%"/>
			</div>
		</div>
		<br/><br/>
		<div class="row" style="text-align:center">
			<span ><b>Our New Campus Gallery</b></span>
		</div>
		</div>
	</div>
	<div class="col-lg-2">
		
		
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