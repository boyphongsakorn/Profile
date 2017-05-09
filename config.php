<?php
require 'sdk/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '-',
  'secret' => '-',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me?fields=name,first_name,last_name,cover,picture,age_range,id,birthday,email');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Logout
if($_GET["Action"] == "Logout")
{
  $facebook->destroySession();
  header("location:index.php");
  exit();
}

$mysqli = new mysqli('localhost','boyphon1_prouse','team1556th','boyphon1_prouse');
mysqli_set_charset($mysqli, "utf8");
$q = "SELECT * FROM user";
$checkuser = "SELECT * FROM user WHERE id = $user_profile[id]"; 
$qstst = "SELECT * FROM intoprofile WHERE id = $user_profile[id]";
$uptime = "SELECT * FROM user ORDER BY lastlogin DESC";
$upviewday = "SELECT * FROM user ORDER BY ABS(view) DESC";
$allview = "SELECT * FROM viewer";
$checkmyview = "SELECT * FROM viewer WHERE pageview = $user_profile[id]";
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
  $sql = "UPDATE user SET lastlogin = NOW() WHERE id = '".$user_profile[id]."'";
  $query = mysqli_query($mysqli,$sql);
} else {
}
?>