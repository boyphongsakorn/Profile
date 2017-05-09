<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../jquery-3.1.0.min.js"></script>
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
	<title>BP Profile Mobile</title>
<script type="text/javascript">
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
</head>
<body>
<?php
session_start();
require 'config.php';
require 'menu.php';
?>
<?php $objResultsss = mysqli_fetch_array($upviewdatst) ?>
<div class="container">
<center><h1>สถิติและสถานะ</h1>
<h3>หน้าโปร์ไฟล์ของคุณมีคนดูทั้งหมด</h3>
<?php
$myviews1 = $checkmyviewnum_rows * 100;
$myviews2 = $myviews1 / $allviewnum_rows;
?>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: <?php echo number_format($myviews2, 2, '.', '') ?>%">
    <?php echo number_format($myviews2, 2, '.', '') ?>% <?php if ($objResultsss[id] == $user_profile[id]): ?><span class="label label-danger">คนดูเยอะที่สุดในขนาดนี้</span><?php else: ?><?php endif ?>
  </div>
<?php
$myviews3 = 100-$myviews2;
?>
  <div class="progress-bar progress-bar-info progress-bar-striped active" style="width: <?php echo number_format($myviews3, 2, '.', '') ?>%">
    ของจำนวนคนดูทั้งหมด
  </div>
</div>
<?php $objResult = mysqli_fetch_array($upviewdatst); ?>
<h3>แท็กหรือสถานะของโปร์ไฟล์คุณ</h3>
<?php if ($objResultsss[id] == $user_profile[id]): ?><span class="label label-danger">คนดูเยอะที่สุดในขนาดนี้</span><?php else: ?><?php endif ?> <?php if ($objResult[betauser] == 1):?><span class="label label-primary">ผู้ใช้ช่วง beta</span><?php else: ?><?php endif ?>
</div>
</body>
</html>