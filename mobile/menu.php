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
        <!--li><a href="../alluser.php">รายชื่อทั้งหมด</a></li-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if ($_SESSION["UserID"]): ?>
        <li><a href="profile.php?iduser=<?php echo $_SESSION["UserID"]?>"><img src="https://graph.facebook.com/<?php echo $_SESSION["UserID"]?>/picture" width="20" height="20"> โปร์ไฟล์</a></li>
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
            <li><a href="statistic.php">สถิติและสถานะ</a></li>
            <li><a href="edit.php">แก้ไขโปร์ไฟล์</a></li>
            <li><a href="account.php">การตั้งค่า</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
          </ul>
        </li>
        <?php else: ?>
        <li><a href="login.php">เข้าสู่ระบบด้วย E-mail</a></li>
        <?php endif ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>