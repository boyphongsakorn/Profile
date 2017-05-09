<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>EiEi</title>
	<meta http-equiv="refresh" content="1; url=messenger.php"/>
</head>
<body>
<center>
ส่งเรียบร้อยแล้ว<br>
<?php
if(isset($_GET['sendto']))
{
        $idsend = intval($_GET['sendto']);
        //We check if the user exists
        $dn = $mysqli->query('select * from user where id = "'.$idsend.'"');
        if($idsend)
        {

$random_number = rand();

$usersendshow = "SELECT * FROM inbox_group WHERE idgroup='".$random_number."'";
$usersendshowst = $mysqli->query($usersendshow);
$usersendshowResult = mysqli_fetch_array($usersendshowst);

if ($usersendshowResult[idgroup] == $random_number) {
$random_number = $random_number+1;

$sqlquery = "INSERT INTO inbox_group VALUES ('$random_number','$user_profile[id]','$idsend',NOW())";
$results =$mysqli->query($sqlquery);

$sqlquerytwo = "INSERT INTO inboxsystem VALUES ('$random_number','$user_profile[id]',NOW(),'$idsend','0','$_POST[message]')";
$resultstwo =$mysqli->query($sqlquerytwo);

} else {

$sqlquery = "INSERT INTO inbox_group VALUES ('$random_number','$user_profile[id]','$idsend',NOW())";
$results =$mysqli->query($sqlquery);

$sqlquerytwo = "INSERT INTO inboxsystem VALUES ('$random_number','$user_profile[id]',NOW(),'$idsend','0','$_POST[message]')";
$resultstwo =$mysqli->query($sqlquerytwo);
}

        }
        else
        {
                echo 'This user dont exists.';
        }
}
else
{

}
?>
</center>
</body>
</html>
<?php
mysql_close();
?>