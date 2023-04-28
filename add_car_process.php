<?php 
include("admin_menu.php");

session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

$img = "img/".$_POST['img'];
$type = $_POST['type'];
$price = $_POST['price'];

$sql = "INSERT INTO car_table (`img`,`type`,`price`) VALUES ('$img','$type',$price)";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Vehicle Successfully Added";
}
?>