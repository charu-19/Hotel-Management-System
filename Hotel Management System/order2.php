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
<FONT size="5" color="white">
</FONT>
<form action="order2.php" name="orderform" method="post">
<table cellspacing="8" cellpadding="3" align="center">
<caption><font size="5"><U>ORDER HERE</U></font></caption>
<tr><td>
<img src="https://www.cookwithmanali.com/wp-content/uploads/2014/11/Hakka-Noodles-1-500x500.jpg" width="300" height="200" border="5"><br/>
<font size="4">Noodles</font>
&nbsp;&nbsp;<input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="4">Rs. 100</font>
</td>
<td>
<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F1016308.jpg" width="300" height="200" border="5"><br/>
<font size="4">Plain naan</font>
&nbsp;&nbsp;<input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="4">Rs. 150</font>
</td>
<td>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjGqVUxo6HO-CtXn-AHgAin1tvN4l8_A0e1Q&usqp=CAU" width="300" height="200" border="5"><br/>
<font size="4">Pizza</font>
&nbsp;&nbsp;<input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="4">Rs. 125</font>
</td>
</tr>
<tr>
<td>
<img src="https://images.eatthismuch.com/site_media/img/33939_tabitharwheeler_0c9f0dbe-5745-48a6-9792-7e53ef253bbb.jpg" width="300" height="200" border="5" ><br/>
<font size="4">Fried rice</font>
&nbsp;&nbsp;<input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="4">Rs. 120</font>
</td><td>
<img src="https://1.bp.blogspot.com/-nOAm4_Zsw2s/XTfWRlueV5I/AAAAAAAAFWU/tsV6Eij_MPQC-zipAlluDCmO7GnnqL86ACLcBGAs/s1600/editted.jpg" width="300" height="200" border="5"><br/>
<font size="4">Cholo puri</font>
&nbsp;&nbsp;<input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
			<font size="4">Rs. 90</font>
</td>
<td>
<img src="https://lovelaughmirch.com/wp-content/uploads/2020/01/Kesari-Paneer-Tikka-_11.jpg" width="300" height="200" border="5"><br/>
<font size="4">Paneer Tikka</font>
&nbsp;&nbsp;<input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="4">Rs. 150</font>
</td>
</tr>
</table>
<div class="footer-btn">
<a href="dinner.php">
<center><button type="button" class="food-btn"><b> ORDER NOW</b></a></button></center>
</div>
</form>
</body>
</html>





