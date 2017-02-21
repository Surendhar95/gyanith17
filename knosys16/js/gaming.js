

$( document ).ready(function(){

			//alert('hi');
	   	    $("#fifa a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#mainpage').load('fifa14.php');
				$("title").html(" | details");
					return false;
				});
	   	     $("#cod4 a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#mainpage').load('cod4.php');
				$("title").html(" | details");
					return false;
				});
	   	     $("#blur a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#mainpage').load('blur.php');
				$("title").html(" | details");
					return false;
				});
	   	    //  $("#reg a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
			//	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
			//	$('#details').load('dbug_reg.php');
			//	$("title").html(" | details");
			//		return false;
			//	});
	   	      $("#contact a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('gaming_details.html #' + $(this).attr('href'));
				$("title").html(" | details");
					return false;
				});
	   	});
	   	    