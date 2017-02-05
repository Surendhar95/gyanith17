<?php 
try{
	//include('db.php');
//include('dbcon.php');
$host='mysql:host=127.0.0.1;port=3307;dbname=gyanithserver;charset=utf8';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'connected succes';
$sql='select events.t_id,events.g_id,events.weblicate,users.g_id,users.name,users.email,users.gender,users.college,users.phone,team.tname from events inner join users on users.g_id = events.g_id LEFT JOIN team on events.t_id=team.t_id where events.'.$events.'=1';

$stmt=$db->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();



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
	echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['t_id']."</b></td>";
   echo"<td style='background-color:lightgrey;text-align:center;color:black;'><b>".$row['tname']."</b></td>";
		
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
