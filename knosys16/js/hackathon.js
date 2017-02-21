

$( document ).ready(function(){
$('#mainpage').css({"background-image":"url('svg/default.svg') "});
			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackathon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackathon");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackathon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackathon");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackathon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackathon");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackathon_reg.php');
				$("title").html("Knosys'16 - Hackathon");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackathon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackathon");
					return false;
				});
	   	});
	   	    