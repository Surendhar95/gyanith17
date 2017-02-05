<?php
try{
$host='mysql:host=127.0.0.1;port=3307;dbname=gyanithserver;charset=utf8';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'connected succes';
}

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>