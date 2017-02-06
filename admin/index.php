<html>
<body>

<?php 
session_start();
if(isset($_POST['submit']))
{
$pass=$_POST['pass'];
$id=$_POST['id'];
$event=$_POST['event'];

$_SESSION['event']=$event;
$_SESSION['name']=$_POST['name'];
if($pass == 'gyanith17nitpy' && $id == 'gyanith')
        header("Location:participants.php");

else{
        echo "<center>
        <h3>Sorry your credentials are wrong .Try again!!</h3>
</center>";
        
        }
}
?>
</br>

<form action="" method="POST">

<fieldset>
        <legend>
                <h3>Event Coordinator Login:</h3></legend></br>
Eventcoordinator ID :<input  type='text' name='id'value="gyanith"></br></br>
Eventcoordinator Name :<input  type='text' name='name'></br></br>
 Event Name :<select name="event">

                <option value="dbugcbug">D-Bug C-Bug</option>
                <option value="weblicate">Weblicate</option>
                <option value="enigma">Enigma</option>
                <option value="antagon">Antagon</option>
                <option value="sync">SYNC</option>
                <option value="linkit">Linkit</option>
                <option value="rush_hour">Rush Hour</option>
                <option value="deadshot">DeadShot</option>
                <option value="burnout">Burn out</option>
                <option value="copterx">CopterX</option>
                <option value="speculate">Speculate</option>
                <option value="techpursuit">TechPursuit</option>
                <option value="detonatex">Detonatex</option>
                <option value="consilium">Consilium</option>
                <option value="ityuktha">Ityuktha</option>
                <option value="prastuti">Prastuti</option>
                <option value="cobweb">Cobweb</option>
                <option value="game">Game Development Using VR</option>
                <option value="plugdin"> Get Plugdin - jQuery Workshop</option>
                <option value="control">Take Control - Swarm Robotics</option>
                <option value="renewate">Solar Smart Energy System</option>
                <option value="crabot">Crabot</option>
                <option value="take"> Take Off - RC Plane Designing</option>
		<option value="hospitality"> Hospitality</option>
				


        </select>
</br></br>
Password :<input type='password' name='pass' ></br></br></br>
<input type='submit' name='submit' value='Enter'> </input>
</fieldset>
</form>
</body>

</html>