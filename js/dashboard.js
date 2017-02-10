$(document).ready(function (){
	$("#createteam").hide();
//	$("#wcreateteam").hide();
	
	
	//antagon codechef username 
	$("#anttxt").hide();
	 $("#events").change(function() {
                 if ($(this).val() == 'antagon') {
                   	$("#anttxt").show();
 				}
				 else{
					 $("#anttxt").hide();
				 }
			 });
	
	//payment mode textbox
	$("#sbitxt").hide();
	 $("#pay").change(function() {
                 $("#sbitxt").show();
			 });
	



/*event submit*/
        $("#dropevents").validate({
           rules:
	 		 {
				  events:{
					  required:true
				  },
				  anttxt:{
					  required:true
				  }
	 		 },
	 		 messages:
	 		  {
				   events:{
					   required:'Please select a event'
				   },
				   anttxt:{
					   required:'Please enter your CodeChef user name'
				   }
				   	
			   },
		   
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
					$('#alerteve').html('');
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
						$("#alerteve").append("<div class='tnote rdtxt'>"+data+"</div>");
					}
                }
            });
        }

/*workshop submit*/
        $("#dropworkshops").validate({
			 rules:
	 		 {
				  workshops:{
					  required:true
				  },
				  pay:{
					  required:true
				  },
				   sbitxt:{
					  required:true,
					 //minlength:10,
					// maxlength:10
				  }
	 		 },
	 		 messages:
	 		  {
				   workshops:{
					   required:'Please select a workshop'
				   },
				   pay:{
					   required:'Please select payment method'
				   },
					   sbitxt:{
						   required:'Please enter Bank transaction Reference number',
						   //minlength:'Please enter a valid Bank transaction Reference number',
						  // maxlength:'Please enter a valid Bank transaction Reference number'
					}
			   },
            submitHandler: submitworkshops
        });

        function submitworkshops(){
			
            var data=$("#dropworkshops").serialize();
            $.ajax({
                type:'POST',
                url:'dbworkshops.php',
                data: data,
                beforeSend:function(){
					$('#alertwrk').html('');
					$('#alertwrkteam').html('');
                     $("#submitwrk").val("sending.....");
                },
                success: function(data){
					var dispv;
					$('#alertwrk').html('');
					$("#submitwrk").val("Register for Workshops");
					if(data.substring(4)=='game'){dispv='Game Development Using VR'}
					if(data.substring(4)=='plugdin'){dispv='Get PlugdIn'}
					if(data.substring(4)=='control'){dispv='Take Control'}
					if(data.substring(4)=='renewate'){dispv='Solar Smart Energy System'}
					if(data.substring(4)=='crabot'){dispv='Crabot'}
					if(data.substring(4)=='take'){dispv='Take Off'}
					
					if(data.startsWith("upd")){
                    
					    $("#infowrk").append("<div class='tnote'>"+dispv+"</div>");
						$("#dispwrk").hide();
					
						/*	if(!$('#wcreateteam1').is(':visible') && !$('#msgwrk').is(':visible'))
						{
					
						$("#wcreateteam").show();} */
					
					}
					else if(data.startsWith("ins")){
						$("#infowrk").append("<div class='tnote'>"+dispv+"</div>");
							$("#dispwrk").hide();
					
				/*	if(!$('#wcreateteam1').is(':visible') && !$('#msgwrk').is(':visible'))
						{
						$("#wcreateteam").show();} */
						//}
					}
					else if(data.startsWith('eng')){
						$('#alertwrkteam').append("<div class='rdtxt'>"+data.substring(4)+"</div>");
					}
					else{
						$("#alertwrk").append("<div class='tnote rdtxt'>"+data+"</div>");
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
			rules:
	 		 {
				  etname:{
					  required:true
				  },
				   
	 		 },
	 		 messages:
	 		  {
				   etname:{
					   required:'Please enter your team name'
				   },
				   
			   },
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
					
					if(data.startsWith("error"))
					{
						//alert("if");
						var num=data.substring(6);
						if(num==1){$("#terr1").html("<div class='rdtxt'>GY-ID not valid</div>")}
						if(num==2){$("#terr2").html("<div class='rdtxt'>GY-ID not valid</div>")}
						if(num==3){$("#terr3").html("<div class='rdtxt'>GY-ID not valid</div>")}
						if(num==4){$("#terr4").html("<div class='rdtxt'>GY-ID not valid</div>")}
						if(num==5){$("#terr5").html("<div class='rdtxt'>GY-ID not valid</div>")}
					}
					else if(data.startsWith("team"))
					{
						//alert("if");
						var num=data.substring(5);
						if(num==1){$("#terr1").html("<div class='rdtxt'>Already Present in another team</div>")}
						if(num==2){$("#terr2").html("<div class='rdtxt'>Already Present in another team</div>")}
						if(num==3){$("#terr3").html("<div class='rdtxt'>Already Present in another team</div>")}
						if(num==4){$("#terr4").html("<div class='rdtxt'>Already Present in another team</div>")}
						if(num==5){$("#terr5").html("<div class='rdtxt'>Already Present in another team</div>")}
					}
					else if(data.startsWith('crtd')){
						$("#txtsub").hide();
						$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5)+"</span></div>");	
					}
					else{
						$("#txtsub").hide();
						var mtind=data.indexOf("Your");
						$("#tnmshow").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(6,(mtind-1))+"</span></div>");
						$("#tnmshow").append("<div class='label'><span class='tnote rdtxt'> "+ data.substring((mtind))+"</span></div>");
					
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


	/*	$("#wtxtsub").hide();
		$("#wplus").click(function(){
			$("#wplus").hide();
        $("#wtxtsub").show();
    	});
		
		*/

		//hiding divs for team wrk
		$("#wtxtsub1").hide();
		$("#wplus1").click(function(){
					if($('#wtxtsub2').is(':visible')){
						$("#wtxtsub2").hide();
						$("#wplus2").show();
					}
					if($('#wtxtsub3').is(':visible')){
						$("#wtxtsub3").hide();
						$("#wplus3").show();
					}
					$("#wplus1").hide();
					$("#wtxtsub1").show();
		});

		$("#wtxtsub2").hide();
		$("#wplus2").click(function(){
			if($('#wtxtsub1').is(':visible')){
						$("#wtxtsub1").hide();
						$("#wplus1").show();
					}
					if($('#wtxtsub3').is(':visible')){
						$("#wtxtsub3").hide();
						$("#wplus3").show();
					}
						$("#wplus2").hide();
					$("#wtxtsub2").show();
					
    	});

		$("#wtxtsub3").hide();
		$("#wplus3").click(function(){
						if($('#wtxtsub2').is(':visible')){
						$("#wtxtsub2").hide();
						$("#wplus2").show();
					}
					if($('#wtxtsub1').is(':visible')){
						$("#wtxtsub1").hide();
						$("#wplus1").show();
					}
						$("#wplus3").hide();
					$("#wtxtsub3").show();
		});
		
		/*team1 workshop submit begin*/
		$("#teamworkshops1").validate({
			rules:
	 		 {
				  wtname1:{
					  required:true
				  },
				   
	 		 },
	 		 messages:
	 		  {
				   wtname1:{
					   required:'Please enter your team name'
				   },
				   
			   },
            submitHandler: submitteamworkshops1
        });
		function submitteamworkshops1(){
			
            var data=$("#teamworkshops1").serialize();
			 $.ajax({
                type:'POST',
                url:'dbteamworkshops1.php',
                data: data,
                beforeSend:function(){
                     $("#submittmwrk1").val("sending.....");
                },
				success: function(data){
					data=data.trim();
					$("#submittmwrk1").val("Submit");
					$("#wtnm1").html('');$("#wterr11").html('');$("#wterr12").html('');$("#wterr13").html('');$("#wterr14").html('');$("#wterr15").html('');$("#wterr16").html('');
					
					if(data.startsWith("error"))
					{
						var num=data.substring(6);
						if(num==1){$("#wterr11").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==2){$("#wterr12").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==3){$("#wterr13").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==4){$("#wterr14").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==5){$("#wterr15").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==6){$("#wterr16").html("<div class='rdtxt'>GY-ID not valid</div>");}
					}
					else if(data.startsWith('team'))
					{
						//alert("if");
						var num=data.substring(5);
						if(num==1){$("#wterr11").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==2){$("#wterr12").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==3){$("#wterr13").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==4){$("#wterr14").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==5){$("#wterr15").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==6){$("#wterr16").html("<div class='rdtxt'>Already Present in three teams</div>");}
					}
					else if(data.startsWith('crtd')){
						$("#wtxtsub1").hide();
						var vind = data.lastIndexOf("tmid");
						$("#wtnmshow1").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5,vind-1)+"</span></div>");
						$("#teamdd").append($("<option style='width:100%'></option>").val(data.substring(vind+5)).html(data.substring(5,vind-1)));	
					}
					else if(data.startsWith('ter0')){
						$("#wtnm1").html("<div class='rdtxt'>Team name already exists</div>");
					}
					else{
						$("#wtxtsub1").hide();
						$("#wtnmshow1").append(data);
					}	
			}
			 });
		}
		
	
		/*team1 workshop submit end*/

		/*team2 workshop submit end*/
		$("#teamworkshops2").validate({
			rules:
	 		 {
				  wtname2:{
					  required:true
				  },
				   
	 		 },
	 		 messages:
	 		  {
				   wtname2:{
					   required:'Please enter your team name'
				   },
				   
			   },
            submitHandler: submitteamworkshops2
        });
		function submitteamworkshops2(){
			//alert('validate');
            var data=$("#teamworkshops2").serialize();
			 $.ajax({
                type:'POST',
                url:'dbteamworkshops2.php',
                data: data,
                beforeSend:function(){
                     $("#submittmwrk2").val("sending.....");
                },
				success: function(data){
					data=data.trim();
					$("#submittmwrk2").val("Submit");
					$("#wtnm2").html('');$("#wterr21").html('');$("#wterr22").html('');$("#wterr23").html('');$("#wterr24").html('');$("#wterr25").html('');$("#wterr26").html('');
					if(data.startsWith("error"))
					{
						var num=data.substring(6);
						if(num==1){$("#wterr21").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==2){$("#wterr22").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==3){$("#wterr23").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==4){$("#wterr24").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==5){$("#wterr25").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==6){$("#wterr26").html("<div class='rdtxt'>GY-ID not valid</div>");}
					}
					else if(data.startsWith('team'))
					{
						//alert("if");
						var num=data.substring(5);
						if(num==1){$("#wterr21").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==2){$("#wterr22").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==3){$("#wterr23").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==4){$("#wterr24").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==5){$("#wterr25").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==6){$("#wterr26").html("<div class='rdtxt'>Already Present in three teams</div>");}
					}
					else if(data.startsWith('crtd')){
						$("#wtxtsub2").hide();
						var vind = data.lastIndexOf("tmid");
						$("#wtnmshow2").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5,vind-1)+"</span></div>");
						$("#teamdd").append($("<option style='width:100%'></option>").val(data.substring(vind+5)).html(data.substring(5,vind-1)));	
					}
					else if(data.startsWith('ter0')){
						$("#wtnm2").html("<div class='rdtxt'>Team name already exists</div>");
					}
					else{
						$("#wtxtsub2").hide();
						$("#wtnmshow2").append(data);
					}
				}
			 });
		}
		
		/*team2 workshop submit end*/
		
		
		/*team3 workshop submit end*/
		$("#teamworkshops3").validate({
			rules:
	 		 {
				  wtname3:{
					  required:true
				  },
				   
	 		 },
	 		 messages:
	 		  {
				   wtname3:{
					   required:'Please enter your team name'
				   },
				   
			   },
            submitHandler: submitteamworkshops3
        });
		function submitteamworkshops3(){
			//alert('validate');
            var data=$("#teamworkshops3").serialize();
			 $.ajax({
                type:'POST',
                url:'dbteamworkshops3.php',
                data: data,
                beforeSend:function(){
                     $("#submittmwrk3").val("sending.....");
                },
				success: function(data){
					data=data.trim();
					$("#submittmwrk3").val("Submit");
					$("#wtnm3").html('');$("#wterr31").html('');$("#wterr32").html('');$("#wterr33").html('');$("#wterr34").html('');$("#wterr35").html('');$("#wterr36").html('');
					if(data.startsWith("error"))
					{
						var num=data.substring(6);
						if(num==1){$("#wterr31").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==2){$("#wterr32").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==3){$("#wterr33").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==4){$("#wterr34").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==5){$("#wterr35").html("<div class='rdtxt'>GY-ID not valid</div>");}
						if(num==6){$("#wterr36").html("<div class='rdtxt'>GY-ID not valid</div>");}
					}
					else if(data.startsWith('team'))
					{
						//alert("if");
						var num=data.substring(5);
						if(num==1){$("#wterr31").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==2){$("#wterr32").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==3){$("#wterr33").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==4){$("#wterr34").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==5){$("#wterr35").html("<div class='rdtxt'>Already Present in three teams</div>");}
						if(num==6){$("#wterr36").html("<div class='rdtxt'>Already Present in three teams</div>");}
					}
					else if(data.startsWith('crtd')){
						$("#wtxtsub3").hide();
						var vind = data.lastIndexOf("tmid");
						$("#wtnmshow3").html("<div class='label'>You are in team:&nbsp;&nbsp;<span class='tnote'> "+ data.substring(5,vind-1)+"</span></div>");
						$("#teamdd").append($("<option style='width:100%'></option>").val(data.substring(vind+5)).html(data.substring(5,vind-1)));	
					}
					else if(data.startsWith('ter0')){
						$("#wtnm3").html("<div class='rdtxt'>Team name already exists</div>");
					}
					else{
						$("#wtxtsub3").hide();
						$("#wtnmshow3").append(data);
					}
				}
			 });
		}
		
		/*team3 workshop submit end*/




		

});
