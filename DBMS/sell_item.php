<?php
	include('seller_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter new item</title>
</head>
<body>
	<h1>Enter the new item :: </h1>
	<form method="GET" action="item_add_new.php">
		item name       :<br><input type="text" name="it_name"><br><br>
		item price       :<br><input type="text" name="it_price"><br><br>
		item decription :<br><textarea name="it_desc" rows="4" cols="22">Enter the description here .... </textarea><br><br>
		item category   :<br><input type="text" name="it_cat"><br><br>
		item quantity   :<br><input type="text" name="it_qty"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>