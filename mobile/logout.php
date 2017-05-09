<?php
	session_start();

	require_once("config.php");

	//*** Update Status
	$sqleee = "UPDATE intoprofile SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE id = '".$_SESSION["UserID"]."' ";
	$queryeee = mysqli_query($mysqli,$sqleee);

	session_destroy();
	header("location:index.php");
?>