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

footer {
    margin: 50px 0;
}
</style>
	<title>เว็บแนะนำตัว</title>
</head>
<body>
<?php
session_start();
require 'config.php';
require 'menu.php';
?>
<div class="container">
<center>
<h1>การตั้งค่า</h1>
<form method="post" action="editf2.php">
อีเมล : <input type="text" name="email" value="<?php echo $objQueryststResult[email] ?>"><br>
รหัสผ่าน : <input type="password" name="password" value="<?php echo $objQueryststResult[password] ?>"><br>
<input type="submit" value="Submit">
</form>
</center>
</div>
</body>
</html>