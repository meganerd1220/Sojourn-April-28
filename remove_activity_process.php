<?php 
include("db_connection.php");
include("admin_menu.php");
session_start();
$uid=$_SESSION['id'];
$name = $_POST['name'];
$sql="DELETE FROM activity_table WHERE name='$name'";
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Activity Successfully Removed";
}
?>