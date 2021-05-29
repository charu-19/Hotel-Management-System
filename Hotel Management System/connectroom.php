<?php
session_start();

$con=mysqli_connect('localhost','root','','hms');
         if(isset($_POST['submit'])){
                $fullname=$_POST['fullname'];
                $emailid=$_POST['emailid'];
                $phone=$_POST['phone'];
                $Indate=$_POST['Indate'];
                $Outdate=$_POST['Outdate'];
                $selects=$_POST['selects'];

$s="select * from bookingroom where Indate='$Indate' AND Outdate='$Outdate' AND selects='$selects'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==3){
    echo "<script language='javascript'>";
    echo "alert('This Room is booked already.Try for another type of Room or Date!')";
    echo "</script>";
}
else{
    $reg="insert into bookingroom(fullname,emailid,phone,Indate,Outdate,selects) values('$fullname','$emailid','$phone','$Indate','$Outdate','$selects')";
    mysqli_query($con,$reg);
     echo "<script language='javascript'>"; 
     echo "alert('Registration Sucessful')";
     echo "</script>";  
}
}
?>

