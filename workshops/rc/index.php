<!doctype html>
<html>
<head>
	<title>Gyanith '17  |  TAKE OFF - RC PLANE DESIGNING</title>
	
		<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.2.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css" />
		<link rel="icon" type="image/png" href="../../images/favicon.png" sizes="32x32">
		
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		
		<!--<link href="https://fonts.googleapis.com/css?family=Bentham|Lobster+Two|Merriweather+Sans|Merriweather:700|Oleo+Script+Swash+Caps" rel="stylesheet">-->
		
		<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../css/menu_sideslide.css" />
		<link rel="stylesheet" href="../../css/material.min.css">
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="../../css/style_click_drop.css"/>
<script type="text/javascript" src="../../js/material.min.js"></script>
<script src="https://use.fontawesome.com/ce3b4b3f41.js"></script>
<style>
#index{
	margin-top:-10px;
}
</style>

</head>
<body >
	<?php
		include ('../../loginicon.php');
		include("../../sidebar.php");
	 ?>
<div>
	<div id="logo">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="150px" height="150px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
<path fill="#fff" d="M115.267,237.326l41.732,41.525c2.273,2.271,6.405,35.121,4.132,37.393l-8.264,8.264
	c-2.272,2.271-5.991,2.271-8.264,0l-4.338-4.338l-33.055-33.055c-13.429-13.43-27.064-26.857-33.468-33.469l-4.132-4.132
	c-2.272-2.272-2.272-5.991,0-8.264l8.264-8.264C80.146,230.715,112.994,235.053,115.267,237.326z"/>
<path fill="#fff" d="M130.761,86.72c-6.198,0-11.363,5.165-11.363,11.363s5.165,11.363,11.363,11.363
	c6.198,0,11.363-5.165,11.363-11.363S136.959,86.72,130.761,86.72z M165.882,99.115c-6.198,0-11.363,5.165-11.363,11.363
	c0,6.198,5.165,11.363,11.363,11.363c6.198,0,11.363-5.165,11.363-11.363C177.245,104.28,172.08,99.115,165.882,99.115z
	 M295.003,226.17c0-6.197-5.165-11.363-11.363-11.363s-11.362,5.166-11.362,11.363s5.164,11.363,11.362,11.363
	S295.003,232.574,295.003,226.17z M296.035,249.928c-6.197,0-11.362,5.165-11.362,11.363c0,6.197,5.165,11.363,11.362,11.363
	s11.363-5.166,11.363-11.363C307.397,255.093,302.232,249.928,296.035,249.928z"/>
<path fill="#fff" d="M222.488,130.931l40.906,40.905c4.545,4.545,49.582,130.361,45.036,134.906l-16.32,16.32
	c-4.546,4.545-11.776,4.545-16.321,0l-90.281-114.66L71.056,118.535c-4.545-4.545-4.545-11.775,0-16.321l16.321-16.321
	C91.922,81.349,217.943,126.386,222.488,130.931z"/>
<path fill="#fff" d="M327.438,66.887c11.363,11.362,1.239,39.665-12.189,53.3L167.535,267.695
	c-13.636,13.635-62.392,44.209-73.754,32.848s19.213-60.117,32.849-73.754L274.137,79.076
	C287.771,65.44,316.075,55.524,327.438,66.887z"/>
<path fill="#fff" d="M136.753,236.707L284.26,89.199c11.569-11.569,33.675-20.453,46.896-16.114
	c-0.826-2.479-2.065-4.545-3.719-6.404c-11.362-11.363-39.666-1.24-53.301,12.395L126.629,226.584
	c-13.635,13.635-44.004,62.389-32.849,73.752c1.653,1.652,4.338,2.48,7.644,2.48C101.632,285.049,125.183,248.275,136.753,236.707z"
	/>
<path fill="#fff" d="M140.058,172.663l23.345,18.18l59.704-59.706l-0.619-0.62c-1.238-1.24-12.809-5.992-28.51-11.982
	C193.979,118.535,140.058,172.663,140.058,172.663z"/>
<path fill="#676868" d="M203.688,231.541l71.894,91.521c4.133,4.133,10.743,4.338,15.289,0.826l-79.332-100.197L203.688,231.541z
	 M170.633,182.786L69.816,103.867c-3.099,4.545-2.686,10.743,1.24,14.668l91.728,71.894L170.633,182.786z"/>
<path fill="#fff" d="M162.783,190.429l7.85-7.644l-22.725-17.767l-7.85,7.644L162.783,190.429z"/>
</svg>

	
	</div>
	<h1 id="head">TAKE OFF - RC PLANE DESIGNING</h1>
	<div class="row" id="ind">
		<div class="col-lg-4" id="index">
		<ul id="nav">
			<li>
				<div class="menu-tab">
					<a href="intro.php"> INTRODUCTION</a>
				</div>
			</li>
			<br>
			<li><div class="menu-tab"><a href="detail.php">  DETAILS</a></div></li>
			<br>
			<li><div class="menu-tab"><a href="cont.php"> CONTENT</a></div></li>
			<br>
			<li><div class="menu-tab"><a href="kitdit.php"> KIT DETAILS</a></div></li>
			<br>
			<li><div class="menu-tab"><a href="reg.php">  REGISTER</a></div></li>
			<br>
			<li><div class="menu-tab"><a href="contact.php">  CONTACT US</a></div></li>
			<br>
			<li><div class="menu-tab"><a href="faq.php">  FAQs</a></div></li>
		</ul>
		
	</div>
	<div class="col-lg-8" id="content" >
		
			<h1>Loading...</h1>

			
		
	</div>
	</div>
</div>
<?php include ('../../footer.php'); ?>
		<script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/general.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
</body>
</html>