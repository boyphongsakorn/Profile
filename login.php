<!DOCTYPE html>
<?php
session_start();
require 'config.php';

if ($user) {
  header('Location: edit.php');
  exit;
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Sign-In</title>
  
  <link rel="stylesheet" href="logindist/css/normalize.min.css">

  <link rel='stylesheet prefetch' href='font-awesome-4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="logindist/css/style.css">

<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('txtUsername').value == "")
    {
        alert('กรุณาใส่ อีเมล');
        return false;
    }
    if(document.getElementById('txtPassword').value == "")
    {
        alert('กรุณาใส่ รหัสผ่าน');
        return false;
    }
}
</script>
</head>

<body>
  <div class="logmod">
  <div class="logmod__wrapper">
    <a href="index.php"><span class="logmod__close">Close</span></a>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__alter" style="margin-top: 0px;">
          <div class="logmod__alter-container">
            <a href="<?php echo $loginUrl; ?>" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="mobile/check_login.php" class="simform" method="post" onSubmit="JavaScript:return fncSubmit();">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" placeholder="Email" type="email" size="50" id="txtUsername" name="txtUsername"/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" placeholder="Password" type="password" size="50" id="txtPassword" name="txtPassword"/>
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="Log In" />
              <!--span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span-->
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="<?php echo $loginUrl; ?>" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
<script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
  <script src='logindist/js/jquery.min.js'></script>

    <script src="logindist/js/index.js"></script>
<script>if (window.module) module = window.module;</script>
</body>
</html>
