

$( document ).ready(function(){

			//alert('hi');
	   	    $("#course a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	     $("#detail a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_reg.php');
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	      $("#faq a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('hackpro_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Hackpro");
					return false;
				});
	   	});
	   	    