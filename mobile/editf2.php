<?php
session_start();
include 'config.php';

$iduser = $_SESSION["UserID"];

$sqlqueryseven = "UPDATE intoprofile SET email = '$_POST[email]',password = '$_POST[password]' WHERE id = '".$iduser."'";
$queryseven = mysqli_query($mysqli,$sqlqueryseven);
?>
<!DOCTYPE html>
<html>
<head>
	<title>EiEi</title>
	<meta http-equiv="refresh" content="1; url=account.php"/>
</head>
</html>