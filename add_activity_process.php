<?php 
include("admin_menu.php");

session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

$name = $_POST['name'];
$img = "img/".$_POST['img'];
$price = $_POST['price'];

$sql = "INSERT INTO activity_table (`name`,`img`,`price`) VALUES ('$name','$img',$price)";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Activity Successfully Added";
}
?>