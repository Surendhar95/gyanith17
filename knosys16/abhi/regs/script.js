$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate(
	{
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			email: {
            required: true,
            email: true
            },
            full_name:{
            required: true,
            minlength: 3,
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
            user_name: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            email: "please enter a valid email address",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  },
			full_name: 'Please enter Full name',
			college: 'Please enter college name',
			phone: 'Please enter phone number',

       }
	 //  submitHandler: submitForm	
})});  
