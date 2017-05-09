<?php
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
แก้ไขข้อมูลแล้ว<br>
และ อัดเดต รูปภาพหน้าปก,รูปโปร์ไฟล์ จาก facebook เรียบร้อยแล้ว
<?php
$sqlquery = "UPDATE intoprofile SET profileinfo = '$_POST[infoprofile]' WHERE id ='$user_profile[id]'";
$results =$mysqli->query($sqlquery);

$sqlquerytwo = "UPDATE intoprofile SET link1 = '$_POST[link1]',link2 = '$_POST[link2]',link3 = '$_POST[link3]',link4 = '$_POST[link4]' WHERE id ='$user_profile[id]'";
$resultstwo =$mysqli->query($sqlquerytwo);

$sqlquerythree = "UPDATE intoprofile SET relationship = '$_POST[relationship]',address = '$_POST[address]',phonenumber = '$_POST[phonenumber]',email = '$_POST[email]' WHERE id ='$user_profile[id]'";
$resultsthree =$mysqli->query($sqlquerythree);

$sqlqueryfour = "UPDATE user SET birthday = '$_POST[birthday]',age = '$_POST[age]' WHERE id ='$user_profile[id]'";
$resultsfour =$mysqli->query($sqlqueryfour);

$sqlqueryfive = "UPDATE intoprofile SET steamprofile = '$_POST[steamprofile]',igprofile = '$_POST[igprofile]',garenaprofile = '$_POST[garenaprofile]',twitterid = '$_POST[twitterid]',youtubechannel = '$_POST[youtubechannel]',battletag = '$_POST[battletag]',tagorow = '$_POST[tagorow]',messengerlink = '$_POST[messengerlink]' WHERE id ='$user_profile[id]'";
$resultsfive =$mysqli->query($sqlqueryfive );

$coverurl = $user_profile[cover][source];
$profileurl = $user_profile[picture][data][url];
$sqlquerysix = "UPDATE user SET coverurl = '".$coverurl."',picture = '".$profileurl."' WHERE id = '".$user_profile[id]."'";
$querysix = mysqli_query($mysqli,$sqlquerysix);
?>
</center>
</body>
</html>
<?php
mysql_close();
?>