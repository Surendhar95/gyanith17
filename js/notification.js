function generate(type, text) {

            var n = noty({
            text        : type,
            type        : type,
            dismissQueue: false,
            timeout: 5000,
            layout      : 'topCenter',
            theme       : 'relax',
            progessBar	: true, 
        });
        console.log('html: ' + n.options.id);
        return n;
    }
       

        

       	function generateAll() {
       	 	generate("Welcome to Gyanith'17");
            generate("Workshop registration starts on 31st Jan");
            generate("Event registration started");
            
       		


       	}

       	$(document).ready(function(){

       		setInterval(function () {
            generateAll();
          
        }, 3000);

       	});