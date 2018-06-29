<?php
session_start();
require 'config.php';
?>
<!doctype html>
<?php
include('config_profile.php');
//We check if the users ID is defined
if(isset($_GET['iduser']))
{
        $id = $_GET['iduser'];
        //We check if the user exists
        $dnquery = "select * from user where id='$id'";
        $dn = $mysqli->query($dnquery);
        $infoprofile = $mysqli->query('select * from intoprofile where id="'.$id.'"');
        $infoprofilenn = mysqli_fetch_array($infoprofile);
        if(mysqli_num_rows($dn) > 0)
        {
                $dnn = mysqli_fetch_array($dn);
                //We display the user datas
?>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<?php
require_once 'Mobile-Detect-2.8.24/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isiOS() ){
header("location:../mobile/profile.php?iduser=".$id."");
}
if( $detect->isAndroidOS() ){
header("location:../mobile/profile.php?iduser=".$id."");
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
<meta property="og:url"           content="http://profile.boyphongsakorn.xyz/profile.php?iduser=<?php echo $dnn[id]; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="โปร์ไฟล์ของ <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?>" />
<meta property="og:description"   content="คลิกเพื่อเข้าดูโปร์ไฟล์ของ <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?>" />
<meta property="og:image"         content="<?php echo $dnn[coverurl]; ?>" />
	<title><?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?></title>
<link rel="icon" type="image/png" href="<?php echo $dnn[picture]; ?>" />
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<style type="text/css">
/* USER PROFILE PAGE */
<?php if ($id == $user_profile[id]): ?>
.card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:0px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:0px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
<?php else: ?>
.card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
<?php endif ?>
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
.card-background img {
    filter: none !important;
}
.card.hovercard .card-info .card-title {
    color: #000000 !important;
    background-color: rgba(228, 228, 228, 1.0) !important;
}
.card-background img {
    min-width: 150% !important;
}
</style>
<?php
        }
        else
        {
                echo 'This user dont exists.';
        }
}
else
{
        echo 'The user ID is not defined.';
}
?>
<style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
</style>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8&appId=1339274719457670";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<nav class="navbar navbar-default">
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
        <!--li><a href="login.php">เข้าสู่ระบบด้วย Facebook หรือ E-mail</a></li-->
        <?php endif ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
