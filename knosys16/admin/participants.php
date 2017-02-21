<?php 
try{
	//include('db.php');
include('dbvars.php');



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
<th width=10%>Kid</th>
<th width=20%>Email</th>
<th width=10%>Username</th>
<th width=20%>Fullname</th>
<th width=20%>Sex</th>
<th width=20%>College</th>
<th width=20%>Phone</th>



<tr>
</thead>
</center>
<div style='position:absolute;top:40px;left:100px' ><h4><b>Welcome <?php echo $_SESSION['name'] ?> </b></h4></div>
<?php


if($event == "Hackathon"){
$stmt=$db->prepare("SELECT * from hackathon NATURAL JOIN   users   where hackathon.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}


else if($event=="Optimus"){
$stmt=$db->prepare("SELECT * from optimus NATURAL JOIN  users where users.kid=optimus.kid ");
$stmt->execute();
$result=$stmt->fetchAll();
}

else if($event == "Antagon"){
$stmt=$db->prepare("SELECT * from antagon INNER JOIN users   where antagon.Kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}
else if($event=="CobWeb"){
$stmt=$db->prepare("SELECT * from cobweb NATURAL JOIN   users   where cobweb.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}

 else if($event="Android"){
$stmt=$db->prepare("SELECT * from android NATURAL JOIN   users   where android.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}

else if($event="Linux"){
$stmt=$db->prepare("SELECT * from linux NATURAL JOIN   users   where linux.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}
 else if($event="DebugCbug"){
$stmt=$db->prepare("SELECT * from dbug NATURAL JOIN   users   where dbug.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}

 else if($event="Codemath"){
$stmt=$db->prepare("SELECT * from dbug NATURAL JOIN   users   where code_math.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}
 else if($event="Hackpro"){
$stmt=$db->prepare("SELECT * from dbug NATURAL JOIN   users   where hackpro.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}
 else if($event="Ityuktha"){
$stmt=$db->prepare("SELECT * from dbug NATURAL JOIN   users   where ityuktha.kid=users.kid");
$stmt->execute();
$result=$stmt->fetchAll();
}


/*
if($event='ityuktha'){
$stmt=$db->prepare("SELECT * FROM  users   where 'ityuktha'=1");
$stmt->execute();
$result=$stmt->fetchAll();
}*/
//include('register_connect.php');



//$stmt=$db->prepare("SELECT * FROM  users   where cobweb=1");
//$stmt->execute();
//$result=$stmt->fetchAll();



$i=0;
foreach($result as $row)
{
	
	$i++;
echo"<center>";
	echo"<tbody style='font-size:15px'>";
	echo"<tr>";
	echo"<td  style='background-color:lightgrey;text-align:center;color:black;'><b>".$i."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Kid']."</b></td>";
	
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Email']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Username']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Fullname']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Sex']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['College']."</b></td>";
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['Phone']."</b></td>";
		
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
