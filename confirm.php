<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];
$sql="DELETE FROM package_table WHERE user_id='$uid' ";
$result = $connect->query($sql);

$sql1="SELECT * FROM survey_table WHERE user_id='$uid' ";
$result2 = $connect->query($sql1);
if(mysqli_num_rows($result2) > 0) {
	$sql2="DELETE FROM survey_table WHERE user_id='$uid' ";
	$result3 = $connect->query($sql2);
}


?>
<html>
<head>
</head>
<body>
	Your Vacation is confirmed!
</body>