include('config_profile.php');
//We check if the users ID is defined
if(isset($_GET['iduser']))
{
        $id = $_GET['iduser'];
        //We check if the user exists
        $dn = $mysqli->query('select * from user where id="'.$id.'"');
        $infoprofile = $mysqli->query('select * from intoprofile where id="'.$id.'"');
        $infoprofilenn = mysqli_fetch_array($infoprofile);
        if(mysqli_num_rows($dn) > 0)
        {
                $dnn = mysqli_fetch_array($dn);
                //We display the user datas
?>
<div class="container">
<?php if ($user):?>
<?php if ($checkuserResultst): ?>
<?php else: ?>
<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> คุณยังไม่ได้ทำหน้าโปร์ไฟล์ของคุณเองเลย <a href="edit.php">คลิกที่นี้</a></div>
<?php endif ?>
<?php else: ?>
<?php endif ?>
<?php
$myviews1 = $checkmyviewnum_rows * 100;
$myviews2 = $myviews1 / $allviewnum_rows;
?>
<?php $objResultsss = mysqli_fetch_array($upviewdatst) ?>
<?php if ($id == $user_profile[id]): ?><div class="container" style="padding-left: 0px;padding-right: 0px;border-top-right-radius: 5px;border-top-left-radius: 5px;width: 100%;background-color: #BEBEBE;"><div class="row">
  <div class="col-md-8">ชื่อ : <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?> จำนวนคนดู : <?php echo $dnn[view]; ?> คิดเป็น <?php echo number_format($myviews2, 2, '.', ''); ?>% ของคนดูทั้งหมด <?php if ($objResultsss[id] == $user_profile[id]): ?><span class="label label-danger">คนดูเยอะที่สุดในขนาดนี้</span><?php else: ?><?php endif ?> <?php if ($dnn[betauser] == '1'): ?><span class="label label-primary">ผู้ใช้ช่วง beta</span><?php else: ?><?php endif ?></div>
  <div class="col-md-4"><a href="edit.php"><i class="fa fa-pencil" aria-hidden="true"></i> แก้ไขโปรไฟล์</a> <a href="statistic.php"><i class="fa fa-line-chart" aria-hidden="true"></i> สถิติ</a> <div class="fb-share-button" data-href="http://profile.boyphongsakorn.xyz/profile.php?iduser=<?php echo $id; ?>" data-layout="button_count"></div> <div class="fb-send" data-href="http://profile.boyphongsakorn.xyz/profile.php?iduser=<?php echo $id; ?>" data-layout="button_count">
  </div></div>
</div> </div><?php else: ?><?php endif ?>
<div class="card hovercard" style="margin-top: 0px;">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo $dnn[coverurl]; ?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="<?php echo $dnn[picture]; ?>">
        </div>
        <div class="card-info"><span class="card-title"><?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?></span></div>
</div>
<div class="row">
  <div class="col-md-8"><h3><ins>แนะนำตัว</ins></h3>
  <?php echo $infoprofilenn[profileinfo]; ?>
  <h3><ins>สถานะ</ins></h3>
  วันเกิด: <?php echo $dnn[birthday]; ?><br>
  ความสัมพันธุ์ : <?php echo $infoprofilenn[relationship]; ?><br>
  อายุ : <?php echo $dnn[age]; ?><br>
  ที่อยู่ : <?php echo $infoprofilenn[address]; ?><br>
  เบอร์โทร : <?php echo $infoprofilenn[phonenumber]; ?>
  <h3><ins>ลิงค์อื่นๆ</ins></h3>
  <a href="<?php echo $infoprofilenn[link1]; ?>"><?php echo $infoprofilenn[link1]; ?></a><br>
  <a href="<?php echo $infoprofilenn[link2]; ?>"><?php echo $infoprofilenn[link2]; ?></a><br>
  <a href="<?php echo $infoprofilenn[link3]; ?>"><?php echo $infoprofilenn[link3]; ?></a><br>
  <a href="<?php echo $infoprofilenn[link4]; ?>"><?php echo $infoprofilenn[link4]; ?></a>
  </div>

  <div class="col-md-4"><p><?php if ($infoprofilenn[messengerlink] == ''):?><?php else: ?><a href="<?php echo $infoprofilenn[messengerlink]; ?>" target="_blank"><button type="button" class="btn btn-default btn-xs" style="margin-top: 5px;"><i class="fa fa-comments" aria-hidden="true"></i> ส่งข้อความ ผ่าน Messanger</button></a><?php endif ?> <?php if ($infoprofilenn[email] == ''):?><?php else: ?><a href="mailto:<?php echo $infoprofilenn[email]; ?>"><button type="button" class="btn btn-default btn-xs" style="margin-top: 5px;"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</button></a><?php endif ?></p><?php if ($infoprofilenn[steamprofile] == ''): ?><?php else: ?><h4>โปร์ไฟล์ Steam</h4><img src="<?php echo $infoprofilenn[steamprofile]; ?>" width="100%"><?php endif ?><?php if ($infoprofilenn[igprofile] == ''): ?><?php else: ?><h4>โปร์ไฟล์ Instagram</h4><a href="https://www.instagram.com/<?php echo $infoprofilenn[igprofile]; ?>/?ref=badge" class="ig-b- ig-b-v-24" style="padding-bottom: 0px;margin-bottom: 5px;"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a><?php endif ?><?php if ($infoprofilenn[twitterid] == ''): ?><?php else: ?><br><a class="twitter-follow-button" href="https://twitter.com/<?php echo $infoprofilenn[twitterid]; ?>">Follow @<?php echo $infoprofilenn[twitterid]; ?></a><?php endif ?><?php if ($infoprofilenn[youtubechannel] == ''): ?><?php else: ?><br><script src="https://apis.google.com/js/platform.js"></script><div class="g-ytsubscribe" data-channel="<?php echo $infoprofilenn[youtubechannel]; ?>" data-layout="full" data-count="default"></div><?php endif ?><?php if ($infoprofilenn[garenaprofile] == ''): ?><?php else: ?><br><img src="http://cdn.garenanow.com/web/corporate/images/entertainment/garena_plus.png" width="50" height="50"> : <?php echo $infoprofilenn[garenaprofile]; ?><?php endif ?><?php if ($infoprofilenn[battletag] == ''): ?><?php else: ?>

<?php
$coverbattle = $infoprofilenn[battletag];
$edogeiei = str_replace("#", "-", $coverbattle);
?>
<?php if ($infoprofilenn[tagorow] == '0'): ?>
<br><img src="https://bneteu-a.akamaihd.net/shop/static/images/logos/og-shop-50646273ab.png" width="50"> : <?php echo $infoprofilenn[battletag]; ?><?php else: ?><br><img src="<?php

$url = 'https://owapi.net/api/v2/u/'.$edogeiei.'/stats/general?region=us';

$rCURL = curl_init();

curl_setopt($rCURL, CURLOPT_URL, $url);
curl_setopt($rCURL, CURLOPT_HEADER, 0);
curl_setopt($rCURL, CURLOPT_RETURNTRANSFER, 1);

$aData = curl_exec($rCURL);

curl_close($rCURL);

$resultapi = json_decode($aData, true);

print_r($resultapi[overall_stats][avatar])
?>" width="50"> : <?php echo $infoprofilenn[battletag]; ?><?php endif ?><?php endif ?></div>
</div>
</div>
<?php if (mysqli_num_rows($useroneshowst) == 0 AND mysqli_num_rows($usertwoshowst) == 0):?>
<script type="text/javascript">
$('#sendmessenger<?php echo $id; ?>').on('shown.bs.modal', function () {
  $('#sendmessenger<?php echo $id; ?>').focus()
})
</script>
<!-- Modal -->
<div class="modal fade" id="sendmessenger<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
<iframe src="send.php?iduser=<?php echo $id; ?>" width="100%" height="300" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
<!-- messengergroup -->
<script type="text/javascript">
$('#messengergroup<?php if (mysqli_num_rows($useroneshowst) == 0):?><?php echo $usertwoshowResult[idgroup]; ?><?php else: ?><?php echo $useroneshowResult[idgroup]; ?><?php endif ?>').on('shown.bs.modal', function () {
  $('#messengergroup<?php if (mysqli_num_rows($useroneshowst) == 0):?><?php echo $usertwoshowResult[idgroup]; ?><?php else: ?><?php echo $useroneshowResult[idgroup]; ?><?php endif ?>').focus()
})
</script>
<!-- Modal -->
<div class="modal fade" id="messengergroup<?php if (mysqli_num_rows($useroneshowst) == 0):?><?php echo $usertwoshowResult[idgroup]; ?><?php else: ?><?php echo $useroneshowResult[idgroup]; ?><?php endif ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
<iframe src="messenger.php?hash=<?php if (mysqli_num_rows($useroneshowst) == 0):?><?php echo $usertwoshowResult[idgroup]; ?><?php else: ?><?php echo $useroneshowResult[idgroup]; ?><?php endif ?>" width="100%" height="500" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
<!-- code ดึง ip -->
<?php
// การเรียกใช้ IP  

$qst = "SELECT * FROM viewer WHERE ip = '".$visitorIP."' AND viewdatatime = '".$tocowyo."' AND pageview = '".$id."'"; // เรียกข้อมูล
$objQueryst = $mysqli->query($qst); // ใช้คำสั่ง
$checkipviewer = mysqli_fetch_array($objQueryst); // แสดงเป็น array

if ($checkipviewer) { // ถ้าคำสั่งใช้ได้ หมายถึง ถ้า ip นี้ วันนี้ เข้า page นี้แล้ว

} else { // ถ้ายังไม่เข้า
$addview = $dnn[view]+1; // เพิ่มview ไปอีกหนึ่ง
$sqlquery = "INSERT INTO viewer VALUES ('$visitorIP','$user_profile[id]',NOW(),'$id',NOW())"; // เพิ่มข้อมูล ip นี้
$results = mysqli_query($mysqli,$sqlquery);
$sqlquerytwo = "UPDATE user SET view = $addview WHERE id = $id"; // แก้ไขข้อมูล
$resultstwo = mysqli_query($mysqli,$sqlquerytwo);
}
?>
<?php
        }
        else
        {
                echo 'This user dont exists.';
        }
}
else
{
        echo 'The user ID is not defined.';
}
?>
<?php
require 'footer.php';
?>
</body>
</html>