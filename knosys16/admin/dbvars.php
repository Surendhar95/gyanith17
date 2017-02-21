<?php
try{
$host='mysql:host=127.0.0.1;port=3307;dbname=knosys16;charset=utf8';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
echo 'connected succes';
}

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>