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
	<form  name="remove_lodging" method="POST" action="remove_lodging_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Remove Lodging </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Lodging Name: </td>
			<td style="text-align:left"> <input name="name"/> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Remove Lodging" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>