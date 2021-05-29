<?php

session_start();
header('location:index.php');
$con=mysqli_connect('localhost','root','','hms');


$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num==1){
	echo "<script language='javascript'>";
	echo "alert('username already taken')";
	echo "</script>";
}
else{
	$reg="insert into usertable(name,email,password) values ('$name','$email','$pass')";
	mysqli_query($con,$reg);
	echo "<script language='javascript'>";
	echo "alert('Registration Successful')";
	echo "</script>";
}
?>




