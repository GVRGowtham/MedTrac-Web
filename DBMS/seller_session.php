<?php
	$conn = new mysqli("localhost","root","","ecomm");

	session_start();
	
	$user_chk = $_SESSION['login_user'];

	$sql = "select * from seller where Seller_id = '$user_chk' ";
	
	$ses_sql = mysqli_query($conn,$sql);
	   
   	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   	$sell_id = $row['Seller_id'];
   
   	if(!isset($_SESSION['login_user'])){
    	header("location:login.php");
   	}
?>