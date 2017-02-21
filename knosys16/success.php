<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Knosys'16</title>
		<meta name="description" content="Adding elasticity with SVG shape animations" />
		<meta name="keywords" content="svg, morph, snap.svg, effect, animation, css, shape" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="img/ico.gif">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/inputs.css" />
		
		<link rel="stylesheet" type="text/css" href="css/button.css" />
		<script src="js/snap.svg-min.js"></script>
		<!-- <script src = 'validate.js'></script> -->
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript'>
		$(function {
    $("input[name=first]")[0].oninvalid = function () {
        this.setCustomValidity("Please enter at least 5 characters.");
        this.setCustomValidity("");
    };
});
		
		</script>
		<style>
			body
           {
            background-image:url("img/backgound.svg");
			background-repeat:no-repeat;
            background-attachment:fixed;
            background-position:center; 
			
            }
header #cd-logo {
  margin-bottom: 3em;
}
@media only screen and (min-width: 768px) {
  header {
    margin-bottom: 4em;
  }
}
@media only screen and (min-width: 1170px) {  /*Normal header height*/
  header #cd-logo {
    position: absolute;
    top: 1px;                 /*normal top dist*/
    left: 39%;
  }
}
			</style>
		
	</head>
	<body>
		<