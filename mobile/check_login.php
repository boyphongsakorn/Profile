<?php
	session_start();

	require_once("config.php"); // หน้าตั้งค่า mysqli ครับ
	
	$strUsername = $_POST['txtUsername']; //แยกตัวหนังสือพิเศษ
	$strPassword = mysqli_real_escape_string($mysqli,$_POST['txtPassword']); //แยกตัวหนังสือพิเศษ

	$strSQL = "SELECT * FROM intoprofile WHERE email = '".$strUsername."' 
	and password = '".$strPassword."'"; // หา * จาก member ถ้า ชื่อผู้ใช้ = $strUsername และ รหัสผ่าน = $strPassword
	$objQuerye = mysqli_query($mysqli,$strSQL); // run code ที่แล้ว
	$objResulte = mysqli_fetch_array($objQuerye); // แยกออกมาในรูปแบบ array
	if(!$objResulte) // ถ้า $objResulte เท่ากับ flase
	{
		echo "E-mail and Password Incorrect!"; // ชื่อผู้ใช้และรหัสผ่าน ไม่ถูกต้อง
		header("location:index.php");
		exit(); // ออก
	}
	else // ถ้า เท่ากับ true
	{
		if($objResulte["LoginStatus"] == "1") // ถ้า loginstatus เท่ากับ 1
		{
			echo "'".$strUsername."' ผู้ใช้นี้ ล็อกอินอยู่!"; // $strUsername ล็อกอินอยู่
			exit(); // ออก
		}
		else // ถ้า เท่ากับ 0
		{
			//*** Update Status Login
			$sql = "UPDATE intoprofile SET LoginStatus = '1' , LastUpdate = NOW() WHERE email = '".$strUsername."' "; // อัดเดต member ตั้งให้ LoginStatus เท่ากับ 1 LastUpdate เท่ากับ ตอนนี้ ถ้า username เท่ากับ $objResulte["Username"]
			$query = mysqli_query($mysqli,$sql); // run code

			//*** Session
			$_SESSION["UserID"] = $objResulte["id"]; // $_SESSION["UserID"] เท่ากับ $objResulte["Username"]
			session_write_close(); // หมดเวลาแล้ว เธอคงต้องไป

			//*** Go to Main page
			header("location:index.php"); // ไปหน้า edit.php อย่างเร็ว
		}
			
	}
	mysqli_close($mysqli); // ปิดการใช้งาน mysqli
?>
