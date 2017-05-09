<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>EiEi</title>
	<meta http-equiv="refresh" content="1; url=edit.php"/>
</head>
<body>
<center>
แก้ไขข้อมูลแล้ว
<?php
$sqlquery = "UPDATE intoprofile SET profileinfo = '$_POST[infoprofile]' WHERE id ='".$_SESSION[UserID]."'";
$results =$mysqli->query($sqlquery);

$sqlquerytwo = "UPDATE intoprofile SET link1 = '$_POST[link1]',link2 = '$_POST[link2]',link3 = '$_POST[link3]',link4 = '$_POST[link4]' WHERE id ='".$_SESSION[UserID]."'";
$resultstwo =$mysqli->query($sqlquerytwo);

$sqlquerythree = "UPDATE intoprofile SET relationship = '$_POST[relationship]',address = '$_POST[address]',phonenumber = '$_POST[phonenumber]',email = '$_POST[email]' WHERE id ='".$_SESSION[UserID]."'";
$resultsthree =$mysqli->query($sqlquerythree);

$sqlqueryfour = "UPDATE user SET birthday = '$_POST[birthday]',age = '$_POST[age]' WHERE id ='".$_SESSION[UserID]."'";
$resultsfour =$mysqli->query($sqlqueryfour);

$sqlqueryfive = "UPDATE intoprofile SET steamprofile = '$_POST[steamprofile]',igprofile = '$_POST[igprofile]',garenaprofile = '$_POST[garenaprofile]',twitterid = '$_POST[twitterid]',youtubechannel = '$_POST[youtubechannel]',battletag = '$_POST[battletag]',tagorow = '$_POST[tagorow]',messengerlink = '$_POST[messengerlink]' WHERE id ='".$_SESSION[UserID]."'";
$resultsfive =$mysqli->query($sqlqueryfive );
?>
</center>
</body>
</html>
<?php
mysql_close();
?>