<?php 

session_start();
$conn = new mysqli("localhost","root","","ecomm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "select * from seller where Seller_id = '$username' and password = '$password' ";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1 )
{
	$_SESSION['login_user'] = $username ; 
	header("location:Seller_home.php");
}
else
{
	header("location: login.php");
}
?>