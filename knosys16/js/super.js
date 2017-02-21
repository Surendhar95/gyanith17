 


 
			$( document ).ready(function(){
				
				

	   	    $("#show_login").click(function(){
				$('#mainpage').css({"background-image":"url('svg/login_bg.svg') "});
				//$('#mainpage').css({"background-color":"white"});
				
				
				$('#mainpage').load('login.php').hide().delay('200').fadeIn('slow');
				$("title").html("Knosys'16 - Login");
					return false;
				});
				 
   
        
			$('#reg a').click(function(){
				$('[data-toggle="tooltip"]').tooltip('hide');
            	$('#mainpage').css({"background-image":"url('svg/register_bg.svg')"});
            	
            	$('#mainpage').load('regiss.php').hide().delay('200').fadeIn('slow');
				
				$("title").html("Knosys'16 - Register");
				$('#mainpage').load('regiss.php');
					return false;
				});

				$('#workshop a').click(function(){
					$('[data-toggle="tooltip"]').tooltip('hide');
					$('#mainpage').css({"background-image":"url('svg/workshops_bg.svg') "});
					//$('#mainpage').css({"background-color":"white"});
					
				
					$('#mainpage').load('work.php').hide().delay('200').fadeIn('slow');
					$("title").html("Knosys'16 - Workshops");
					return false;
				});
				$('#events a').click(function(){
					$('[data-toggle="tooltip"]').tooltip('hide');
					
				
					$('#mainpage').css({"background-image":"url('svg/events.svg') "});
					// /$('#mainpage').css({"background-color":"white"});
					$('#mainpage').load('events.php').hide().delay('200').fadeIn('slow');
					$("title").html("Knosys'16 - Events");
					return false;
				});
				$('#contact a').click(function(){
					$('[data-toggle="tooltip"]').tooltip('hide');
					$('#mainpage').css({"background-image":"url('svg/default.svg') "});
					$('#mainpage').load('cont.html').hide().delay('200').fadeIn('slow');
				
					//$('#mainpage').load('soon.html');
				
					$("title").html("Knosys'16 - Contacts");
					return false;
				});
				$('#sponsors a').click(function(){
					$('[data-toggle="tooltip"]').tooltip('hide');
					$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				
					$('#mainpage').load('sponsors.html').hide().delay('200').fadeIn('slow');
					
					//$('#mainpage').load('contact.html #' + $(this).attr('href'));
					$("title").html(" Knosys'16 - Sponsors");
					return false;
				});
				$('#accom a').click(function(){
					$('[data-toggle="tooltip"]').tooltip('hide');
					$('#mainpage').css({"background-image":"url('svg/default.svg') "});
				
					$('#mainpage').load('acco.php').hide().delay('200').fadeIn('slow');
					
					//$('#mainpage').load('contact.html #' + $(this).attr('href'));
					$("title").html(" Knosys'16 - Hospitality");
					return false;
				});

				
			});
function already(){
		$('#mainpage').css({"background-image":"url('img/emailinvalid.png')"});
	}
	function success(){
		$('#mainpage').css({"background-image":"url('img/granteduser.png')"});
		$('#regg').attr('href','#');
	}

function fail(){
		$('#mainpage').css({"background-image":"url('img/invalidmail.png')"});
	}
function done(){
	$('#regg').attr('href','#');
		
	}

function showpopup()
{
   $("#loginform").fadeIn();
   $("#loginform").css({"visibility":"visible","display":"block"});
}

function hidepopup()
{
   $("#loginform").fadeOut();
   $("#loginform").css({"visibility":"hidden","display":"none"});
}
function hide(){
	$('#regg').hide();
}