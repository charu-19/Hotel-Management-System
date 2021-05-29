<?php
$con=mysqli_connect('localhost','root','','hms');
$query="select * from bookingroom";
$qu="select * from bookingparty";
$q="select * from bookingtable";

$result=mysqli_query($con,$query);
$res=mysqli_query($con,$qu);
$r=mysqli_query($con,$q);

?>
<!DOCTYPE HTML>
<!DOCTYPE html> 
<html>
<head>
    <title>Happy Ville</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b081659f3.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <section id="nav-bar">
        <!--NavBar bootstrap code-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><h2>Happy Ville Admin Page</h2></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#room">ROOM BOOKINGS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#party">PARTY HALL BOOKINGS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#dinning">DINNING BOOKINGS</a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn"><a href="index.php">LOGOUT</button></a>
      </li>
    </ul>
    </div>
    </nav>
    </section>
    <section id="room">
<table align="center" border="1px" style="width: 1000px; line-height: 50px;">
    <tr>
        <th colspan="7"> <h2>ROOM BOOKINGS RECORD</h2></th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email ID</th>
        <th>Phone</th>
        <th>Checkin Date</th>
        <th>Checkout Date</th>
        <th>Room Size</th>
        <th>Action</th>
    </tr>
    <?php 
       $i=0;
       while ($rows=mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $rows['fullname'];?></td>
            <td><?php echo $rows['emailid'];?></td>
            <td><?php echo $rows['phone'];?></td>
            <td><?php echo $rows['Indate'];?></td>
            <td><?php echo $rows['Outdate'];?></td>
            <td><?php echo $rows['selects'];?></td>
            <td><a href="delete.php?fullname=<?php echo $rows["fullname"]; ?>">Delete</a></td>
            </tr>
    <?php
       $i++;
       }
    ?>
</table>
</section>
<section>
    <h1><b><center>---------------------------------------------------------------------------------------------</center></b></h1>
</section>
<section id="party">
<table align="center" border="1px" style="width: 1000px; line-height: 50px;">
    <tr>
        <th colspan="6"> <h2>PARTYHALL BOOKINGS RECORD</h2></th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email ID</th>
        <th>Phone</th>
        <th> Date</th>
        <th>Purpose</th>
        <th>Action</th>
    </tr>
    <?php 
    $i=0;
       while ($rows1=mysqli_fetch_assoc($res)) {
    ?>
        <tr>
            <td><?php echo $rows1['fullname'];?></td>
            <td><?php echo $rows1['emailid'];?></td>
            <td><?php echo $rows1['phone'];?></td>
            <td><?php echo $rows1['date'];?></td>
            <td><?php echo $rows1['selects'];?></td>
            <td><a href="delete1.php?fullname=<?php echo $rows1["fullname"]; ?>">Delete</a></td>
        </tr>
    <?php
    $i++;
       }
    ?>
</table>
</section>
<section>
    <h1><b><center>---------------------------------------------------------------------------------------------</center></b></h1>
</section>
<section id="dinning">
<table align="center" border="1px" style="width: 1000px; line-height: 50px;">
    <tr>
        <th colspan="6"> <h2>DINNING TABLE BOOKINGS RECORD</h2></th>
    </tr>
    
    <tr>
        <th>Name</th>
        <th>Email ID</th>
        <th>Phone</th>
        <th>Time</th>
        <th>Table Size</th>
        <th>Action</th>
    </tr>
    <?php 
       while ($rows2=mysqli_fetch_assoc($r)) {
    ?>
        <tr>
            <td><?php echo $rows2['fullname'];?></td>
            <td><?php echo $rows2['emailid'];?></td>
            <td><?php echo $rows2['phone'];?></td>
            <td><?php echo $rows2['Intime'];?></td>
            <td><?php echo $rows2['selects'];?></td>
            <td><a href="delete2.php?fullname=<?php echo $rows2["fullname"]; ?>">Delete</a></td>
        </tr>
    <?php
       }
    ?>
</table>
</section>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
   </script>

    <script src="js/smooth-scroll.js"></script>
</body>
</html>