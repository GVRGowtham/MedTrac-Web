<?php
	include('seller_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>item - quantity increase</title>
</head>
<body>
	<h1>Quantity increment:: </h1>
	<form method="GET" action="item_inc_resp.php">
		item id       :<br><input type="text" name="it_id"><br><br>
		item quantity   :<br><input type="text" name="it_qty"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
