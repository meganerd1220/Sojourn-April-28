<?php 
include("db_connection.php");
include("admin_menu.php");
session_start();
$uid=$_SESSION['id'];
$id = $_POST['id'];
$sql="DELETE FROM user_table WHERE user_id='$id'";
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Admin Successfully Removed";
}
?>