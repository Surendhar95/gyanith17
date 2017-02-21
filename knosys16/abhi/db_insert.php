<?php
try{
$host='mysql:host=127.0.0.1;port=3307;dbname=gyanith;charset=utf8';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'connected succes';
$name='anbu';
$g_id='gykjdfs';

$email='anv@gm.com';
$passwd='b';
$gender='M';
$college='lf';
$phone='43';

$stmt = $db->prepare("INSERT INTO users (g_id,name,email,passwd,gender,college,phone) VALUES (:g_id,:name,:email,:passwd,:gender,:college,:phone)");
            $stmt->bindParam(':g_id', $g_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passwd', $passwd);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':college', $college);
            $stmt->bindParam(':phone', $phone);
            // insert a row
           //       $name='anbu';
  //      $email='anv@gm.com';
  //      $passwd='b';
   //     $gender='M';
  //      $college='lf';
   //     $phone='43';
            $res=$stmt->execute();
            echo $res;
            }

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>

