<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];?>
<html>
<head>
	<script src="jss\script.js"></script>
	<link rel="stylesheet" href="css\styles.css">
</head>
<body>
<table align="center">
<form method="post" action="finalize.php">
<?php	
	$sql2="SELECT * FROM package_table WHERE user_id='$uid' ";
	$result2=$connect->query($sql2);
	$count=1;
	$total=1;
	$ACTprice=0;
	$CARprice=0;
	$HOTprice=0;
	$RESprice=0;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while($row2 = $result2->fetch_assoc())
	{
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
		if($row2['typeadded']=='A'){
			$sqlACT="SELECT * FROM activity_table WHERE name='".$row2['added']."'";
			$resultACT=$connect->query($sqlACT);
			$rowACT = $resultACT->fetch_assoc();
			echo "<td>";
				echo "<img height='400px' width='500px' src= '".$rowACT['img']."'/>";
				echo "<br>";
				echo $rowACT['name']."<br>";
				echo "$".$rowACT['price']." per person<br>";
			echo "</td>";
			$count++;
			$total++;
			$ACTprice+=$rowACT['price'];
		}
		else if($row2['typeadded']=='C'){
			$sqlCAR="SELECT * FROM car_table WHERE type='".$row2['added']."'";
			$resultCAR=$connect->query($sqlCAR);
			$rowCAR = $resultCAR->fetch_assoc();
			echo "<td>";
				echo "<img height='400px' width='500px' src= '".$rowCAR['img']."'/>";
				echo "<br>";
				echo $rowCAR['type']."<br>";
				echo "$".$rowCAR['price']."/day<br>";
			echo "</td>";
			$count++;
			$total++;
			$CARprice+=$rowCAR['price'];
		}
		else if($row2['typeadded']=='L'){
			$sqlHOT="SELECT * FROM hotel_table WHERE name='".$row2['added']."'";
			$resultHOT=$connect->query($sqlHOT);
			$rowHOT = $resultHOT->fetch_assoc();
			echo "<td>";
				echo "<img height='400px' width='500px' src= '".$rowHOT['img']."'/>";
				echo "<br>";
				echo $rowHOT['name']."<br>";
				echo "$".$rowHOT['price']."/night<br>";
			echo "</td>";
			$count++;
			$total++;
			$HOTprice+=$rowHOT['price'];
		}
		else if($row2['typeadded']=='R'){
			$sqlRES="SELECT * FROM restaurant_table WHERE name='".$row2['added']."'";
			$resultRES=$connect->query($sqlRES);
			$rowRES = $resultRES->fetch_assoc();
			echo "<td>";
				echo "<img height='400px' width='500px' src= '".$rowRES['img']."'/>";
				echo "<br>";
				echo $rowRES['name']."<br>";
				echo "$".$rowRES['price']."/night<br>";
			echo "</td>";
			$count++;
			$total++;
			$RESprice+=$rowRES['price'];
		}
	}
	echo "</table>";?>
	<input type="hidden" name="ACTprice" value="<?php echo $ACTprice; ?>">
	<input type="hidden" name="CARprice" value="<?php echo $CARprice; ?>">
	<input type="hidden" name="HOTprice" value="<?php echo $HOTprice; ?>">
	<input type="hidden" name="RESprice" value="<?php echo $RESprice; ?>">
	<button type="submit">Continue</button>
</form>	
</body>
</html>