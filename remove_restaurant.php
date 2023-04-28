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
	<form  name="remove_restaurant" method="POST" action="remove_restaurant_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Remove Restaurant </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Restaurant Name: </td>
			<td style="text-align:left"> <input name="name"/> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Remove Restaurant" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>