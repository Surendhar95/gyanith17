<?php
session_start();
	
	try{
		
include("dbcon.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['login1'])){
			$email=$_POST['email1'];
			$pass=$_POST['password1'];
			$pass = md5(sha1($pass));
			
			$stmt=$db->prepare('SELECT name FROM users WHERE email=:mail ');
			$stmt->execute(array(':mail'=>$email));

			$result=$stmt->fetch();
			$name = $result['name'];
			
			
			if($name != NULL)
			{
				$stmt1=$db->prepare('SELECT g_id,name,active FROM users WHERE email=:mail AND passwd=:pass');
			$stmt1->execute(array(':mail'=>$email,':pass'=>$pass));
			$result2=$stmt1->fetch();
			$g_id=$result2['g_id'];
			$user = $result2['name'];
			$active=$result2['active'];
						//$status = $result2['Status'];
			
			if($user != NULL && $active == '1')
			{
				//$email = $result2['Email'];
				$g_id = $result2['g_id'];
				$_SESSION['g_id']= $g_id;
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			//for cobweb
			$stmt2=$db->prepare('SELECT cobweb FROM events WHERE g_id=:gid');
			$stmt2->execute(array(':gid'=>$g_id));
			$result3=$stmt2->fetch();
			$cob=$result3['cobweb'];
			if($cob=='1'){
				$_SESSION['cobweb']='cob';
			}
			//end cobweb
				echo 'logged';
			}
			else if($user == NULL){
				echo 'Incorrect password.Try again';
			}

			else{
				echo "Account is not activated.Activate to login.";
			}


			
		}
		else
			echo 'This email is not registered.Please register to login. ';
		

 }
}  
catch(PDOException $e){
    $e->getMessage();
}
  ?>