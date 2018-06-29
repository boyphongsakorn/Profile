<?php
session_start();
require 'config.php';
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<?php
require_once 'Mobile-Detect-2.8.24/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isiOS() ){
header("location:../mobile/index.php");
}
if( $detect->isAndroidOS() ){
header("location:../mobile/index.php");
}
?>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
<script type="text/javascript">
$('#fileuser').on('shown.bs.modal', function () {
  $('#fileuser').focus()
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
        <li class="active"><a href="index.php">หน้าแรก</a></li>
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
            <li><a href="account.php">การตั้งค่า</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index.php?Action=Logout">Logout</a></li>
          </ul>
        </li>
        <?php else: ?>
        <!--li><a href="login.php">เข้าสู่ระบบด้วย Facebook หรือ E-mail</a></li-->
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
<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
<?php
$x = 1;
while($objResult = mysqli_fetch_array($upviewdatcopy) and $x <= 3)
{
?>
<div class="item <?php if ($x == 1): ?>active<?php else: ?><?php endif ?>">
          <div class="fill" style="background-image:url('<?php echo $objResult["coverurl"];?>');"></div>
          <div class="carousel-caption">
            <h2><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"> <?php echo $objResult["firstname"];?> <?php echo $objResult["lastname"];?> <a href="profile.php?iduser=<?php echo $objResult["id"];?>" class="btn btn-default btn-lg active" role="button">โปร์ไฟล์</a></h2>
          </div>
        </div>
<?php $x = $x+1;
} ?>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>
<div class="container">
<h1>คนดูเยอะที่สุด</h1>
<?php
$b = 1;
while($objResult = mysqli_fetch_array($upviewdatst) and $b <= 23)
{
$b = $b+1;?>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tool<?php echo $objResult["id"];?>"]').tooltip()
})
</script>
<a href="profile.php?iduser=<?php echo $objResult["id"]?>" data-toggle="tool<?php echo $objResult["id"];?>" title="<?php echo $objResult["name"];?>"><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"></a>
<?php } ?>
<h1>สมัครเข้ามาล่าสุด</h1>
<?php
$c = 1;
while($objResult = mysqli_fetch_array($registertimest) and $c <= 23)
{
$c = $c+1;?>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tool<?php echo $objResult["id"];?>"]').tooltip()
})
</script>
<a href="profile.php?iduser=<?php echo $objResult["id"]?>" data-toggle="tool<?php echo $objResult["id"];?>" title="<?php echo $objResult["name"];?>"><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"></a>
<?php } ?>
<h1>ล็อกอินเข้าล่าสุด</h1>
<?php
$c = 1;
while($objResult = mysqli_fetch_array($uptimestst) and $c <= 23)
{
$c = $c+1;?>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tool<?php echo $objResult["id"];?>"]').tooltip()
})
</script>
<a href="profile.php?iduser=<?php echo $objResult["id"]?>" data-toggle="tool<?php echo $objResult["id"];?>" title="<?php echo $objResult["name"];?>"><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"></a>
<?php } ?>
</div>
<?php
require 'footer.php';
require 'messengerpopup.php';
?>
<?php
while(mysqli_num_rows($checknottitst) > 0 AND $objResult = mysqli_fetch_array($checknottitstst))
{
?>
<!--script type="text/javascript">
$('#messengergroup<?php echo $objResult[idgroup] ?>').on('shown.bs.modal', function () {
  $('#messengergroup<?php echo $objResult[idgroup] ?>').focus()
})
</script-->
<!-- Modal -->
<!--div class="modal fade" id="messengergroup<?php echo $objResult[idgroup] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
<iframe src="messenger.php?hash=<?php echo $objResult[idgroup] ?>" width="100%" height="700" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div-->
<?php
} ?>

</body>
</html>