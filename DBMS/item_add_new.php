<?php
	include('seller_session.php');
	$name = $_GET['it_name'];
	$cat = $_GET['it_cat'];
	$price = intval($_GET['it_price']);
	$desc = $_GET['it_desc'];
	$qty = intval($_GET['it_qty']);
	$qry = "insert into item values('','$name','$cat','$desc',$price,$qty,'$sell_id')";
	$ses_sql = mysqli_query($conn,$qry);
	header("location:Seller_home.php");
?>