<?php
session_start();
require 'config.php';
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
var OneSignal = window.OneSignal || [];
OneSignal.push(["init", {
appId: "bf4a59d3-056c-4a21-b516-1c4dbec2175e",
autoRegister: true, /* Set to true to automatically prompt visitors */
subdomainName: 'https://profile-boyphongsakorn.onesignal.com',   
httpPermissionRequest: {
enable: true
},
notifyButton: {
enable: false /* Set to false to hide */
}
}]);

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<style type="text/css">
/*
 * Start Bootstrap - Full Slider (http://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

html,
body {
    height: 100%;
}

.carousel,
.item,
.active {
    height: 100%;
}

.carousel-inner {
    height: 100%;
}

/* Background images are set within the HTML using inline CSS, not here */

.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

footer {
    margin: 50px 0;
}
</style>
<style>
a:link    {color:#ffffff; background-color:transparent; text-decoration:none}
a:visited {color:#ffffff; background-color:transparent; text-decoration:none}
a:hover   {color:#ffffff; background-color:transparent; text-decoration:none}
a:active  {color:#ffffff; background-color:transparent; text-decoration:none}
</style>
	<title>เว็บแนะนำตัว</title>
</head>
<body>
<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">แนะนำตัว</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">หน้าแรก</a></li>
        <li><a href="alluser.php">รายชื่อทั้งหมด</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ล็อกอินล่าสุด <span class="caret"></span></a>
          <ul class="dropdown-menu">
<?php
$a = 1;
while($objResult = mysqli_fetch_array($uptimest) and $a <= 5)
{
$a = $a+1;?>
<li><a href="profile.php?iduser=<?php echo $objResult["id"];?>"><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture" width="15" height="15"> <?php echo $objResult["name"];?></a></li>
<?php } ?>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if ($user): ?>
        <li><a href="profile.php?iduser=<?php echo $user_profile[id]?>"><img src="https://graph.facebook.com/<?php echo $user_profile[id]?>/picture" width="20" height="20"> โปร์ไฟล์</a></li>
        <!-- การแจ้งเตือน -->
<?php
$checknottit = "SELECT * FROM inboxsystem WHERE userreceive = '".$user_profile[id]."' AND userreceiveopen = '0'";
$checknottitst = $mysqli->query($checknottit);
$checknottitstst = $mysqli->query($checknottit);
$countandyou = 0;
while(mysqli_num_rows($checknottitst) >= $countandyou)
{
$countandyou = $countandyou+1;
}
?>
<?php
$countandyou = $countandyou-1;
?>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" aria-hidden="true"></i> การแจ้งเตือน <span class="badge"><?php echo $countandyou ?></span></a>
          <ul class="dropdown-menu">
<?php
while(mysqli_num_rows($checknottitst) > 0 AND $objResult = mysqli_fetch_array($checknottitst))
{

$checkname = "SELECT * FROM user WHERE id = '".$objResult[usersend]."'";
$checknamest = $mysqli->query($checkname);
$checknameecho = mysqli_fetch_array($checknamest);
?>
            <li><a data-toggle="modal" data-target="#messengergroup<?php echo $objResult[idgroup] ?>"><img src="<?php echo $checknameecho[picture] ?> " height="15"> <?php echo $objResult[messenger] ?></a></li>
            <li role="separator" class="divider"></li>
<?php
} ?>
          </ul>
        </li-->
        <!-- บัญชี -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">บัญชี <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="statistic.php">สถิติ</a></li>
            <li><a href="edit.php">แก้ไขโปร์ไฟล์</a></li>
            <li><a href="#">การตั้งค่า</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index.php?Action=Logout">Logout</a></li>
          </ul>
        </li>
        <?php else: ?>
        <li><a href="login.php">เข้าสู่ระบบด้วย Facebook หรือ E-mail</a></li>
        <?php endif ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<center><h1>สถิติ</h1>
<h3>หน้าโปร์ไฟล์ของคุณมีคนดูทั้งหมด</h3>
<?php
$myviews1 = $checkmyviewnum_rows * 100;
$myviews2 = $myviews1 / $allviewnum_rows;
?>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: <?php echo number_format($myviews2, 2, '.', '') ?>%">
    <?php echo number_format($myviews2, 2, '.', '') ?>%
  </div>
<?php
$myviews3 = 100-$myviews2;
?>
  <div class="progress-bar progress-bar-info progress-bar-striped active" style="width: <?php echo number_format($myviews3, 2, '.', '') ?>%">
    ของจำนวนคนดูทั้งหมด
  </div>
</div>
<h3>ไอดีที่ดูโปร์ไฟล์ของคุณบ่อยที่สุด</h3>
<div class="progress">
<?php 
$checkidmyview = "SELECT * FROM viewer WHERE pageview = $user_profile[id] GROUP BY id";
$checkidmyviewst = $mysqli->query($checkidmyview);
$myviews6 = 0;
$myviews7 = 0;
while ($objResult = mysqli_fetch_array($checkidmyviewst)) {
$checkidmyviewtwo = "SELECT * FROM viewer WHERE id = $objResult[id] AND pageview = $user_profile[id]";
$checkidmyviewtwost = $mysqli->query($checkidmyviewtwo);
$checkidmyviewtwonum_rows = mysqli_num_rows($checkidmyviewtwost);
$myviews4 = $checkidmyviewtwonum_rows * 100;
$myviews5 = $myviews4 / $checkmyviewnum_rows;
?>
<?php if ($objResult[id] != ''): ?>
  <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: <?php echo $myviews5 ?>%">
<a href="#" data-toggle="tooltip" <?php if ($myviews5 >= "10"): ?>title="<?php echo number_format($myviews5, 2, '.', '') ?>%"><?php else: ?>title="<?php echo $objResult[id]; ?> (<?php echo number_format($myviews5, 2, '.', '') ?>%)"><?php endif ?><?php echo $objResult[id]; ?></a>
  </div>
<?php else: ?><?php endif ?>
<?php
$myviews6 = $myviews6+$myviews5;
}
$myviews7 = 100-$myviews6;
?>
<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: <?php echo $myviews7 ?>%">
คนที่ไม่ได้ล็อกอิน (<?php echo number_format($myviews7, 2, '.', '') ?>%)
  </div>
</div>
</div>
</center>
</div>
</body>
</html>