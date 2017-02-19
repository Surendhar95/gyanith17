<div class="preloader">
<style type="text/css">
body {
	background: #161616 url(pattern_40.gif) top left repeat;
	margin: 0;
	padding: 0;
	font: 12px normal Verdana, Arial, Helvetica, sans-serif;
	height: 100%;
}

* {margin: 0; padding: 0; outline: none;}

img {border: none;}

a { 
	text-decoration:none; 
	color:#00c6ff;
}



.contain {width: 960px; margin:auto; margin-top:15%; overflow: hidden;background:transparent;}
.content {width:800px; margin:0 auto; padding-top:50px;background:transparent;}
.contentBar {width:90px; margin:0 auto; padding-top:50px; padding-bottom:50px;background:transparent;}

/* Second Loadin Circle */

.circle {
	background-color: rgba(0,0,0,0);
	border:10px solid rgba(0,183,229,0.9);
	opacity:.9;
	border-right:10px solid rgba(0,0,0,0);
	border-left:10px solid rgba(0,0,0,0);
	border-radius:150px;
	box-shadow: 0 0 65px #2187e7;
	width:120px;
	height:120px;
	margin:0 auto;
	-moz-animation:spinPulse 1s infinite ease-in-out;
	-webkit-animation:spinPulse 1s infinite linear;
}
.circle1 {
	background-color: rgba(0,0,0,0);
	border:5px solid rgba(0,183,229,0.9);
	opacity:.9;
	border-left:5px solid rgba(0,0,0,0);
	border-right:5px solid rgba(0,0,0,0);
	border-radius:50px;
	box-shadow: 0 0 15px #2187e7; 
	width:50px;
	height:50px;
	margin:0 auto;
	position:relative;
	top:-85px;
	-moz-animation:spinoffPulse 1s infinite linear;
	-webkit-animation:spinoffPulse 1s infinite linear;
}

@-moz-keyframes spinPulse {
	0% { -moz-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px #2187e7;}
	50% { -moz-transform:rotate(145deg); opacity:1; }
	100% { -moz-transform:rotate(-320deg); opacity:0; }
}
@-moz-keyframes spinoffPulse {
	0% { -moz-transform:rotate(0deg); }
	100% { -moz-transform:rotate(360deg);  }
}
@-webkit-keyframes spinPulse {
	0% { -webkit-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px #2187e7; }
	50% { -webkit-transform:rotate(145deg); opacity:1;}
	100% { -webkit-transform:rotate(-320deg); opacity:0; }
}
@-webkit-keyframes spinoffPulse {
	0% { -webkit-transform:rotate(0deg); }
	100% { -webkit-transform:rotate(360deg); }
}
</style>
</head>
<body>
<div class="contain">
	<div class="content">
    <div class="circle"></div>
    <div class="circle1"></div>
    </div>
</div>
</div>
