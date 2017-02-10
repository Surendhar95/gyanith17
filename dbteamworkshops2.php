<?php
session_start();
try{
include("dbcon.php");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$g_id=$_SESSION['g_id'];
if(isset($_POST['submittmwrk2'])){
     //insert team name in wrkteam table and update tid in workshops table
      $tnm=$_POST['wtname2'];
      //check for presence of tname and gid in wrkteam table
      $sql="select * from wrkteam where g_id=:gid && tname=:tnm";
      $stmt3 = $db->prepare($sql);
      $stmt3->execute(array(':gid'=>$g_id,':tnm'=>$tnm));
      $res=$stmt3->fetch();
      $tn=$res['tname'];
      if($tn==null){
            $sql="insert into wrkteam(g_id,tname) values (:gid,:tnm)";
            $stmt3 = $db->prepare($sql);
            $stmt3->execute(array(':gid'=>$g_id,':tnm'=>$tnm));
      }
      else{
            echo 'ter0 Team name already exists';exit();
      }
      //getting id
      $sql="SELECT t_id FROM wrkteam WHERE tname=:tnm and g_id=:gid";
      $stmt1 = $db->prepare($sql);
      $stmt1->execute(array(':tnm'=>$tnm,':gid'=>$g_id));
      $result=$stmt1->fetch();
      $tid=$result['t_id'];
     
     //check for presence of creator in workshops table
      $sql="SELECT * FROM workshops WHERE g_id=:gid";
      $stmt1 = $db->prepare($sql);
       $stmt1->execute(array(':gid'=>$g_id));
      $result=$stmt1->fetch();
      $gid = $result['g_id'];
      //update in workshops table
      if($gid!=null){
       $sql = "update workshops set t_id2=:tid where g_id=:gid";
       $stmt2 = $db->prepare($sql);
      $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$g_id));
      }
      else{
           $sql="insert into workshops(g_id,t_id2) values (:gid,:tid)";
             $stmt3 = $db->prepare($sql);
             $stmt3->execute(array(':gid'=>$g_id,':tid'=>$tid));
  
      }
      //validate gid for team membe
        $valid1=0;$valid2=0;$valid3=0;$valid4=0;$valid5=0;$valid6=0;
       
        $sql="SELECT * FROM users WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);

        if(!empty($_POST['wemate21'])){
          $emate1=$_POST['wemate21'];
          if($emate1!=$g_id){
          $stmt1->execute(array(':gid'=>$emate1));
          $result=$stmt1->fetch();
          $gid1 = $result['g_id'];
          if($gid1==null){
                echo 'error 1';
                exit();
           }
          $valid1=1;
          }
        }
        if(!empty($_POST['wemate22'])){
          $emate2=$_POST['wemate22'];
           if($emate2!=$g_id){
          $stmt1->execute(array(':gid'=>$emate2));
          $result=$stmt1->fetch();
          $gid2 = $result['g_id'];
          if($gid2==null){echo 'error 2'; exit(); }
          $valid2=1;
        }}
        if(!empty($_POST['wemate23'])){
          $emate3=$_POST['wemate23'];
           if($emate3!=$g_id){
          $stmt1->execute(array(':gid'=>$emate3));
          $result=$stmt1->fetch();
          $gid3 = $result['g_id'];
          if($gid3==null){echo 'error 3'; exit(); }
          $valid3=1;
        }}
        if(!empty($_POST['wemate24'])){
          $emate4=$_POST['wemate24'];
           if($emate4!=$g_id){
          $stmt1->execute(array(':gid'=>$emate4));
          $result=$stmt1->fetch();
          $gid4 = $result['g_id'];
          if($gid4==null){echo 'error 4'; exit(); }
          $valid4=1;
        }}
        if(!empty($_POST['wemate25'])){
          $emate5=$_POST['wemate25'];
           if($emate5!=$g_id){
          $stmt1->execute(array(':gid'=>$emate5));
          $result=$stmt1->fetch();
          $gid5 = $result['g_id'];
          if($gid5==null){echo 'error 5'; exit(); }
          $valid5=1;
        }}
        if(!empty($_POST['wemate26'])){
          $emate6=$_POST['wemate26'];
           if($emate6!=$g_id){
          $stmt1->execute(array(':gid'=>$emate6));
          $result=$stmt1->fetch();
          $gid6 = $result['g_id'];
          if($gid6==null){echo 'error 6'; exit(); }
          $valid6=1;
        }}

         //statemnt prepare for presence of mate in workshop table
        $sql="SELECT * FROM workshops WHERE g_id=:gid";
        $stmt1 = $db->prepare($sql);
        
         //update tid for workshops table
        $sql = "update workshops set t_id1=:tid where g_id=:gid";
        $stmt2 = $db->prepare($sql);
         $sql = "update workshops set t_id2=:tid where g_id=:gid";
        $stmt4 = $db->prepare($sql);
         $sql = "update workshops set t_id3=:tid where g_id=:gid";
        $stmt5 = $db->prepare($sql);

      //statement prepare for insert into workshops of mate
       $sql="insert into workshops(g_id,t_id2) values (:gid,:tid)";
       $stmt3 = $db->prepare($sql);

       if($valid1==1)
       {
                  $stmt1->execute(array(':gid'=>$emate1));
                  $result=$stmt1->fetch();
                  $emt1 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt1!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt1));
                  }
                  else if($emt1!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt1));
                  }
                  else if($emt1!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt1));
                  }
                  else if($emt1==null){
                        $stmt3->execute(array(':gid'=>$emate1,':tid'=>$tid));
                  }
                  else
                 {  echo 'team 1'; exit();
                }
      }
      if($valid2==1)
       {
                  $stmt1->execute(array(':gid'=>$emate2));
                  $result=$stmt1->fetch();
                  $emt2 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt2!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt2));
                  }
                  else if($emt2!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt2));
                  }
                  else if($emt2!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt2));
                  }
                  else if($emt2==null){
                        $stmt3->execute(array(':gid'=>$emate2,':tid'=>$tid));
                  }
                  else
                  {  echo 'team 2'; exit();
                  }
      }

      if($valid3==1)
       {
                  $stmt1->execute(array(':gid'=>$emate3));
                  $result=$stmt1->fetch();
                  $emt3 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt3!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt3));
                  }
                  else if($emt3!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt3));
                  }
                  else if($emt3!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt3));
                  }
                  else if($emt3==null){
                        $stmt3->execute(array(':gid'=>$emate3,':tid'=>$tid));
                  }
                  else
                  {  echo 'team 3'; exit();
                  }
      }
      if($valid4==1)
       {
                  $stmt1->execute(array(':gid'=>$emate4));
                  $result=$stmt1->fetch();
                  $emt4 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt4!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt4));
                  }
                  else if($emt4!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt4));
                  }
                  else if($emt4!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt4));
                  }
                  else if($emt4==null){
                        $stmt3->execute(array(':gid'=>$emate4,':tid'=>$tid));
                  }
                  else
                  {  echo 'team 4'; exit();
                  }
      }
      
      if($valid5==1)
       {
                  $stmt1->execute(array(':gid'=>$emate5));
                  $result=$stmt1->fetch();
                  $emt5 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt5!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt5));
                  }
                  else if($emt5!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt5));
                  }
                  else if($emt5!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt5));
                  }
                  else if($emt5==null){
                        $stmt3->execute(array(':gid'=>$emate5,':tid'=>$tid));
                  }
                  else
                  {  echo 'team 5'; exit();
                  }
      }
      
      if($valid6==1)
       {
                  $stmt1->execute(array(':gid'=>$emate6));
                  $result=$stmt1->fetch();
                  $emt6 = $result['g_id'];
                  $etid1=$result['t_id1'];
                  $etid2=$result['t_id2'];
                  $etid3=$result['t_id3'];
                  if($emt6!=null && $etid1==null){
                        $result=$stmt2->execute(array(':tid'=>$tid,':gid'=>$emt6));
                  }
                  else if($emt6!=null && $etid2==null){
                        $result=$stmt4->execute(array(':tid'=>$tid,':gid'=>$emt6));
                  }
                  else if($emt6!=null && $etid3==null){
                        $result=$stmt5->execute(array(':tid'=>$tid,':gid'=>$emt6));
                  }
                  else if($emt6==null){
                        $stmt3->execute(array(':gid'=>$emate6,':tid'=>$tid));
                  }
                  else
                  {  echo 'team 6'; exit();
                  }
      }
       echo 'crtd '.$tnm.' tmid '.$tid;
}
  
}
catch(PDOException $e){
$e->getMessage();
}
?>