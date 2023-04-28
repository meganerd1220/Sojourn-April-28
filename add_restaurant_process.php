<?php 
include("admin_menu.php");

session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

$img = "img/".$_POST['img'];
$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];
$type = $_POST['type'];


$sql = "INSERT INTO restaurant_table (`img`, `name`, `location`, `price`, `type`)
	VALUES ('$img','$name','$location',$price,'$type')";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Restaurant Successfully Added";
}
?>