// JavaScript Document

$('document').ready(function()
{ 
	//alert('hi');
    // /* validation */
	 $("#login-form").validate({
      rules:
	  {
			
			password: {
			required: true,
			
			},
			
			email: {
            required: true,
            email: true
            },
           
	   },
       messages:
	   {
            
            password:{
                      required: "please provide a password",
                      minlength: "password should at least have 8 characters"
                     },
            email: "please enter a valid email address",
			

       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#login-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'valid_log.php',
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
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
										
									});
																				
								}
								else if(data=="logged")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Logging In ...');
									setTimeout('$(".form-signin").fadeOut(500, function(){ window.location.replace("index.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="bg-danger" style="position:relative;left:-80px"><h5>'+data+' !</h5></div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});