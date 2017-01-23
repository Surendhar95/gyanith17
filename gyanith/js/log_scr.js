// JavaScript Document

$('document').ready(function()
{ 
	
	//alert('hi');
    // /* validation */
	 $("#log-form").validate({
		
      rules:
	  {
			
			password1: {
			required: true,
			
			},
			
			email1: {
            required: true,
            email: true
            },
           
	   },
       messages:
	   {
            
            password1:{
        
		              required: "please provide a password",
                     // minlength: "password should at least have 8 characters"
                     },
            email1: "please enter a valid email address",
			

       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#log-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'valid_log.php',
				data : data,
				beforeSend: function()
				{	
					$("#error1").fadeOut();
					$("#btn-submit1").val('sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error1").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit1").val('Login');
										
									});
																				
								}
								else if(data=="logged")
								{
									
									//$("#btn-submit").html( 'Logging In ...');
									$('#btn-submit1').val('Logging In ...');
									setTimeout('$(".login-wrap").fadeOut(500, function(){ window.location.replace("index.php"); }); ',5000);
									
								}
								else{
										
									$("#error1").fadeIn(1000, function(){
											
						$("#error1").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;'+data+' !</div>');
											
									$("#btn-submit1").val('Login');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});