<?php 
include("db_connection.php");
include("admin_menu.php");
session_start();
$uid=$_SESSION['id'];
$type = $_POST['type'];
$sql="DELETE FROM car_table WHERE type='$type'";
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Vehicle Successfully Removed";
}
?>