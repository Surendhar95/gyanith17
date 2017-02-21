

$( document ).ready(function(){

			//alert('hi');

	   	    $("#android a").click(function(){
	   	    	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
	   	    	/*$('#mainpage').css({"overflow":"none"});
				$('#mainpage').css({"background-color":"white"});*/
				$("title").html("Knosys'16 - Android");
				$('#mainpage').load('android.php');
				//$('#mainpage').load('soon.html');
				
					return false;
				});
	   	     $("#hackpro a").click(function(){
	   	     	$('#mainpage').css({"background-image":"url('svg/default.svg') "});
	   	    	//$('#mainpage').css({"overflow":"none"});
				//$('#mainpage').css({"background-color":"white"});
				$("title").html("Knosys'16 - Hackpro");
				$('#mainpage').load('hackpro.php');
				//$('#mainpage').load('soon.html');
				
					return false;
				});
	   	     
	   	});
	   	    