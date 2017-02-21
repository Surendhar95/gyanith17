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
if($pass == 'knosys16nitpy' && $id == 'knosys')
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
Eventcoordinator ID :<input  type='text' name='id' value='id' ></br></br>
Eventcoordinator Name :<input  type='text' name='name' value='admin'></br></br>
 Event Name :<select name="event">

                <option value="Android">android</option>
                <option value="Antagon">antagon</option>
                <option value="CobWeb">cobweb</option>
                <option value="Codemath">codemath</option>
                <option value="DebugCbug">debugCbug</option>
                <option value="Hackathon" >hackathon</option>
                  <option value="Hackpro">hackpro</option>

                <option value="Ityuktha">ityuktha</option>
                <option value="Linux">linux</option>
              
                <option value="Optimus">optimus</option>
                <!-- <option value=""></option> -->
               
        </select>
</br></br>
Password :<input type='password' name='pass' ></br></br></br>
<input type='submit' name='submit' value='Enter'> </input>
</fieldset>
</form>
</body>

</html>