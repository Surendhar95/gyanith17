

$( document ).ready(function(){

			//alert('hi');
	   	    $("#format a ").click(function(){
	   	    	
				//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('optimus_details.html #' + $(this).attr('href'));
				$("title").html(" | details");
					return false;
				});
	   	     $("#desp a ").click(function(){
	   	    	//$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('optimus_details.html #' + $(this).attr('href'));
				$("title").html(" | details");
					return false;
				});
	   	     $("#rules a ").click(function(){
	   	    	
			//	$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('optimus_details.html #' + $(this).attr('href'));
				$("title").html(" | details");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	
			//	$('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('optimus_reg.php');
				$("title").html(" | details");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    //	
				//('#details').css({"background-color":"white"});
				$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				$('#details').load('optimus_details.html #' + $(this).attr('href'));
				$("title").html(" | details");
					return false;
				});
	   	});
	   	    