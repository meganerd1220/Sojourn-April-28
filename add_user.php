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
	<form  name="add_user" method="POST" action="add_user_process.php" >
		<table style="width:50%">
		<tr>
			<td colspan=2 align = "center"> <h3> Add User </h3> </td>
		</tr>
		<tr>
			<td style="text-align:right"> ID: </td>
			<td style="text-align:left"> <input name="id"/> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Password: </td>
			<td style="text-align:left"> <input name="password" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> First Name: </td>
			<td style="text-align:left"> <input name="first_name" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Last Name: </td>
			<td style="text-align:left"> <input name="last_name" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Email: </td>
			<td style="text-align:left"> <input name="email" /> </td>
		</tr>
		<tr>
			<td style="text-align:right"> Phone Number: </td>
			<td style="text-align:left"> <input name="phone_number" /> </td>
		</tr>
			<td align="center" colspan=2> <br><input type="submit" value="Add User" /> </td>
		</tr>
		</table>
		
	</form>
	</center>
	</body>
</html>