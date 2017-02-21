<?php
session_start();
	
	try{
		
include("dbvars.php");
//$db=new PDO("mysql:host=$host;dbname=$dbase",$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	if(isset($_POST['login'])){
			$email=$_POST['email'];
			$pass=$_POST['password'];
			$pass = md5($pass);

			$stmt=$db->prepare('SELECT Username FROM users WHERE Email=:mail ');
			$stmt->execute(array(':mail'=>$email));

			$result=$stmt->fetch();
			$username = $result['Username'];
			
			
			if($username != NULL)
			{
				$stmt1=$db->prepare('SELECT Kid,Username,Email,Status FROM users WHERE Email=:mail AND Password=:pass');
			$stmt1->execute(array(':mail'=>$email,':pass'=>$pass));
			$result2=$stmt1->fetch();
			$user = $result2['Username'];
			
			$status = $result2['Status'];
			
			if($user != NULL && $status == 'active'){
				$email = $result2['Email'];
				$kid = $result2['Kid'];
				$_SESSION['kid']= $kid;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
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