<?php

session_start();
 
$con=mysqli_connect('localhost','root','','hms');


$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count==1){
	header('location:home.php');
}
else{
	echo '<script>alert("Login failed. Invalid username or password.")</script>';  
}
?>