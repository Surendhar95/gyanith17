<?php
session_start();
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submittmwrk'])){
     //insert team name in wrkteam table and update tid in workshops table
      $tnm=$_POST['wtname'];
      $sql="insert into wrkteam(g_id,tname) values (:gid,:tnm)";
      $stmt3 = $db->prepare($sql);
      $stmt3->execute(array(':gid'=>$g_id,':tnm'=>$tnm));
      

      //getting id
        $sql="SELECT t_id FROM wrkteam WHERE tname=:tnm and g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':tnm'=>$tnm,':gid'=>$g_id));
      $result=$stmt1->fetch();
      $tid=$result['t_id'];

      //update in workshops table
       $sql = "update workshops set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$g_id));
      
      if(!empty($_POST['wemate1'])){
        $emate1=$_POST['wemate1'];
        //check presence of mate
        $sql="SELECT * FROM events WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        $stmt1->execute(array(':gid'=>$emate1));
        $result=$stmt1->fetch();
		  	$emt1 = $result['g_id'];
      
      if($emt1!=null){
        //update tid in events table
       $sql = "update events set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt1));
      echo 'success '.$tnm;
      }
      else{
        echo 'Your team member '.$emt1.'has not registered with any events';
      }
     /* else{
        $sql="insert into events(g_id,t_id) values (:gid,:tid)";
   $stmt3 = $db->prepare($sql);
   $stmt3->execute(array(':gid'=>$emt1,':tid'=>$tid));

      }*/

      }
      if(!empty($_POST['wemate2'])){
        $emate2=$_POST['wemate2'];
        //check presence of mate
        $sql="SELECT * FROM events WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        $stmt1->execute(array(':gid'=>$emate2));
        $result=$stmt1->fetch();
		  	$emt2 = $result['g_id'];
         if($emt2!=null){
        //update tid in events table
       $sql = "update events set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt2));
      echo 'success '.$tnm;
      }
        else{
        echo 'Your team member '.$emt2.' has not registered with any events';
      }
      }

      if(!empty($_POST['wemate3'])){
        $emate3=$_POST['wemate3'];
        //check presence of mate
        $sql="SELECT * FROM events WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        $stmt1->execute(array(':gid'=>$emate3));
        $result=$stmt1->fetch();
		  	$emt3 = $result['g_id'];
        if($emt3!=null){
        //update tid in events table
       $sql = "update events set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt3));
     echo 'success '.$tnm;
      }
      else{
        echo 'Your team member '.$emt3.'has not registered with any events';
      }
      
      }
			
      if(!empty($_POST['wemate4'])){
        $emate4=$_POST['wemate4'];
         //check presence of mate
        $sql="SELECT * FROM events WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        $stmt1->execute(array(':gid'=>$emate4));
        $result=$stmt1->fetch();
		  	$emt4 = $result['g_id'];
      
      if($emt4!=null){
        //update tid in events table
       $sql = "update events set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt4));
      echo 'success '.$tnm;
      }
      else{
        echo 'Your team member '.$emt4.'has not registered with any events';
      }
      }

      if(!empty($_POST['wemate5'])){
        $emate5=$_POST['wemate5'];
        //check presence of mate
        $sql="SELECT * FROM events WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        $stmt1->execute(array(':gid'=>$emate5));
        $result=$stmt1->fetch();
		  	$emt5 = $result['g_id'];
      
      if($emt5!=null){
        //update tid in events table
       $sql = "update events set t_id=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt5));
      echo 'success '.$tnm;
      }
      else{
        echo 'Your team member '.$emt5.'has not registered with any events';
      }
      }
      echo 'success '.$tnm;
      
}
}
catch(PDOException $e){
$e->getMessage();
}
?>