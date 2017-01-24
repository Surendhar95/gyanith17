<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<?php session_start();?>
PROFILE<br/>
GY-ID:<span id="gid"><?=$_SESSION['g_id'];?></span><br/>
NAME:<span id="pname"><?=$_SESSION['name'];?></span><br/>
EMAIL:<span id="pemail"><?=$_SESSION['email'];?></span><br/>
<form id="drop">
<select name="events">
<option value="dbugcbug">D-Bug C-Bug</option>
<option value="weblicate">Weblicate</option>
<option value="enigma">Enigma</option>
<option value="antagon">Antagon</option>
</select>
</form>
</body>
</html>