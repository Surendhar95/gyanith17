

$( document ).ready(function(){

			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('dubs_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Dubsmash");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('dubs_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Dubsmash");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('dubs_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Dubsmash");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('dubs_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Dubsmash");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('dubs_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Dubsmash");
					return false;
				});
	   	});
	   	    