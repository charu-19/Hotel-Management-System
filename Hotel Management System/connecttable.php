<?php
session_start();
$con=mysqli_connect('localhost','root','','hms');
         if(isset($_POST['submit'])){
                $fullname=$_POST['fullname'];
                $emailid=$_POST['emailid'];
                $phone=$_POST['phone'];
                $date=$_POST['date'];
                $Intime=$_POST['Intime'];
                $selects=$_POST['selects'];
$s="select * from bookingtable where Intime='$Intime' AND selects='$selects' AND date='$date'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==2){
    echo "<script language='javascript'>";
    echo "alert('This Table is booked already.Try for another timeslot !')";
    echo "</script>";
}
else{
    $reg="insert into bookingtable(fullname,emailid,phone,date,Intime,selects) values('$fullname','$emailid','$phone','$date','$Intime','$selects')";
    mysqli_query($con,$reg);
     echo "<script language='javascript'>"; 
     echo "alert('Registration Sucessful')";
     echo "</script>";  
}
}
?>





