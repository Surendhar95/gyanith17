<?php
include('../dbcon.php');
try{

if(isset($_POST['downloadbutn'])){
session_start();
$event=$_SESSION['event'];
        //for events
		$sql='select events.t_id,events.g_id,users.g_id,users.name,users.email,users.gender,users.college,users.phone,team.tname from events inner join users on users.g_id = events.g_id LEFT JOIN team on events.t_id=team.t_id where events.'.$event.'=1 order by events.g_id';
		$eve=$db->prepare($sql);

		//for antagon
		$sql='select events.t_id,events.g_id,events.codechef,users.g_id,users.name,users.email,users.gender,users.college,users.phone,team.tname from events inner join users on users.g_id = events.g_id LEFT JOIN team on events.t_id=team.t_id where events.'.$event.'=1 order by events.g_id';
		$ant=$db->prepare($sql);
		
		//for hospitality
		$sql='select hospitality.g_id,hospitality.paid,users.g_id,users.name,users.email,users.gender,users.college,users.phone from hospitality inner join users on hospitality.g_id=users.g_id order by hospitality.g_id';
		$hos=$db->prepare($sql);
		
		//for  workshop
		$sql='select workshops.team'.$event.',workshops.pay'.$event.',workshops.sbi'.$event.',users.g_id,users.name,users.email,users.gender,users.college,users.phone,wrkteam.tname from workshops inner join users on users.g_id = workshops.g_id LEFT JOIN wrkteam on workshops.team'.$event.'=wrkteam.t_id where workshops.'.$event.'=1 order by workshops.g_id';
		$wrk=$db->prepare($sql);
		

		if($event == "dbugcbug" || $event == "cobweb" || $event == "ityuktha" || $event == "prastuti" || $event == "consilium" || $event == "detonatex" || $event == "techpursuit" || $event == "burnout" || $event == "speculate" || $event == "copterx" || $event == "weblicate" || $event == "enigma" || $event == "sync" || $event == "linkit" || $event == "rush_hour" || $event == "deadshot"){
		$eve->execute();
		$result=$eve->fetchAll();
		}
		
		else if($event == "antagon"){
		$ant->execute();
		$result=$ant->fetchAll();
		}
		
		else if($event == "game" || $event == "plugdin" || $event == "control" || $event == "renewate" || $event == "crabot" || $event == "take"){
		$wrk->execute();
		$result=$wrk->fetchAll();
		}
		

		else if($event == "hospitality"){
		$hos->execute();
		$result=$hos->fetchAll();
		
        }
$refno='sbi'.$event;
$paymode='pay'.$event;
$teamid='team'.$event;




    date_default_timezone_set("Asia/Calcutta");
    $filename = $event.date("Y/m/d") .date("h:i:sa").".csv";
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Expires: 0");
    $content = array();

    $title=array('SNo','GY-id','Name','Email','Gender','College','Phone');
    if($event=='antagon'){
         array_push($title, 'CodeChef username');
    }
    if($event!='hospitality'){
         array_push($title, 'Team ID','Team Name');
    }
    if($event=='hospitality'){
         array_push($title, 'Paid');
    }
    if($event=='game' || $event=='plugdin' || $event=='control' || $event=='renewate' || $event=='crabot' || $event=='take')
	{
             array_push($title, 'Payment Mode','Reference number');
    }
    $refno='sbi'.$event;
$paymode='pay'.$event;
$teamid='team'.$event;

    $i=0;
    foreach ($result as $rs) {
    $i++;
    $row = array();
    $row[] = $i;
    $row[] = stripslashes($rs["g_id"]);
    $row[] = stripslashes($rs["name"]);
    $row[] = stripslashes($rs["email"]);
    $row[] = stripslashes($rs["gender"]);
    $row[] = stripslashes($rs["college"]);
    $row[] = stripslashes($rs["phone"]);
    if($event=='antagon'){
        $row[] = stripslashes($rs["codechef"]);
    }
    if($event!='hospitality' && $event!='game' && $event!='plugdin' && $event!='control' && $event!='renewate' && $event!='crabot' && $event!='take'){
         $row[] = stripslashes($rs["t_id"]);
    }
    if($event=='game' || $event=='plugdin' || $event=='control' || $event=='renewate' || $event=='crabot' || $event=='take')
	{
        $row[] = stripslashes($rs[$teamid]);
    }
    if($event!='hospitality'){
		$row[] = stripslashes($rs['tname']);
 	    
	}
	if($event == "hospitality"){
        $row[] = stripslashes($rs['paid']);
		
	}
	if($event=='game' || $event=='plugdin' || $event=='control' || $event=='renewate' || $event=='crabot' || $event=='take')
	{
        $row[] = stripslashes($rs[$paymode]);
        $row[] = stripslashes($rs[$refno]);
		
	}
	

    $content[] = $row;
    }
    $output = fopen('php://output', 'w');
    fputcsv($output,$title);
    
    foreach ($content as $con) {
        
        fputcsv($output, $con);
    }
    }
}
catch(PDOException $e)
{echo 'connected fail'.$e;}



  ?>