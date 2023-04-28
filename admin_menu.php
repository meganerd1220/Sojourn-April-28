
<html>
<head>
	<link rel="stylesheet" href="css\styles.css">
	<?php include("db_connection.php");?>
</head>
<body align="center">
	<h1>Sojourn - Admin<a><img src="img/palm.png" class="logo"/></a></h1>
	<ul>
		<li class="menu-item"><a href="#" class="drp">Users </a>
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="add_admin.php">Add Admin</a><br>
			<a href="remove_admin.php">Remove Admin</a><br>
		</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Lodging </a>	
		<div class="menu-content">
			<a href="add_lodging.php">Add Lodging</a><br>
			<a href="remove_lodging.php">Remove Lodging</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Vehicles </a>	
		<div class="menu-content">
			<a href="add_car.php">Add Vehicle</a><br>
			<a href="remove_car.php">Remove Vehicle</a><br>
			
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Activities </a>	
		<div class="menu-content">
			<a href="add_activity.php">Add Activity</a><br>
			<a href="remove_activity.php">Remove Activity</a><br>
		</div>
		</li>
		<li class="menu-item"><a href="#" class="drp">Restaurants </a>	
		<div class="menu-content">
			<a href="add_restaurant.php">Add Restaurant</a><br>
			<a href="remove_restaurant.php">Remove Restaurant</a><br>
		</div>
		</li>
		<li class="menu-item"><a href="logout.php" class="drp">Logout </a>	
		</li>
	</ul>
	
</body>
</html>