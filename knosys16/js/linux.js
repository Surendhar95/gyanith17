

$( document ).ready(function(){

			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('linux_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Linux Expert");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('linux_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Linux Expert");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('linux_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Linux Expert");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('linux_reg.php');
				$("title").html("Knosys'16 - Linux Expert");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('linux_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Linux Expert");
					return false;
				});
	   	});
	   	    