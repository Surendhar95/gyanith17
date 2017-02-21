

$( document ).ready(function(){

			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	
				$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('math_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Code Math");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('math_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Code Math");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('math_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Code Math");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	
			//	$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('math_reg.php');
				$("title").html("Knosys'16 - Code Math");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('math_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Code Math");
					return false;
				});
	   	});
	   	    