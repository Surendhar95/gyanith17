$('document').ready(function()
{ 
    $("#frgtpassfrm").validate({
         rules:
	     {
            femail1: {
            required: true,
            email: true
            },
            fpassword: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cfpassword: {
			required: true,
			equalTo:'#fpassword',
			
			},
            messages:
	         {
                fpassword:{
                      required: "Please provide a password",
                      minlength: "Password should at least have 8 characters"
                     },
              femail1: "Please enter a valid email address",
			  cfpassword:{
						required: "Please retype your password",
						equalTo: "Password doesn't match !"
                },
			
             },
             unhighlight: function (element) {
if ($(element).is("input#cfpassword")) {
	//alert("pop unhigh");
			$(element).next('i').removeClass('glyphicon'); 
		   $(element).next('i').removeClass('glyphicon-remove');
		   $(element).next('i').addClass('glyphicon');
		   $(element).next('i').addClass('glyphicon-ok');    
		   
	    }	},
		
highlight: function (element) {//alert("pop high");
if ($(element).is("input#cfpassword")) {
  $(element).next('i').removeClass('glyphicon-ok');
  $(element).next('i').removeClass('glyphicon'); 
  $(element).next('i').addClass('glyphicon-remove');    
   $(element).next('i').addClass('glyphicon');
}
	},
         },
submitHandler: submitfrgtpass,    
});
    
    function submitfrgtpass(){
        var data = $("#frgtpassfrm").serialize();
        $.ajax({
            type : 'POST',
				url  : 'valid_frgtpass.php',
				data : data,
				beforeSend: function()
				{	
					//$("#error").fadeOut();
				//	$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
					$("#fsubmit").val('sending ...');
				},
                success :  function(data)
				{						
                    if(data=='not'){
                        $("#fsubmit").val('Submit');
                        $("#infofrgt").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Email was not registered!</div>');

                    }
                    if(data=="success")
                    {
                        $("#infofrgt").html("<div class='alert alert-success fade in'><span class='glyphicon glyphicon-ok'></span> &nbsp;Password changed</div>");
                        $("#fsubmit").val('Submit');
                        setTimeout('$(".login-wrap").fadeOut(500, function(){ window.location.replace("log.php"); }); ',2000);
                    }
                    else{
                        $("#infofrgt").html("<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> &nbsp;Email is not registered</div>");
                    }
									
                }
					
        });
    }
});