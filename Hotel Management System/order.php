<?php
if(!empty($_SESSION)) {
$qty1=$_POST['qty1'];
$qty2=$_POST['qty2'];
$qty3=$_POST['qty3'];
$qty4=$_POST['qty4'];
$qty5=$_POST['qty5'];
$qty6=$_POST['qty6'];
error_reporting(0); 
  $host = 'localhost';
  $uname = 'root';
  $pass = '';
  $dbname ='hms';

  $db = mysqli_connect($host,$uname,$pass,$dbname);

  mysql_select_db("hms") or die("couldn't find database");
$sql = "SELECT * FROM  orders";
$result = mysqli_query($db, $sql); 
}	
?>
<html>
<head>
<title>Order</title>
<style>
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
  font{color:white}
img{width:300; height:200;}
table{border-color:white;height:90%;}
img{border-color:black}
body{no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;}
.food-btn{
	color: white;
	font-weight: bold;
	background:black;

}
</style>
<script type="text/javascript">
	function subtractQty(qty){
		if(qty.value - 1 < 0)
			return;
	else
	qty.value--;
	}
	function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		
		if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' =='0' ))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
</head>
<body background="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2019/06/cropped-GettyImages-643764514.jpg">
<FONT size="4" color="white">

</FONT>
<form action="order.php" name="orderform" method="post">
<table cellspacing="8" cellpadding="3" align="center">
<caption><font size="5"><U>ORDER HERE</U></font></caption>
<tr><td>
<img src="https://www.cookwithmanali.com/wp-content/uploads/2020/05/Masala-Dosa-500x500.jpg" width="300" height="200" border="5"><br/>
<font size="4">Dosa</font>
&nbsp;&nbsp;<input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="4">Rs. 50</font>
</td>
<td>
<img src="https://www.kannammacooks.com/wp-content/uploads/soft-idli-batter-recipe-using-idli-rava-mixie-blender-method.jpg" width="300" height="200" border="5"><br/>
<font size="4">Idly</font>
&nbsp;&nbsp;<input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="4">Rs. 25</font>
</td>
<td>
<img src="https://i2.wp.com/www.vegrecipesofindia.com/wp-content/uploads/2013/07/naan-recipe-2.jpg" width="300" height="200" border="5"><br/>
<font size="4">Naan</font>
&nbsp;&nbsp;<input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="4">Rs. 45</font>
</td>
</tr>
<tr>
<td>
<img src="https://i2.wp.com/www.vegrecipesofindia.com/wp-content/uploads/2013/07/corn-sandwich-recipe-1.jpg" width="300" height="200" border="5" ><br/>
<font size="4">Sandwich</font>
&nbsp;&nbsp;<input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="4">Rs. 70</font>
</td><td>
<img src="https://www.thespruceeats.com/thmb/xfi1jguiOuzqEzQGKQ1KMRb7Kzo=/1332x1332/smart/filters:no_upscale()/kachumber-salad-4172358-hero-01-f2f984488fb74815bc6119c8525da2cf.jpg" width="300" height="200" border="5"><br/>
<font size="4">Salad</font>
&nbsp;&nbsp;<input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
<font size="4">Rs. 60</font>
</td>
<td>
<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2008/3/26/0/IE0309_French-Toast.jpg.rend.hgtvcom.616.462.suffix/1431730431340.jpeg" width="300" height="200" border="5"><br/>
<font size="4">French Toast</font>
&nbsp;&nbsp;<input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
<input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
<input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="4">Rs. 70</font>
</td>
</tr>
</table>
<div class="footer-btn">
<a href="breakfast.php">
<center><button type="button" class="food-btn"> ORDER NOW<</a></button></center>
</div>
</form>
</body>
</html>
