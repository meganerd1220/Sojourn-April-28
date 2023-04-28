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
	<form  name="add_lodging" method="POST" action="add_lodging_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Add Lodging </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Image Name: </td>
			<td style="text-align:left"> <input name="img"/> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Name: </td>
			<td style="text-align:left"> <input name="name" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Location: </td>
			<td style="text-align:left"> <input name="location" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Price: </td>
			<td style="text-align:left"> <input name="price" /> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add Lodging" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>