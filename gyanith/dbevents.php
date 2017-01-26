<?php
session_start();
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submiteve'])){
   //find whether present in table
      $select=$_POST['events'];
      // check for team events
      $teame=0;
      if($select!='dbugcbug' && $select!='weblicate' && $select!='antagon'){
        $teame=1;
      }
      

      $sql="SELECT * FROM events WHERE g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':gid'=>$g_id));
      $result=$stmt1->fetch();
			$gid = $result['g_id'];
      $events=$result[$select];
     
     if($gid!=null)
    {  
      if($events=='0'){
      //echo $select.'<br/>';
      $sql = "UPDATE events SET ".$select."=1 WHERE g_id=:gid";
      $stmt2 = $db->prepare($sql);
      $stmt2->execute(array(':gid'=>$g_id));
      echo "upd ".$select." bltm ".$teame;
      }
      else{
        echo 'Already registered';
      }

   }
   else{
     $sql="insert into events(g_id,".$select.") values (:gid,1)";
     $stmt3 = $db->prepare($sql);
    $stmt3->execute(array(':gid'=>$g_id));
    echo "ins ".$select." bltm ".$teame;
   }

}
}
catch(PDOException $e){
$e->getMessage();
}
?>