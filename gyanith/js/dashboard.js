$(document).ready(function (){
	$("#createteam").hide();
	$("#wcreateteam").hide();
	
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
					if(!$('#createteam1').is(':visible') && !$('#msgeve').is(':visible'))
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
						if(!$('#createteam1').is(':visible') && !$('#msgeve').is(':visible'))
						{
							$("#createteam").show();}
						}
					}
					else if(data.startsWith("Already")){
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
					if(!$('#wcreateteam1').is(':visible') && !$('#msgwrk').is(':visible'))
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
					if(!$('#wcreateteam1').is(':visible') && !$('#msgwrk').is(':visible'))
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
				//url:'testdbteamevents.php',
                data: data,
                beforeSend:function(){
                     $("#submittmeve").val("sending.....");
                },
				success: function(data){
					$("#submittmeve").val("Submit");
					$("#terr1").html('');$("#terr2").html('');$("#terr3").html('');$("#terr4").html('');$("#terr5").html('');
					//$("#txtsub").hide();
					
					if(data.startsWith('error'))
					{
						//alert("if");
						var num=data.substring(6);
						if(num==1){$("#terr1").html("<div>GY-ID not valid</div>")}
						if(num==2){$("#terr2").html("<div>GY-ID not valid</div>")}
						if(num==3){$("#terr3").html("<div>GY-ID not valid</div>")}
						if(num==4){$("#terr4").html("<div>GY-ID not valid</div>")}
						if(num==5){$("#terr5").html("<div>GY-ID not valid</div>")}
					}
					else if(data.startsWith('crtd')){
						$("#txtsub").hide();
						$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5)+"</span></div>");	
					}
					else{
						$("#txtsub").hide();
						var mtind=data.indexOf("Your");
						$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(6,(mtind-1))+"</span></div>");
						$("#tnmshow").append("<div class='label'><span class='tnote'> "+ data.substring((mtind))+"</span></div>");
					
					}

					
					/*if(data.startsWith('success')){
					$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(8)+"</span></div>");
					}
					if(data.startsWith('mate')){
						var mtind=data.indexOf("Your");
					$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5,(mtind-1))+"</span></div>");
					$("#tnmshow").append("<div class='label'><span class='tnote'> "+ data.substring((mtind))+"</span></div>");
					}
					else{
						$("#tnmshow").html("<div class='label'><span class='tnote'> "+data+"</span></div>");
				}*/
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