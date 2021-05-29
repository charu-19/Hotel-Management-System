 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>  BOOKING</title>
        <link rel="stylesheet" href="css/tablestyle.css" type="text/css">
        <!-- font-->
        <link href="https://fonts.googleapis.com/css?family=Tangerine:400,600,700,900">
    </head>
    <body>
        <div class="container">
            <div class ="container-time">
                <h2 class="heading">Time open</h2>
                <h3 class="heading-days"> Monday- Friday</h3>
                <p> 7am-11am(breakfast)</p>
                <p> 11am-10pm(Lunch/Dinner)</p>
                <h3 class="heading-days">Saturday and Sunday</h3>
                <p> 9am-10am(breakfast)</p>
                <p> 1am-10pm(Lunch/Dinner)</p>
                <h3>Plethora of Delicious foods</h3>
                <hr>
                <h4 class="heading-phone">Call us:0452 977 322</h4>
        </div>
            
        <div class="container-form">
            <form action= "connecttable.php" method="post">
               <h2 class="heading heading-yellow">TABLE BOOKING</h2> 
            
            <div class="form-field">
                <p> Your Name:</p>
                <input type="text" placeholder="Your Name" name="fullname" required>
            </div>
            <div class="form-field">
                <p> Your Email:</p>
                <input type="text" placeholder="Your Email" name="emailid" required>
            </div>
            <div class="form-field">
                <p> Your Phone no:</p>
                <input type="text" placeholder="Your Phone Number" name="phone" required>
            </div>
            <div class="form-field">
                <p>   Date:</p>
                <input type="date" name="date" required> 
            </div>

            <div class="form-field">
                <p> Check in  Time:</p>
                <input type="time" name="Intime" required >
            </div>
            <div class="form-field">
                <p>Table Size</p>
                <select name="selects" id="#" required>
                    <option value="1">Singles(1 person)</option>
                    <option value="2">Couples(2 persons)</option>
                    <option value="3">Luxury(more than 2)</option>
                </select>
            </div>
            <input type="submit" class="btn" name="submit">
         </form>   
         </div>  
         </div> 
          </body>       
   </html>
