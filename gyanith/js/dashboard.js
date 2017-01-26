$(document).ready(function (){
	$("#createteam").hide();
	$("#wcreateteam").hide();
	//alert('ready');
           //events drop down
/*            $("#events").change(function() {
                if ($(this).val() == "dbugcbug") {
                    $("#dbug").fadeIn();
					$("#dbug").css({"display":"inline-block"});
					$("#cldbug").show();
				}
				else if ($(this).val() == "weblicate") {
                    $("#web").fadeIn();
					$("#web").css({"display":"inline-block"});
					$("#clweb").show();
				}
				else if ($(this).val() == "enigma") {
                    $("#eni").fadeIn();
					$("#eni").css({"display":"inline-block"});
					$("#cleni").show();
				}
				else if ($(this).val() == "antagon") {
                    $("#ant").fadeIn();
					$("#ant").css({"display":"inline-block"});
					$("#clant").show();
				}
				
				
});
			$('#cldbug').click(function() { 
				$('#dbug').fadeOut();
			});
			$('#clweb').click(function() { 
				$('#web').fadeOut();
			});
			$('#cleni').click(function() { 
				$('#eni').fadeOut();
			});
			$('#clant').click(function() { 
				$('#ant').fadeOut();
			});

            //for workshop drop down
             $("#workshops").change(function() {
                if ($(this).val() == "android") {
                    $("#andr").fadeIn();
					$("#andr").css({"display":"inline-block"});
					$("#clandr").show();
				}
				else if ($(this).val() == "hackpro") {
                    $("#hac").fadeIn();
					$("#hac").css({"display":"inline-block"});
					$("#clhac").show();
				}
				
				
            });
            $('#clandr').click(function() { 
				$('#andr').fadeOut();
			});
			$('#clhac').click(function() { 
				$('#hac').fadeOut();
			});
*/
/*event submit*/
        $("#dropevents").validate({
            submitHandler: submitevents
        });

        function submitevents(){
			//alert('validate');
            var data=$("#dropevents").serialize();
            $.ajax({
                type:'POST',
                url:'dbevents.php',
                data: data,
                beforeSend:function(){
                     $("#submiteve").val("sending.....");
                },
                success: function(data){
					$('#alerteve').html('');
					$("#submiteve").val("Register for events");
					var ind=data.indexOf("bltm");
					if(data.startsWith("upd")){
                      // $("#infoeve").append("<div class='tnote'>"+data.substring(4)+"</div>");
						$("#infoeve").append("<div class='tnote'>"+data.substring(4,(ind-1))+"</div>");
						//$("#infoeve").append("<div class='tnote'>"+data.substring(4,(ind-1))+"  "+data.substring((ind+5))+"</div>");
						if(data.substring((ind+5))=='1'){
						$("#dispeve").hide();
					//	$("#createteam").hide();
					if(!$('#createteam1').is(':visible'))
						{
						$("#createteam").show();}
					}
						
					}
					else if(data.startsWith("ins")){
						//$("#infoeve").append("<div>Registered events are:<br/><div>");
						$("#infoeve").append("<div class='tnote'>"+data.substring(4,(ind-1))+"</div>");
						//$("#infoeve").append("<div class='tnote'>"+data.substring(4,(ind-1))+"  "+data.substring((ind+5))+"</div>");
						if(data.substring((ind+5))=='1'){
						$("#dispeve").hide();
						//$("#createteam").hide();
						if(!$('#createteam1').is(':visible'))
						{
							$("#createteam").show();}
						}
					}
					else{
						$("#alerteve").append("<div class='tnote'>"+data+"</div>");
					}
                }
            });
        }

/*workshop submit*/
        $("#dropworkshops").validate({
            submitHandler: submitworkshops
        });

        function submitworkshops(){
			//alert('validate');
            var data=$("#dropworkshops").serialize();
            $.ajax({
                type:'POST',
                url:'dbworkshops.php',
                data: data,
                beforeSend:function(){
                     $("#submitwrk").val("sending.....");
                },
                success: function(data){
					$('#alertwrk').html('');
					$("#submitwrk").val("Register for events");
					var ind=data.indexOf("bltm");
					if(data.startsWith("upd")){
                       
					    $("#infowrk").append("<div class='tnote'>"+data.substring(4,(ind-1))+"</div>");
						if(data.substring((ind+5))=='1'){
						$("#dispwrk").hide();
					//	$("#createteam").hide();
					if(!$('#wcreateteam1').is(':visible'))
						{
						$("#wcreateteam").show();}
					}
					}
					else if(data.startsWith("ins")){
						//$("#infoeve").append("<div>Registered events are:<br/><div>");
						$("#infowrk").append("<div class='tnote'>"+data.substring(4,(ind-1))+"</div>");
						if(data.substring((ind+5))=='1'){
							$("#dispwrk").hide();
					//	$("#createteam").hide();
					if(!$('#wcreateteam1').is(':visible'))
						{
						$("#wcreateteam").show();}
						}
					}
					else{
						$("#alertwrk").append("<div class='tnote'>"+data+"</div>");
					}
                }
            });
        }
		$("#txtsub").hide();
		$("#plus").click(function(){
			$("#plus").hide();
        $("#txtsub").show();
    	});

		/*team events submit */
		$("#teamevents").validate({
            submitHandler: submitteamevents
        });
		function submitteamevents(){
			//alert('validate');
            var data=$("#teamevents").serialize();
			 $.ajax({
                type:'POST',
                url:'dbteamevents.php',
                data: data,
                beforeSend:function(){
                     $("#submittmeve").val("sending.....");
                },
				success: function(data){
					$("#txtsub").hide();
					if(data.startsWith('success')){
					$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(8)+"</span></div>");
					}
					else{
						$("#tnmshow").html("<div class='label'><span class='tnote'> "+data+"</span></div>");
					}
				}
			 });
		}


		$("#wtxtsub").hide();
		$("#wplus").click(function(){
			$("#wplus").hide();
        $("#wtxtsub").show();
    	});
		/*team workshops submit */
		$("#teamworkshops").validate({
            submitHandler: submitteamworkshops
        });
		function submitteamworkshops(){
			//alert('validate');
            var data=$("#teamworkshops").serialize();
			 $.ajax({
                type:'POST',
                url:'dbteamworkshops.php',
                data: data,
                beforeSend:function(){
                     $("#submittmwrk").val("sending.....");
                },
				success: function(data){
					$("#wtxtsub").hide();
					if(data.startsWith('success')){
					$("#wtnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(8)+"</span></div>");
					}
					else{
						$("#wtnmshow").html("<div class='label'><span class='tnote'> "+data+"</span></div>");
					}

				}
			 });
		}

});