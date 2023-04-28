<?php 
include("admin_menu.php");

session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

$img = "img/".$_POST['img'];
$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];


$sql = "INSERT INTO hotel_table (`img`, `name`, `location`, `price`)
	VALUES ('$img','$name','$location',$price)";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Lodging Successfully Added";
}
?>