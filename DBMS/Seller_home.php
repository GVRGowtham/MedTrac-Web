<?php
	include('seller_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seller - Home</title>
</head>
<body>
<br>
<h1>Welcome <?php  echo $row['Seller_name']; ?> !! </h1>
<ul>
	<li><a href="sell_item.php">Sell an item</a></li><br>
	<li><a href="item_inc_qty.php">Increase item</a></li><br>
	<li><a href="item_alt_prc.php">Alter price</a></li><br>
	<li><a href="seller_logout.php">Logout</a></li><br>

</ul>

</body>
</html>