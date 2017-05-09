<?php
session_start();
require 'config.php';

if(isset($_GET['iduser']))
{
        $id = intval($_GET['iduser']);
        //We check if the user exists
        $dn = $mysqli->query('select * from user where id="'.$id.'"');
        $infoprofile = $mysqli->query('select * from intoprofile where id="'.$id.'"');
        $infoprofilenn = mysqli_fetch_array($infoprofile);
        if(mysqli_num_rows($dn) > 0)
        {
                $dnn = mysqli_fetch_array($dn);
                //We display the user datas
?>
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
<meta property="og:url"           content="http://profile.boyphongsakorn.xyz/mobile/profile.php?iduser=<?php echo $dnn[id]; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="โปร์ไฟล์ของ <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?>" />
<meta property="og:description"   content="คลิกเพื่อเข้าดูโปร์ไฟล์ของ <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?>" />
<meta property="og:image"         content="<?php echo $dnn[coverurl]; ?>" />
	<title><?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?></title>
<link rel="icon" type="image/png" href="<?php echo $dnn[picture]; ?>" />
<style type="text/css">


.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("<?php echo $dnn[coverurl]; ?>");
    background-size: contain;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
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

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

.btn-ig {
    background-image: -webkit-linear-gradient(top,#8a3ab9 0,#8a3ab9 100%) !important;
    background-image: -o-linear-gradient(top,#8a3ab9 0,#8a3ab9 100%) !important;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#8a3ab9),to(#8a3ab9)) !important;
    background-image: linear-gradient(to bottom,#8a3ab9 0,#8a3ab9 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#8a3ab9', endColorstr='#8a3ab9', GradientType=0) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false) !important;
    background-repeat: repeat-x !important;
    border-color: #8a3ab9 !important;
}

.btn-ig {
    color: #fff !important;
    background-color: #8a3ab9 !important;
    border-color: #8a3ab9 !important;
}

</style>
</head>
<body>
<?php
require 'menu.php';
?>
<div class="container">


            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="<?php echo $dnn[picture]; ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <?php echo $dnn[firstname]; ?> <?php echo $dnn[lastname] ; ?>
                    </div>
                    <?php if ($dnn[birthday] == ''): ?>
                    <?php else: ?>
                    <div class="desc">วันเกิด : <?php echo $dnn[birthday]; ?></div>
                    <?php endif ?>
                    <?php if ($infoprofilenn[relationship] == ''): ?>
                    <?php else: ?>
                    <div class="desc">ความสัมพันธุ์ : <?php echo $infoprofilenn[relationship]; ?></div>
                    <?php endif ?>
                    <?php if ($dnn[age] == ''): ?>
                    <?php else: ?>
                    <div class="desc">อายุ : <?php echo $dnn[age]; ?></div>
                    <?php endif ?>
                    <?php if ($infoprofilenn[address] == ''): ?>
                    <?php else: ?>
                    <div class="desc"><?php echo $infoprofilenn[address]; ?></div>
                    <?php endif ?>
                    <div class="desc"><?php if ($dnn[betauser] == '1'): ?><span class="label label-primary">ผู้ใช้ช่วง beta</span><?php else: ?><?php endif ?></div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://www.facebook.com/app_scoped_user_id/<?php echo $dnn[id]; ?>">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <?php if ($infoprofilenn[twitterid] == ''): ?>
                    <?php else: ?>
                    <a class="btn btn-info btn-sm" href="https://twitter.com/<?php echo $infoprofilenn[twitterid]; ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <?php endif ?>
                    <?php if ($infoprofilenn[igprofile] == ''): ?>
                    <?php else: ?>
                    <a class="btn btn-ig btn-sm" href="https://instagram.com/<?php echo $infoprofilenn[igprofile]; ?>">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <?php endif ?>
                    <?php if ($infoprofilenn[youtubechannel] == ''): ?>
                    <?php else: ?>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://youtube.com/user/<?php echo $infoprofilenn[youtubechannel]; ?>">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <?php endif ?>
                    <?php if ($infoprofilenn[phonenumber] == ''): ?>
                    <?php else: ?>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="tel:<?php echo $infoprofilenn[phonenumber]; ?>">
                        <i class="fa fa-phone"></i>
                    </a>
                	<?php endif ?>
                	<?php if ($infoprofilenn[email] == ''): ?>
                    <?php else: ?>
                    <a class="btn btn-success btn-sm" rel="publisher" href="mailto:<?php echo $infoprofilenn[email]; ?>">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                	<?php endif ?>
                </div>
            </div>
<h3>แนะนำตัว</h3>
<?php echo $infoprofilenn[profileinfo]; ?>
</div>
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
</body>
</html>