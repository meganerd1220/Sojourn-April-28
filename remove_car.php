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
	<form  name="remove_car" method="POST" action="remove_car_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Remove Vehicle </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Vehicle Type: </td>
			<td style="text-align:left"> <input name="type"/> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Remove Vehicle" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>