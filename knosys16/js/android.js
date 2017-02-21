

$( document ).ready(function(){

			//alert('hi');
	   	    $("#course a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	    //alert('hi');
	   	    $("#back a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/events.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#mainpage').load('events.php');
				$("title").html("Knosys'16 - Events");
					return false;
				});
	   	     $("#tit a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	     $("#detail a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	      $("#reg a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_reg.php');
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	      $("#contact a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	      $("#faq a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('android_details.html #' + $(this).attr('href'));
				$("title").html("Knosys'16 - Android");
					return false;
				});
	   	      $("#back a ").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				//$('#details').css({"background-color":"white"});
				$('#details').load('work.php'));
				$("title").html("Knosys'16 - Workshops");
					return false;
				});
	   	});
	   	     