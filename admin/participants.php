<?php 
try{
	//include('db.php');
include('../dbcon.php');



//$dsn = 'mysql:dbname=login;host='.DB_HOST.';port='.DB_PORT;
//$db = new PDO($dsn, DB_USER, DB_PASS);

session_start();
$event=$_SESSION['event'];
?>
<html>
<body>
	<center>
<h2 style="text-align:center;color:black">Participants<h2>
	<h3 style="text-align:center;color:black"><?php echo $event; ?><h3>
</center>
<center>
<table class=" table  table-hover table-bgordered table-stripped"  style="width:90%">                   <!-- guidlines -->
<center>
<thead style="font-size:18px" >
<tr style='background-color:grey' class="">
<th  width=10%>SNo</th>
<th width=10%>GY-id</th>
<th width=20%>Name</th>
<th width=10%>Email</th>
<th width=20%>Gender</th>
<th width=20%>College</th>
<th width=20%>Phone</th>
<?php if($event=='antagon'){
	echo '<th width=20%>CodeChef username</th>';
}
if($event!='hospitality') { ?>
<th width=20%>Team ID</th>
<th width=20%>Team Name</th>
<?php
}
	if($event=='hospitality'){ ?>

		<th width=20%>Paid</th>
<?php	}
	if($event=='game' || $event=='plugdin' || $event=='control' || $event=='renewate' || $event=='crabot' || $event=='take')
	{ 
		echo '<th width=20%>SBI COLLECT</th>';
	} ?>
<tr>
</thead>
</center>


<div style='position:absolute;top:40px;left:100px' ><h4><b>Welcome <?php echo $_SESSION['name'] ?> </b></h4></div>
<?php
//for events
$sql='select events.t_id,events.g_id,users.g_id,users.name,users.email,users.gender,users.college,users.phone,team.tname from events inner join users on users.g_id = events.g_id LEFT JOIN team on events.t_id=team.t_id where events.'.$event.'=1';
$eve=$db->prepare($sql);

//for antagon
$sql='select events.t_id,events.g_id,events.codechef,users.g_id,users.name,users.email,users.gender,users.college,users.phone,team.tname from events inner join users on users.g_id = events.g_id LEFT JOIN team on events.t_id=team.t_id where events.'.$event.'=1';
$ant=$db->prepare($sql);

//for workshops
$sql='select workshops.t_id,workshops.g_id,workshops.sbi'.$event.',users.g_id,users.name,users.email,users.gender,users.college,users.phone,wrkteam.tname from workshops inner join users on users.g_id = workshops.g_id LEFT JOIN wrkteam on workshops.t_id=wrkteam.t_id where workshops.'.$event.'=1';
$wrk=$db->prepare($sql);

//for hospitality
$sql='select hospitality.g_id,hospitality.paid,users.g_id,users.name,users.email,users.gender,users.college,users.phone from hospitality inner join users on hospitality.g_id=users.g_id ';
$hos=$db->prepare($sql);


if($event == "dbugcbug"){
$eve->execute();
$result=$eve->fetchAll();
}

else if($event == "weblicate"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "enigma"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "antagon"){
$ant->execute();
$result=$ant->fetchAll();
}
else if($event == "sync"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "linkit"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "rush_hour"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "deadshot"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "burnout"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "copterx"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "speculate"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "techpursuit"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "detonatex"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "consilium"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "prastuti"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "ityuktha"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "cobweb"){
$eve->execute();
$result=$eve->fetchAll();
}
else if($event == "game"){
$wrk->execute();
$result=$wrk->fetchAll();
}
else if($event == "plugdin"){
$wrk->execute();
$result=$wrk->fetchAll();
}

else if($event == "control"){
$wrk->execute();
$result=$wrk->fetchAll();
}

else if($event == "renewate"){
$wrk->execute();
$result=$wrk->fetchAll();
}

else if($event == "crabot"){
$wrk->execute();
$result=$wrk->fetchAll();
}

else if($event == "take"){
$wrk->execute();
$result=$wrk->fetchAll();
}
else if($event == "hospitality"){
$hos->execute();
$result=$hos->fetchAll();
}

$refno='sbi'.$event;

$i=0;
foreach($result as $row)
{
	
	$i++;
echo"<center>";
	echo"<tbody style='font-size:15px'>";
	echo"<tr>";
	echo"<td  style='background-color:lightgrey;text-align:center;color:black;'><b>".$i."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['g_id']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['name']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['email']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['gender']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['college']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['phone']."</b></td>";
	if($event=='antagon'){
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['codechef']."</b></td>";	
	}
	if($event!='hospitality'){
		echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['t_id']."</b></td>";
 	    echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['tname']."</b></td>";
	}
	if($event=='game' || $event=='plugdin' || $event=='control' || $event=='renewate' || $event=='crabot' || $event=='take')
	{
		echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row[$refno]."</b></td>";
	}
	if($event == "hospitality"){
		echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['paid']."</b></td>";
	}
	echo"<tr>";
	echo"</tbody>";
	echo"</center>";
	
}
	

echo"
</table>
</center>

</div>
</div>";
?>
<div style='position:absolute;top:70px;right:90px'><button type='button' onClick="location.href='index.php'">Logout</button></div> 

<?php

}
catch(PDOException $e)
{
	$e->getMessage();
}
 ?>
</body>
 </html>
