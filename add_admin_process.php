<?php 
include("admin_menu.php");

session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

$uid = $_POST['id'];
$pw = $_POST['password'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$type = 'A';


$sql = "INSERT INTO user_table (`user_id`, `password`, `first_name`, `last_name`, `email`, `phone`, `type`)
	VALUES ('$uid','$pw','$fname','$lname','$email','$phone','$type')";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
else {
	echo "Admin Successfully Added";
}
?>