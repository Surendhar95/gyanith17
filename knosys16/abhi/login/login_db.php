<?php
try{
require 'db/dbcon.php';
$email=$_POST['email'];
$passwd=$_POST['password'];

// prepare sql and bind parameters
    $stmt = $db->prepare("INSERT INTO main_reg  VALUES (:uname,:email,:passwd,:fname,:gender,:college,:phone)");
    $stmt->bindParam(':uname', $uname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':passwd', $passwd);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':phone', $phone);

    // insert a row
    $stmt->execute();
}
catch(PDOException $e)
{echo 'connected fail'.$e;}
//
?>