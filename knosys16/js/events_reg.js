// JavaScript Document

$('document').ready(function()
{ 
	//alert('hi');
    // /* validation */
    
$('#reg_hosp').validate({
    	submitHandler: submitForm_hosp	
    });  

    $('#reg_hackpro').validate({
    	submitHandler: submitForm_hackpro	
    }); 
     $('#reg_android').validate({
    	submitHandler: submitForm_android
    }); 
    $('#reg_opt').validate({
    	submitHandler: submitForm_opt	
    });
    $('#reg_ity').validate({
    	submitHandler: submitForm_ity	
    });
    $('#reg_math').validate({
    	submitHandler: submitForm_math	
    });
    $('#reg_linux').validate({
    	submitHandler: submitForm_linux	
    });
    $('#reg_dbug').validate({
    	submitHandler: submitForm_dbug	
    });
    $('#reg_hack').validate({
    	submitHandler: submitForm_hack
    });
	 $("#reg_ant").validate({
     
	   submitHandler: submitForm_ant	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm_ant()
	   {		
				var data = $("#reg_ant").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_ant.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span> &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}

		 function submitForm_hack()
	   {		
				var data = $("#reg_hack").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_hack.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		 function submitForm_dbug()
	   {		
				var data = $("#reg_dbug").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_dbug.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>  &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		 function submitForm_linux()
	   {		
				var data = $("#reg_linux").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_linux.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>  &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		 function submitForm_math()
	   {		
				var data = $("#reg_math").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_math.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>  &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		 function submitForm_ity()
	   {		
				var data = $("#reg_ity").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_ity.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>  &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
								//	setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("dd_img.php"); }); ',5000);
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		 function submitForm_opt()
	   {		
				var data = $("#reg_opt").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_opt.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>  &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});
function submitForm_android()
	   {		
				var data = $("#reg_android").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_android.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span> &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');

									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		function submitForm_hackpro()
	   {		
				var data = $("#reg_hackpro").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_hackpro.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering ...');
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span> &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');

									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}
		function progressHandlingFunction(e){
    if(e.lengthComputable){
        $('progress').attr({value:e.loaded,max:e.total});
    }
}function submitForm_hosp()
	   {		
				var data = $("#reg_hosp").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'validate_hosp.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="bg-danger"> <span class="glyphicon "></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									$("#error").fadeIn(1000, function(){
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span> &nbsp; Registered');
									$('#btn-submit').attr('disabled','disabled');
									$("#error").html('<div class="bg-success" style="position:relative;left:-115px"><h5>Your accomodation is confirmed !</h5></div>');
									
										});
									/*setTimeout('$(".form-signin").fadeOut(500, function(){  }); ',5000);*/
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-115px"><h5>Your have already registered for accomodation!</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-ok"></span>&nbsp; Register');
									$('#btn-submit').attr('disabled','disabled');
									});
											
								}
						   }
				});
				return false;
		}

		 