<?php
session_start();
require 'config.php';
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<script src="textboxio-client/textboxio/textboxio.js"></script>
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
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
	<title>เว็บแนะนำตัว</title>

<script type="text/javascript">
$('#howtocreatesteamprofile').on('shown.bs.modal', function () {
  $('#howtocreatesteamprofile').focus()
})
$('#howtoaddyoutubechannel').on('shown.bs.modal', function () {
  $('#howtoaddyoutubechannel').focus()
})
</script>
<?php
require_once '../Mobile-Detect-2.8.24/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isiOS() OR $detect->isAndroidOS() ){ ?>
<style type="text/css">
#mytextarea {
    margin:10px 0;
    height:200px;
}
</style>
<?php } else { ?>
<script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    height: 400,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
</script>
<?php } ?>
</head>
<body>
<?php
require 'menu.php';
?>

<div class="container">
<?php if ($_SESSION["UserID"]): ?>
    <?php if ($checkuserResultst): ?>
    <?php else: ?>
    <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ได้เพิ่มข้อมูลลงเรียบร้อยแล้ว</div>
  <?php
  $coverurl = $user_profile[cover][source];
  $profileurl = $user_profile[picture][data][url];
  $profileage = $user_profile[age_range][max];
  $sqlquery = "INSERT INTO user VALUES ('$user_profile[id]','$user_profile[name]','0000-00-00 00:00:00',NOW(),'$user_profile[first_name]','$user_profile[last_name]','$coverurl','$profileurl','$profileage','$user_profile[birthday]','0','1')";
  $results= mysqli_query($mysqli,$sqlquery);
  $sqlquerytwo = "INSERT INTO intoprofile VALUES ('$user_profile[id]','','','','','','','','','','','','','','','','0','','','0','')";
  $resultstwo= mysqli_query($mysqli,$sqlquerytwo); ?>
    <?php endif ?>
<center>
<h2>แนะนำตัว (Beta)</h2>
<form method="post" action="editf1.php">
<textarea id="<?php if( $detect->isiOS() OR $detect->isAndroidOS() ){ ?>mytextarea<?php } else {?>myTextarea<?php }?>" name="infoprofile"><?php echo $objQueryststResult[profileinfo] ?></textarea>
<h2>สถานะ</h2>
  วันเกิด : <input type="text" name="birthday" value="<?php echo $checkuserResultst[birthday] ?>"><br>
  ความสัมพันธุ์ : <input type="text" name="relationship" value="<?php echo $objQueryststResult[relationship] ?>"><br>
  ที่อยู่ : <input type="text" name="address" value="<?php echo $objQueryststResult[address] ?>"><br>
  อายุ : <input type="text" name="age" value="<?php echo $checkuserResultst[age] ?>"><br>
  เบอร์โทร : <input type="text" name="phonenumber" value="<?php echo $objQueryststResult[phonenumber] ?>"><br>
  อีเมล : <input type="text" name="email" value="<?php echo $objQueryststResult[email] ?>">
<h2>ลิงค์อื่นๆ</h2>
  ลิงค์ที่1 : <input type="text" name="link1" value="<?php echo $objQueryststResult[link1] ?>"><br>
  ลิงค์ที่2 : <input type="text" name="link2" value="<?php echo $objQueryststResult[link2] ?>"><br>
  ลิงค์ที่3 : <input type="text" name="link3" value="<?php echo $objQueryststResult[link3] ?>"><br>
  ลิงค์ที่4 : <input type="text" name="link4" value="<?php echo $objQueryststResult[link4] ?>">
<h2>โปร์ไฟล์ อื่นๆ</h2>
  โปรไฟล์ steam <a data-toggle="modal" data-target="#howtocreatesteamprofile">(วิธีการสร้างและตัวอย่าง)</a> : <input type="text" name="steamprofile" value="<?php echo $objQueryststResult[steamprofile] ?>"><br>
  Instagram : <input type="text" name="igprofile" value="<?php echo $objQueryststResult[igprofile] ?>"><br>
  ID Garena : <input type="text" name="garenaprofile" value="<?php echo $objQueryststResult[garenaprofile] ?>"><br>
  Twitter : <input type="text" name="twitterid" value="<?php echo $objQueryststResult[twitterid] ?>"><br>
  BattleTag : <input type="text" name="battletag" value="<?php echo $objQueryststResult[battletag] ?>"> <input type="radio" name="tagorow" value="0" <?php if ($objQueryststResult[tagorow] == '0'): ?>checked<?php else: ?><?php endif ?>> รูปBattle.net <input type="radio" name="tagorow" value="1" <?php if ($objQueryststResult[tagorow] == '1'): ?>checked<?php else: ?><?php endif ?>> โปร์ไฟล์ Overwatch<br>
  Youtube <a data-toggle="modal" data-target="#howtoaddyoutubechannel">(วิธีการเพิ่มช่อง youtube)</a> : <input type="text" name="youtubechannel" value="<?php echo $objQueryststResult[youtubechannel] ?>"><br>
  ลิงค์ Messenger (สามารถเอาได้ที่ ในแอป Messenger) : <input type="text" name="messengerlink" value="<?php echo $objQueryststResult[messengerlink] ?>">
  <input type="submit" value="Submit">
</form>
<script type="text/javascript">
    var editor = textboxio.replace('#mytextarea');
  </script>
</center>
<?php else: ?>
<?php endif ?>
</div>
<div class="modal fade" id="howtocreatesteamprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">วิธีการสร้างและตัวอย่าง โปร์ไฟล์ steam</h4>
      </div>
      <div class="modal-body">
        <iframe src="https://player.vimeo.com/video/195153176" width="570" height="291" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><br>
        <a href="https://www.google.co.th/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjH-oaBpevQAhXMuI8KHTkrA_0QFggbMAA&url=http%3A%2F%2Fsteamsignature.com%2F&usg=AFQjCNGJkG_lwy22gYVE7xQ65MLbNA1SFg&sig2=Oj1fSZd8kjZIUUebSH-06w">steamsignature.com</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="howtoaddyoutubechannel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">วิธีการเพิ่มช่อง youtube</h4>
      </div>
      <div class="modal-body">
        <a href="http://network.boyphongsakorn.ga/imageupload/" target="_blank" title="http://network.boyphongsakorn.ga/imageupload/"><img src="http://network.boyphongsakorn.ga/imageupload/do.php?img=142" border="0" alt="http://network.boyphongsakorn.ga/imageupload/do.php?img=142" width="100%" /></a>
      </div>
    </div>
  </div>
</div>
<?php
require 'footer.php';
require 'messengerpopup.php';
?>
</body>
</html>