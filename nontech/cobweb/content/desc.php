

<!--cobweb start-->

<style>
#cobweb1{
	text-align:center;
}

#cobweb1 {
	color:#fff;
	cursor:pointer;
	
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
$(document).ready(
function(){
$( "#cobweblink" ).click(function() {
  $( "#cobwebform" ).submit();
});
});
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
			<form action="http://cobweb-knosys16.rhcloud.com" method="post" id="cobwebform" target="_blank">
			<input type="hidden" name="g_id" value=<?php echo $_SESSION['g_id']; ?>>
			<input type="hidden" name="name" value=<?php echo $_SESSION['name'];?>>
			<span class="blinking" id="cobweblink">Link to CobWeb</span>
			</form>

		
		<?php
		 } 
		?>
</div>

 

 <!--cobweb end-->
</p>