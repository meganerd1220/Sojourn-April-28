<?php 
session_start();
$uid=$_SESSION['id'];
include("db_connection.php");

if(isset($_POST['suggested'])) {
	$addedArray=$_POST['suggested'];
	$addedArray = array_values($addedArray);
for ($i = 0; $i<=count($addedArray); $i++) {
echo "$addedArray[$i]";}
for ($i = 0; $i<=count($addedArray); $i++) {
	$addedItem = $addedArray[$i];
	$activitysql = "SELECT * FROM activity_table WHERE name = '$addedItem'";
	$lodgingsql = "SELECT * FROM hotel_table WHERE name = '$addedItem'";
	$carsql = "SELECT * FROM car_table WHERE type = '$addedItem'";
	$restaurantsql = "SELECT * FROM restaurant_table WHERE name = '$addedItem'";
	$activityresult = $connect->query($activitysql);
	$lodgingresult = $connect->query($lodgingsql);
	$carresult = $connect->query($carsql);
	$restaurantresult = $connect->query($restaurantsql);
	if ($activityresult->num_rows > 0) {
		if($connect->query("INSERT INTO package_table (user_id, added,typeadded) VALUES ('$uid','$addedItem','A')") === TRUE){
			?>
			<script>
				alert("Successfully added to package!");
			</script>
			<?php
			}else{
			die('Error executing query: ' . $connect->error);
			}
		
	}		

	if ($lodgingresult->num_rows > 0) {
		if($connect->query("INSERT INTO package_table (user_id, added,typeadded) VALUES ('$uid','$addedItem','L')") === TRUE){
			?>
			<script>
				alert("Successfully added to package!");
			</script>
			<?php
			}else{
			die('Error executing query: ' . $connect->error);
			}
		
	}
	if ($carresult->num_rows > 0) {
		if($connect->query("INSERT INTO package_table (user_id, added,typeadded) VALUES ('$uid','$addedItem','C')") === TRUE){
			?>
			<script>
				alert("Successfully added to package!");
			</script>
			<?php
			}else{
			die('Error executing query: ' . $connect->error);
			}
		
	}
	if ($restaurantresult->num_rows > 0) {
		if($connect->query("INSERT INTO package_table (user_id, added,typeadded) VALUES ('$uid','$addedItem','R')") === TRUE){
			?>
			<script>
				alert("Successfully added to package!");
			</script>
			<?php
			}else{
			die('Error executing query: ' . $connect->error);
			}
		
	}
}
}
header('location: /Project/personalPackage.php');
?>
