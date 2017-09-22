<?php
	include("buyer_session.php");
	$cat = $_GET['temp'];
	$qry = "select * from item where category='$cat'";
	$result = mysqli_query($conn,$qry);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buyer :)</title>
</head>
<body>
<h1 align="center">Item list</h1>
<h3 align="center">Category :: <?php echo $cat; ?></h3>
<table width="100%">
	<thead >
		<th>item name</th>
		<th>item status</th>
		<th>item price</th>
		<th>options</th>
	</thead>
	<tbody>
	<tr>
	<?php 
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo "<td align = \"center\">".$row['item_name']."</td>";
			if(intval($row['item_quantity'])>0)
			{
				echo "<td align = \"center\">"."Available"."</td>";
			}
			else
			{
				echo "<td align = \"center\">"."Not Available"."</td>";
			}
			echo "<td align = \"center\">".$row['item_price']."</td>";
			echo "<td align = \"center\">"."<a href = \"buyer_buy_page.php?val=\">"."buy"."</a>"."</td>";
		}

	?>
	</tr>
	</tbody>
	<tfoot>
		<th>item name</th>
		<th>item status</th>
		<th>item price</th>
		<th>options</th>		
	</tfoot>
</table>
</body>
</html>