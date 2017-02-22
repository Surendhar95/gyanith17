<!doctype html>
<html>
<head>
	<title>Gyanith '17  | Guest Talk</title>
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
  overflow-y: auto;
    margin-top:100px;
  padding: 30px 20px;
  border-radius:15px;
  width: 75%;
  height: 450px; 
  font-size: 1em;
  background: #d9d9d9; /* Old browsers */
  background-color:rgba(217,217,217,0.4); 
  background-attachment: fixed;
  color: black;
  position: relative;
  margin-bottom:10px;
  border: 1px white solid;
  right:6%;
  
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
.title2 {
	position: absolute;
	width:30%;
	/*margin-top: 0%;
	margin-left: 38%;*/
	border-bottom: 10%;
	text-align: center;
	color: #fff;

	
}
.pic-col{
           
            height:200px;
            width:200px;
            /*float:left;*/
        }
</style>

</head>
<body >
<?php
	include ('loginicon.php');
		include("sidebar.php");
	 ?>
	 <header>
			<div class="title2 row">
				<h2><b>GUEST TALK</b></h2>
			</div>
		</header>
<div>
	<div id="logo"><!--<img width="10%"src="dragon.svg"/><h1 id="head"></h1>--></div>

	<div class="row" id="ind">
		<div class="col-lg-2">
		
		
	</div>
	<div class="col-lg-8" id="content" >

        <div class="row">
		<div class="col-lg-3">
        <br/><br/><br/><br/>
        <div class="pic-col" style="background:url('images/saravanan.jpg');background-size:200px;background-repeat: no-repeat;"></div>
        <div class="captn" style="margin-left:15%;">Dr. M Saravanan</div>
        <!-- <img src="images/saravanan.jpg" height="100px" width="100px" />-->
		 

        </div>
		<div class="col-lg-9"> 
      <p>The guest lecture will be given by <b>Dr. M Saravanan</b>, a Master researcher from Ericsson Research India from seven years. He has worked as a senior scientist in Checktronics India. He has published over 8 journals in 64 National and International conferences in China, France, Turkey, Egypt and Taiwan. His areas of interest are Data Mining, Text Mining, Information Retrieval, Mobile Social Network Analysis, IOT, Security and Privacy. He has been granted 3 patents. He has also chaired Session in International conferences like PAKD, ASONAM, DATA etc. Presently, he is working on IOT related projects. The guest talk will be on <b>IOT AND  ITS CHALLENGES</b>.</p>

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