<?php
  session_start();
  include("connectroom.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title>  BOOKING</title>
    <body> 
        <div class="container">
            <div class ="container-time">
                <h2 class="heading"> Book your Rooms</h2>
                <h3 class="heading-days">Call our Receptionists</h3>
                <h3 class="heading-days">Monday-Friday</h3>
        <link rel="stylesheet" href="css/roomstyle.css" type="text/css">
        <!-- font-->
        <link href="https://fonts.googleapis.com/css?family=Tangerine:400,600,700,900">
    </head>
                <p> 7am-12pm</p>
                <p> 1pm-7pm</p>
                <h3 class="heading-days">Saturday and Sunday</h3>
                <p>9am - 1pm </p>
                <p> 2pm-7pm</p>
                <hr>
                <h4 class="heading-phone">Call us:0452 977 322</h4>
        </div>
            
        <div class="container-form">
            <form action= "connectroom.php" method="post">
               <h2 class="heading heading-yellow">ROOM BOOKING</h2> 
            <div class="form-field">
                <p> Your Name:</p>
                <input type="text" placeholder="Your Name" name="fullname" required>
            </div>
            <div class="form-field">
                <p> Your Email:</p>
                <input type="text" placeholder="Your Email" name="emailid" required>
            </div>
            <div class="form-field">
                <p> Your PhoneNo:</p>
                <input type="text" placeholder="Your Phone Number" name="phone" required>
            </div>
            <div class="form-field">
                <p>  Check in Date:</p>
                <input type="date" name="Indate" required> 
            </div>
            <div class="form-field">
                <p>  Check out Date:</p>
                <input type="date" name="Outdate" required> 
            </div>
            <!--
               <div class="form-field">
                <p> Check in  Time:</p>
                <input type="time" name="Intime" required>
            </div>
            <div class="form-field">
                <p>  Check out Time:</p>
                <input type="time" name="Outtime" required>
            </div>  
        -->

            <div class="form-field">
                <p> Room Size</p>
                <select name="selects" id="#" required>
                    <option value="1" name="single">single(1 person)</option>
                    <option value="2" name="Couple">Couple(2 persons)</option>
                    <option value="3" name="Large">Luxury(4 persons) </option>
                </select>
            </div>
            <input type="submit" name="submit">
         </form>   
         
         </div>  
         </div> 
          </body>       
   </html>
