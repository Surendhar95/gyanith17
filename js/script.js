//functions for clearing and forgot password load for log.php.

function clr(){
	document.getElementById("error1").innerHTML = "";
	$("title").html("Gyanith '17 | Login");
	$('#log-form')[0].reset();
}
function clr1(){
	document.getElementById("error").innerHTML = "";
	$("title").html("Gyanith '17 | Sign Up");
	$('#signup-form')[0].reset();
}
function frgtpass(){
	$('#mainpage1').load('frgtpasswd.php');
	$("title").html("Forgot Password");
	return false;
}




//for right side drop menu
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}



//validation and submit handling of signup
$('document').ready(function()
{ 

	//code for scroll up after sign up
	/*$(function () {
		$('#btn-submit').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
*/
	 $(".coltxt").hide();
             $("#college").change(function() {
                 if ($(this).val() == "0") {
                    // alert('value');
					$(".coltxt").show();
 				}
				 else{
					 $(".coltxt").hide();
				 }
			 });



	 $("#signup-form").validate(
	{
	
		
      rules:
	  {
			first_name: {
		    required: true
		
			},
			
			second_name: {
		    required: true
			
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo:'#password',
			
			},
			email: {
            required: true,
            email: true
            },
           sex:{
				required: true,
			},
            college:{
            required: true,

            },
            phone:{
            required: true,
	        },
	   },
       messages:
	   {
			first_name:{
				required:"Please enter first name"
			
			},
			second_name: 
			{
				required:"Please enter second name"
				
			},
            password:{
                      required: "Please provide a password",
                      minlength: "Password should at least have 8 characters"
                     },
			sex:{
				required:'Please select your gender',
			},
            email: "Please enter a valid email address",
			cpassword:{
						required: "Please retype your password",
						equalTo: "Password doesn't match !"},
			college: 'Please enter college name',
			phone: 'Please enter phone number',
	   },
	
	unhighlight: function (element) {
if ($(element).is("input#cpassword")) {
	//alert("pop unhigh");
			$(element).next('i').removeClass('glyphicon'); 
		   $(element).next('i').removeClass('glyphicon-remove');
		   $(element).next('i').addClass('glyphicon');
		   $(element).next('i').addClass('glyphicon-ok');    
		   
	    }	},
		
highlight: function (element) {//alert("pop high");
if ($(element).is("input#cpassword")) {
  $(element).next('i').removeClass('glyphicon-ok');
  $(element).next('i').removeClass('glyphicon'); 
  $(element).next('i').addClass('glyphicon-remove');    
   $(element).next('i').addClass('glyphicon');
}
	},
        
	 submitHandler: submitForm,
	 
});

	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#signup-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'valid_reg.php',
				data : data,
				beforeSend: function()
				{	
					

					$("#error").fadeOut();
				//	$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
					$("#btn-submit").val('sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									$(function () {
										
											$('body,html').animate({
												scrollTop: 0
											}, 800);
											//return false;
										
									});

									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").val('Create Account');
											//$('#signup-form')[0].reset();
										
									});
																				
								}
								else if(data=="registered")
								{
									$(function () {
										
											$('body,html').animate({
												scrollTop: 0
											}, 800);
											//return false;
										
									});
									$("#btn-submit").val(' Signing Up ...');
									//$('#signup-form')[0].reset();
									//$('#signup-form').children('input').val('');
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("reg_success.php"); }); ',5000);
								
								}
								else{
									$(function () {
										
											$('body,html').animate({
												scrollTop: 0
											}, 800);
											//return false;
										
									});
										
									$("#error").fadeIn(1000, function(){
									$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;'+data+' !</div>');	
									$("#btn-submit").val('Create Account');
									//$('#signup-form')[0].reset();
										
									});
											
								}
						   }
				});
				return false;
		}
	
});