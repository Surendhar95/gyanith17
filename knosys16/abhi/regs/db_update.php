<?php
    try
    {
        require 'C:/wamp/www/knosys16/abhi/db/dbcon.php';
        $fname=$_POST['first_name'];
        $sname=$_POST['second_name'];
        $email=$_POST['email'];
        $passwd=$_POST['password'];
        $gender=$_POST['sex'];
        $college=$_POST['college'];
        $phone=$_POST['phone'];

        $name=$fname." ".$sname;

echo $name.'<br/>'.$email.'<br/>.'.$passwd.'<br/>.'.$gender.'<br/>.'.$college.'<br/>.'.$phone.'<br/>.';
        //password hasshing will go here

        if($gender=='female')
            $gender='F';
        else if($gender=='male')
            $gender='M';
    
       
$sql = "SELECT MAX(id) FROM users;";
$statement = $db->prepare($sql);
$statement->execute(); // no need to add `$sql` here, you can take that out
$id = $statement->fetchColumn();
echo $id;
//echo $last_id;
$id=$id+1;  
//$last_id=2;
$g_id='GY17';
$g_id=$g_id . str_pad($id,3,'0',STR_PAD_LEFT);
echo $g_id."<br/>";

//hashing sha1 then md5
$passwd=SHA1($passwd);
echo ("password sha1".$passwd);
$passwd=md5($passwd);
echo 'password md5'.$passwd;

        // prepare sql and bind parameters
            $stmt = $db->prepare("INSERT INTO users (g_id,name,email,passwd,gender,college,phone) VALUES (:g_id,:name,:email,:passwd,:gender,:college,:phone)");
            $stmt->bindParam(':g_id', $g_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passwd', $passwd);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':college', $college);
            $stmt->bindParam(':phone', $phone);
            // insert a row
            $stmt->execute();
            echo 'inserted';
            
    }
    catch(PDOException $e)
    {
        echo 'connected fail'.$e;
    }

?>