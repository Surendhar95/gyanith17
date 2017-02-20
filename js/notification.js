function generate(type, text) {

            var n = noty({
            text        : text,
            type        : type,
            dismissQueue: false,
            timeout: 4000,
            layout      : 'topCenter',
            theme       : 'relax',
            progessBar	: true, 
        });
        console.log('html: ' + n.options.id);
        return n;
    }
       

        

       	function generateAll() {
          generate("warning","Prizes worth 1.5 lakhs to be won")
            generate('notification',"COBWEB has started ");
            generate('notification',"Workshops registration started");

            //generate('notification',"On the spot Entry fee to participate in all the events - Rs.200");
            generate('notification',"Workshop payment can be now done via SBICollect/DD/NEFT/Internet banking.Refer Workshop pages for details")
            generate('notification',"Limited registrations. Register soon");
        

            generate('notification',"Schedule is available for download at profile section");
            generate('notification',"Antagon-online Codechef event");
            generate('notification',"Rush hour-the robo wrestling event");
            generate('notification',"Gear up for an exciting auto-expo at Gyanith'17");
          

       	}

        // function generate(type, text) {

        //     var n = noty({
        //         text        : text,
        //         type        : type,
        //         dismissQueue: true,
        //         progressBar : true,
        //         timeout     : 5000,
        //         layout      : 'Left',
        //         closeWith   : ['click'],
        //         theme       : 'relax',
        //         maxVisible  : 10,
        //         animation   : {
        //             open  : 'animated bounceInLeft',
        //             close : 'animated bounceOutLeft',
        //             easing: 'swing',
        //             speed : 500
        //         }
        //     });
        //     console.log('html: ' + n.options.id);
        //     return n;
        // }


       	$(document).ready(function(){
         // generate("information","hi","hi");
       		setInterval(function () {
            generateAll();
          
        }, 3000);

       	});