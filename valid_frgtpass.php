<?php 
session_start();
try{
    include("dbcon.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['fsubmit'])){
        $email = $_POST['femail1'];
        $passwd=$_POST['fpassword'];
       // echo $email." ".$passwd;
        $passwd=md5(sha1($passwd));
        //echo '<br/>'.$passwd;
        //check presence of email
        $stmt1=$db->prepare('SELECT g_id FROM users WHERE email=:email');
        $stmt1->execute(array(':email'=>$email));
        $result=$stmt1->fetch();
        $gid=$result['g_id'];
       // echo $gid;

        if($gid!=null){
            $sql = "UPDATE users SET passwd=:passw where email=:email";//.$select."=1 WHERE g_id=:gid";
        $stmt2 = $db->prepare($sql);
        $stmt2->execute(array(':passw'=>$passwd,':email'=>$email));
      echo 'success';
        }
        else{
            echo 'not';
        }
        

        
      
    }
	
}
catch(PDOException $e){
	$e->getMessage();
}
?>