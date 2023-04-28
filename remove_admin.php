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
	<form  name="remove_admin" method="POST" action="remove_admin_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Remove User </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> ID: </td>
			<td style="text-align:left"> <input name="id"/> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Remove Admin" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>