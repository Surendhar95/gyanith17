<?php
try{
$host='mysql:host=127.0.0.1;port=3307;dbname=gyanith;charset=utf8';
$username='root';
$password='';
$db=new PDO($host,$username,$password);
echo 'connected succes';

$sql = "SELECT MAX(id) FROM users;";
$statement = $db->prepare($sql);
$statement->execute(); // no need to add `$sql` here, you can take that out
$item_id = $statement->fetchColumn();
echo $item_id;
  
}

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>