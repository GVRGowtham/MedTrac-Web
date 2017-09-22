<?php 

session_start();
$conn = new mysqli("localhost","root","","ecomm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = $_POST['bUsername'];
$password = $_POST['bPassword'];

$sql = "select * from buyer where buyer_id = '$username' and password = '$password' ";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1 )
{
	$_SESSION['login_user'] = $username ; 
	header("location:buyer_home.php");
}
else
{
	header("location: login.php");
}
?>