<!DOCTYPE html>
<html>
<head>
<title> BOOKING</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-img {
  /* The image used */
  background-image: url("https://i.pinimg.com/originals/2e/fe/10/2efe100d2fe4b0990d03dfdee625249c.jpg" );

  min-height: 780px;

  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-size: cover; 
  position: relative;
}
.bg-img h2,p{
  color: white;
  font-family: sans-serif;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 200px;
  padding: 16px;
  background-color:white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date],input[type=time],select[name=select] {
  width: 20%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  
}

input[type=text]:focus, input[type=password]:focus,input[type=date]:focus,input[type=time]:focus ,select[name=select]:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: rgba(0,0,0,.95);
    color:#fff;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    border-radius: 100px;
    box-shadow: 7px 10px 12px rgba(0,0,0,.1);
    cursor: pointer;
    transition: all -3s;
    text-align:center;
}
.btn a{
  text-decoration: none;
  color: white;
}

.btn:hover {
    transform: scale(1.0);
    box-shadow: 10px 12px 15px rgba(0,0,0,.3);
}
</style>
</head>
<body>
<div class="bg-img">
    <form action= "connectparty.php" method="post">
        <h2><center>PARTY HALL BOOKING</center></h2>
    <center>
    <div class="form-field">
        <p><b>Your Name:</b></p>
        <input type="text" placeholder="Your Name" name="fullname" required>
    </div>
    <div class="form-field">
        <p><b> Your Email:</b></p>
        <input type="text" placeholder="Your Email" name="emailid" required>
    </div>
     <div class="form-field">
                <p><b> Your PhoneNo:</b></p>
                <input type="text" placeholder="Your Phone Number" name="phone" required>
    </div>
    <div class="form-field">
        <p> <b>Purpose:</b></p>
        <select name="selects" id="#">
            <option value="Wedding">Wedding</option>
            <option value="Reception">Reception</option>
            <option value="Conference">Conference</option>
        </select>
    </div>

    <div class="form-field">
        <p> <b> Date:</b></p>
        <input type="date" placeholder="Date" name="date" required> 
    </div>
    </center>
    <center><input type="submit" class="btn" name="submit"></center>

  </form>
</div>
</body>
</html>













