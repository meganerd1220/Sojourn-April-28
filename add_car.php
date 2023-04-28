<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	
	<body>
	<?php
		include("admin_menu.php");
	?>
	
	<center>
	<br>
	<form  name="add_car" method="POST" action="add_car_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Add Vehicle </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Image Name: </td>
			<td style="text-align:left"> <input name="img"/> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Type: </td>
			<td style="text-align:left"> <input name="type" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Price: </td>
			<td style="text-align:left"> <input name="price" /> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add Vehicle" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>