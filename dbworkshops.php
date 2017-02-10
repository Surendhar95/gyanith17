<?php
session_start();
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submitwrk']) && isset($_POST['workshops'])){
   //find whether present in table
      $select=$_POST['workshops'];

      
      $sql="SELECT * FROM workshops WHERE g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':gid'=>$g_id));
      $result=$stmt1->fetch();
			$gid = $result['g_id'];
      $wrks=$result[$select];
        
        //insert team id for workshop
         if($gid!=null){
         if(isset($_POST['teamdd'])){
               if($select=='game'){
          $sql="update workshops set teamgame=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));

          //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];

              if($emtt!=$g_id){
              $sql="update workshops set teamgame=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamgame'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));

                    //set 1 for workshop for team member
                    $sq='update workshops set game=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
              }
         }

      }
      else if($select=='plugdin'){
          $sql="update workshops set teamplugdin=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));

          //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];
             
             if($emtt!=$g_id){
              $sql="update workshops set teamplugdin=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamplugdin'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));
                     //set 1 for workshop for team member
                    $sq='update workshops set plugdin=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
             }
         }
      }
      else if($select=='control'){
          $sql="update workshops set teamcontrol=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));
      
          //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];
              
              if($emtt!=$g_id){
              $sql="update workshops set teamcontrol=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamcontrol'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));
                     //set 1 for workshop for team member
                    $sq='update workshops set control=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
              }
         }
      
      }
      else if($select=='renewate'){
          $sql="update workshops set teamrenewate=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));
              //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];
             
              if($emtt!=$g_id){
              $sql="update workshops set teamrenewate=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamrenewate'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));
                     //set 1 for workshop for team member
                    $sq='update workshops set renewate=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
              }
         }
      }
      else if($select=='crabot'){
          $sql="update workshops set teamcrabot=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));
              //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];
             
             if($emtt!=$g_id){
              $sql="update workshops set teamcrabot=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamcrabot'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));
                     //set 1 for workshop for team member
                    $sq='update workshops set crabot=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
             }
         }
      }
      else if($select=='take'){
          $sql="update workshops set teamtake=:td where g_id=:gid";
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$g_id));
              //SET TEAM ID FOR EVENT FOR TEAM MEMBERS
          $sql='select * from workshops where t_id1=:t1 || t_id2=:t1 || t_id3=:t1';
          $stmt3 = $db->prepare($sql);
          $stmt3->execute(array(':t1'=>$_POST['teamdd']));
          $result=$stmt3->fetchAll();
          foreach($result as $row){
              $emtt=$row['g_id'];
             
              if($emtt!=$g_id){
              $sql="update workshops set teamtake=:td where g_id=:gid";
              $stmt3 = $db->prepare($sql);
              //check for his presence in another team for the same workshop
              $ptg=$row['teamtake'];
              if($ptg==null){
                    $stmt3->execute(array(':td'=>$_POST['teamdd'],':gid'=>$emtt));
                     //set 1 for workshop for team member
                    $sq='update workshops set take=1 where g_id=:gid';
                    $stm=$db->prepare($sq);
                    $stm->execute(array(':gid'=>$emtt));
              }
              else{
                  echo 'eng One or more of the team member is present in another team for this workshop';
                  exit();

              }
              }
         }
      }
   }

}
     //$select=$_POST['workshops'];
     if($gid!=null)
    {  
      if($wrks=='0'){
      //echo $select.'<br/>';
      $sql = "UPDATE workshops SET ".$select."=1 WHERE g_id=:gid";
      $stmt2 = $db->prepare($sql);
      $stmt2->execute(array(':gid'=>$g_id));

      //update payment method 
      if(isset($_POST['pay'])){
          if($select=='game'){
         $sql = "UPDATE workshops SET paygame = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='plugdin'){
        $sql = "UPDATE workshops SET payplugdin = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
      else if($select=='control'){
        $sql = "UPDATE workshops SET paycontrol = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='renewate'){
        $sql = "UPDATE workshops SET payrenewate = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='crabot'){
        $sql = "UPDATE workshops SET paycrabot = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='take'){
        $sql = "UPDATE workshops SET paytake = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }        

      
      }


      if(isset($_POST['sbitxt'])){
    // $sql = "UPDATE workshops SET sbi = '".$_POST['sbitxt']."' WHERE g_id=:gid";
    // $stmt2 = $db->prepare($sql);
   //   $stmt2->execute(array(':gid'=>$g_id));


      if($select=='game'){
         $sql = "UPDATE workshops SET sbigame = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='plugdin'){
        $sql = "UPDATE workshops SET sbiplugdin = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
      else if($select=='control'){
        $sql = "UPDATE workshops SET sbicontrol = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='renewate'){
        $sql = "UPDATE workshops SET sbirenewate = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='crabot'){
        $sql = "UPDATE workshops SET sbicrabot = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='take'){
        $sql = "UPDATE workshops SET sbitake = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
      
   }

 

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

    //update payment method 
      if(isset($_POST['pay'])){
          if($select=='game'){
         $sql = "UPDATE workshops SET paygame = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='plugdin'){
        $sql = "UPDATE workshops SET payplugdin = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
      else if($select=='control'){
        $sql = "UPDATE workshops SET paycontrol = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='renewate'){
        $sql = "UPDATE workshops SET payrenewate = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='crabot'){
        $sql = "UPDATE workshops SET paycrabot = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='take'){
        $sql = "UPDATE workshops SET paytake = '".$_POST['pay']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }        

      
      }


    if(isset($_POST['sbitxt'])){
   //  $sql = "UPDATE workshops SET sbi='".$_POST['sbitxt']."' WHERE g_id=:gid";
   //  $stmt2 = $db->prepare($sql);
  //    $stmt2->execute(array(':gid'=>$g_id));
  if($select=='game'){
         $sql = "UPDATE workshops SET sbigame = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='plugdin'){
        $sql = "UPDATE workshops SET sbiplugdin = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
      else if($select=='control'){
        $sql = "UPDATE workshops SET sbicontrol = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='renewate'){
        $sql = "UPDATE workshops SET sbirenewate = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='crabot'){
        $sql = "UPDATE workshops SET sbicrabot = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }
     else if($select=='take'){
        $sql = "UPDATE workshops SET sbitake = '".$_POST['sbitxt']."' WHERE g_id=:gid";
         $stmt2 = $db->prepare($sql);
         $stmt2->execute(array(':gid'=>$g_id));
      }

      
   }

  

    echo "ins ".$select;
   }

   

}
}
catch(PDOException $e){
$e->getMessage();
}
?>