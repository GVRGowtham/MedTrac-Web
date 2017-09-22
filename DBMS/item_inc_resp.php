<?php 
	include('seller_session.php');
	if($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		$id = intval($_GET['it_id']);
		$qty = intval($_GET['it_qty']);
		$qry = "update item set item_quantity = item_quantity + $qty where item_id = $id";
		$ses_sql = mysqli_query($conn,$qry);
		header("location:Seller_home.php");
	}	
?>