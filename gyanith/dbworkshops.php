<?php
session_start();
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submitwrk'])){
   //find whether present in table
      $select=$_POST['workshops'];
      $sql="SELECT * FROM workshops WHERE g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':gid'=>$g_id));
      $result=$stmt1->fetch();
			$gid = $result['g_id'];
      $wrks=$result[$select];

     //$select=$_POST['workshops'];
     if($gid!=null)
    {  
      if($wrks=='0'){
      //echo $select.'<br/>';
      $sql = "UPDATE workshops SET ".$select."=1 WHERE g_id=:gid";
      $stmt2 = $db->prepare($sql);
      $stmt2->execute(array(':gid'=>$g_id));
      echo "upd ".$select;
      }
      else{
        echo "Already registered";
      }
   }
   else{
     $sql="insert into workshops(g_id,".$select.") values (:gid,1)";
     $stmt3 = $db->prepare($sql);
    $stmt3->execute(array(':gid'=>$g_id));
    echo "ins ".$select;
   }

}
}
catch(PDOException $e){
$e->getMessage();
}
?>