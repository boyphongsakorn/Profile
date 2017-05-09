<?php
include 'config.php';

$sqlqueryseven = "UPDATE intoprofile SET email = '$_POST[email]',password = '$_POST[password]' WHERE id = '".$user_profile[id]."'";
$queryseven = mysqli_query($mysqli,$sqlqueryseven);
?>
<!DOCTYPE html>
<html>
<head>
	<title>EiEi</title>
	<meta http-equiv="refresh" content="1; url=account.php"/>
</head>
</html>