<?php
	$conn = new mysqli("localhost","root","","ecomm");

	session_start();
	
	$user_chk = $_SESSION['login_user'];

	$sql = "select * from buyer where buyer_id = '$user_chk' ";
	
	$ses_sql = mysqli_query($conn,$sql);
	   
   	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   	$buy_id = $row['buyer_id'];
   
   	if(!isset($_SESSION['login_user'])){
    	header("location:login.php");
   	}
?>
