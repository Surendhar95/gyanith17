

$( document ).ready(function(){

			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('antagon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Antagon");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('antagon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Antagon");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('antagon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Antagon");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('antagon_reg.php');
				$("title").html("Knosys'16 - Antagon");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('antagon_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Antagon");
					return false;
				});
	   	});
	   	    