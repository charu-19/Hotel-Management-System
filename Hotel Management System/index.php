<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login and registration</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
    <div class="main">
    	<div class="form-box">
    		<div class="button-box">
    			<div id="btn"></div>
    			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
    			<button type="button" class="toggle-btn" onclick="register()">Register</button>
    		</div>
    		<div class="social-icons">
    			<a href="https://www.facebook.com/">
    		    <img src="fb.png"></a>
    		    <a href="https://twitter.com/login?lang=en"> 
    		    <img src="tw.png"></a>
    		    <a href="www.facebook.com">
    		    <img src="gp.png"></a>
    	    </div>
    	    <form action="validation.php" method="post" id="login" class="input-group">
    	    	<input type="text" name="user" class="input-field" placeholder="User Id" required>
    	    	<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
    	    	<button type="submit" name="sunmit" class="submit-btn">Log In</button>
    	    </form>
    	     <form action="registration.php" method="post" id="register"class="input-group">
    	    	<input type="text" name="user" class="input-field" placeholder="User Id" required>
    	    	<input type="email" name="email" class="input-field" placeholder="Email Id" required>
    	    	<input type="password" name="password" class="input-field" placeholder="Enter Password" required> 
    	    	<button type="submit" class="submit-btn">Register</button>
    	    </form>
    	</div>
    	<script type="text/javascript">
		var x=document.getElementById("login");
		var y=document.getElementById("register");
		var z=document.getElementById("btn");
		function register(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}
		function login(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";
		}
	</script>

    </div>
</body>
</html>
