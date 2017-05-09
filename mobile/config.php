<?php
$mysqli = new mysqli('localhost','boyphon1_prouse','team1556th','boyphon1_prouse');
mysqli_set_charset($mysqli, "utf8");
$q = "SELECT * FROM user";
$checkuser = "SELECT * FROM user WHERE id = $_SESSION[UserID]"; 
$qstst = "SELECT * FROM intoprofile WHERE id = $_SESSION[UserID]";
$uptime = "SELECT * FROM user ORDER BY lastlogin DESC";
$upviewday = "SELECT * FROM user ORDER BY ABS(view) DESC";
$allview = "SELECT * FROM viewer";
$checkmyview = "SELECT * FROM viewer WHERE pageview = $_SESSION[UserID]";
$registertime = "SELECT * FROM user ORDER BY registerday DESC";
$objQuery = $mysqli->query($q);
$upviewdatcopy = $mysqli->query($upviewday);
$objQuerystst = $mysqli->query($qstst);
$checkmyviewst = $mysqli->query($checkmyview);
$checkuserst = $mysqli->query($checkuser);
$allviewst = $mysqli->query($allview);
$uptimest = $mysqli->query($uptime);
$uptimestst = $mysqli->query($uptime);
$upviewdatst = $mysqli->query($upviewday);
$registertimest = $mysqli->query($registertime);
$checkuserResultst = mysqli_fetch_array($checkuserst);
$allviewResult = mysqli_fetch_array($allviewst);
$checkmyviewResult = mysqli_fetch_array($checkmyviewst);
$objQueryststResult = mysqli_fetch_array($objQuerystst);

$allviewnum_rows = mysqli_num_rows($allviewst);
$checkmyviewnum_rows = mysqli_num_rows($checkmyviewst);

$visitorIP = $_SERVER[REMOTE_ADDR];
$tocowyo = date("Y-m-d");

if ($checkuserst) {
  $sql = "UPDATE user SET lastlogin = NOW() WHERE id = '".$_SESSION[UserID]."'";
  $query = mysqli_query($mysqli,$sql);
} else {
}

//*** Reject user not online
	$intRejectTime = 5; // Minute
	$sql = "UPDATE intoprofile SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
	$query = mysqli_query($mysqli,$sql);
?>