<?php
session_start();
$con=mysqli_connect('localhost','root','','hms');

         if(isset($_POST['submit'])){
                $fullname=$_POST['fullname'];
                $emailid=$_POST['emailid'];
                $phone=$_POST['phone'];
                $date=$_POST['date'];
                $selects=$_POST['selects'];

$s="select * from bookingparty where date='$date'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "<script language='javascript'>";
    echo "alert('Party Hall is booked already. Try for another date')";
    echo "</script>";
}
else{
    $reg="insert into bookingparty(fullname,emailid,phone,date,selects) values('$fullname','$emailid','$phone','$date','$selects')";
    mysqli_query($con,$reg);
     echo "<script language='javascript'>"; 
     echo "alert('Registration Sucessful')";
     echo "</script>";  
}
}
?>