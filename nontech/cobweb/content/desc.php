<!--cobweb start-->

<style>
#cobweb1{
	text-align:center;
}

#cobweb1 a{
	color:#fff;
	
}
#cobweb1 a:hover{
	color:#19f6e8;
}
</style>

<script>
function blinker() {
	$('.blinking').fadeOut(500);
	$('.blinking').fadeIn(500);
}
setInterval(blinker, 800);
</script>

<!--cobweb end-->

<head>
	<link href="../../style.css"/>
</head>
<p>
Ever felt a Sherlock in you ?<br><br> 
Do puzzles drive you crazy?<br><br>
Have an eidetic memory?<br><br>
Narrow down to this event!!<br><br>
Get ready to find your way out of this Cobweb in one of the most trickiest quest for treasure.


<!--cobweb start-->

<div id="cobweb1">
		<?php 
			session_start();
			if(isset($_SESSION['cobweb']))
			{
		 ?>
		<br/>
		<a class="blinking" href="http://cobweb-knosys16.rhcloud.com" target="_blank">Link to CobWeb</a>
		<?php
		 } 
		?>
</div>

 

 <!--cobweb end-->
</p>