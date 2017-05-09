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
<style type="text/css">
/* Makes images fully responsive */

.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100%;
  height: auto;
}

/* ------------------- Carousel Styling ------------------- */

.carousel-inner {
  border-radius: 15px;
}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

.section-white {
   padding: 10px 0;
}

.section-white {
  background-color: #fff;
  color: #555;
}

@media screen and (min-width: 768px) {

  .section-white {
     padding: 1.5em 0;
  }

}

@media screen and (min-width: 992px) {

  .container {
    max-width: 930px;
  }

}

</style>
</head>
<body>
<?php
session_start();
require 'config.php';
require 'menu.php';
?>
<section class="section-white">
  <div class="container">
<?php
require_once '../Mobile-Detect-2.8.24/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ($_SESSION["UserID"]) {
} else {
	if ($detect->isAndroidOS() OR $detect->isiOS()) {
	} else {
	header("location:../index.php");
	}
}
?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->

      <div class="carousel-inner">
<?php
$x = 1;
while($objResult = mysqli_fetch_array($upviewdatcopy) and $x <= 3)
{
?>
<div class="item <?php if ($x == 1): ?>active<?php else: ?><?php endif ?>">
<img src="<?php echo $objResult["coverurl"];?>" alt="...">
          <div class="carousel-caption">
            <h2><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"> <?php echo $objResult["firstname"];?> <?php echo $objResult["lastname"];?> <a href="profile.php?iduser=<?php echo $objResult["id"];?>" class="btn btn-default btn-lg active" role="button">โปร์ไฟล์</a></h2>
          </div>
        </div>
<?php $x = $x+1;
} ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>
<div class="container">
<h1>คนดูเยอะที่สุด</h1>
<?php
$b = 1;
while($objResult = mysqli_fetch_array($upviewdatst) and $b <= 6)
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
while($objResult = mysqli_fetch_array($registertimest) and $c <= 6)
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
while($objResult = mysqli_fetch_array($uptimestst) and $c <= 6)
{
$c = $c+1;?>
<script type="text/javascript">
$(function () {
  $('[data-toggle="tool<?php echo $objResult["id"];?>"]').tooltip()
})
</script>
<a href="profile.php?iduser=<?php echo $objResult["id"]?>" data-toggle="tool<?php echo $objResult["id"];?>" title="<?php echo $objResult["name"];?>"><img src="https://graph.facebook.com/<?php echo $objResult["id"];?>/picture"></a>
<?php } ?>
</body>
</html>