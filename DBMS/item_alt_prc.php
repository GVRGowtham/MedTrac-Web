<?php
	include('seller_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>item - price alter</title>
</head>
<body>
	<h1>Quantity increment:: </h1>
	<form method="GET" action="item_prc_alt_resp.php">
		item id       :<br><input type="text" name="it_id"><br><br>
		item new price   :<br><input type="text" name="it_prc"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
