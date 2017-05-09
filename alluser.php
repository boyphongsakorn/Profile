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
        <!--li class="active"><a href="alluser.php">รายชื่อทั้งหมด</a></li-->
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
<?php if ($user):?>
<?php if ($checkuserResultst): ?>
<?php else: ?>
<div class="alert alert-warning" role="alert" style="margin-bottom: 0px;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> คุณยังไม่ได้ทำหน้าโปร์ไฟล์ของคุณเองเลย <a href="edit.php">คลิกที่นี้</a></div>
<?php endif ?>
<?php else: ?>
<?php endif ?>

<div class="container">
<?php
$b = 1;
while($objResult = mysqli_fetch_array($upviewdatst) and $b <= 23)
{
$outpoprofile = "SELECT * FROM intoprofile WHERE id = $objResult[id]";
$outpoprofilest = $mysqli->query($outpoprofile);
$outpoprofileResult = mysqli_fetch_array($outpoprofilest);
?>
<div class="well well-sm" style="margin-bottom: 5px;">
                <div class="media">
                    <a class="thumbnail pull-left" href="profile.php?iduser=<?php echo $objResult[id] ?>" style="padding-right: 4px;">
                        <img class="media-object" src="<?php echo $objResult[picture] ?>" width="45" height="45"">
                    </a>
                    <div class="media-body" style="padding-left: 5px;">
                        <h4 class="media-heading"><?php echo $objResult[firstname] ?> <?php echo $objResult[lastname] ?></h4>
                    <p><span class="label label-warning"><?php echo $objResult[view] ?> คนดู</span> <?php if ($objResult[betauser] == 1):?><span class="label label-primary">ผู้ใช้ช่วง beta</span><?php else: ?><?php endif ?> <?php if ($b == 1):?><span class="label label-danger">คนดูเยอะที่สุดในขณะนี้</span><?php else: ?><?php endif ?></p>
                        <p>
                            <?php if ($outpoprofileResult[twitterid] == ''):?><?php else: ?><a href="https://www.twitter.com/<?php echo $outpoprofileResult[twitterid] ?>" class="btn btn-xs btn-default" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a><?php endif ?> <?php if ($outpoprofileResult[youtubechannel] == ''):?><?php else: ?><a href="https://www.youtube.com/user/<?php echo $outpoprofileResult[youtubechannel] ?>" class="btn btn-xs btn-default" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a><?php endif ?> <?php if ($outpoprofileResult[igprofile] == ''):?><?php else: ?><a href="https://www.instagram.com/<?php echo $outpoprofileResult[igprofile] ?>" class="btn btn-xs btn-default" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a><?php endif ?> <?php if ($outpoprofileResult[email] == ''):?><?php else: ?><a href="mailto:<?php echo $outpoprofileResult[email]; ?>" class="btn btn-xs btn-default" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</a><?php endif ?>
                            
                        </p>
                    </div>
                </div>
            </div>
<?php 
$b = $b+1;
} ?>
</div>
</div>
<?php
require 'footer.php';
require 'messengerpopup.php';
?>
</body>
</html>