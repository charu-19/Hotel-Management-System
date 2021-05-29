<?php
  error_reporting(0); 
  $host = 'localhost';
  $uname = 'root';
  $pass = '';
  $dbname ='hms';

  $db = mysqli_connect($host,$uname,$pass,$dbname);
?>
<html>
    <head>
        <title> order</title>
        <style>
          body{
         font-family: 'Baloo Chettan 2', cursive;
         line-height: 1.5;
        }
        </style>
</head>
<body>
<center>
    <table border="">
        <tr>
            <th width = 250> NAME</th>
            <th width = 80> PRICE</th>
            <th width = 100> QUANTITY</th>
            <th width = 100> TOTAL PRICE</th>

</center>
</tr>
<?php
$sql = "SELECT * FROM  mytable1";
$result = mysqli_query($db, $sql);
if(! $result)
{
    die("unable to fetch" .mysql_errno($db));
}
else{
    while($row= mysqli_fetch_array($result))
    { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td style="text-align:left"><?php echo $row['price']; ?></td>
    <td style="text-align:center"><?php echo $row['qty']; ?></td>
    <!---price calculation part---->
    <td>
        <?php 
              $total= $row['price']* $row['qty'];
              echo $total;

              $subTotal += $total;
        ?>
        </td>
    </tr>
    <?php }
}?>
<tr>
    <td></td>
    <td></td>

    <td></td>
    <td></td>
</tr>
    <td></td>
    <td></td>
    <td style="background-color:pink; text-align:right"> SUBTOTAL:</td>
    <td style="background-color:pink;">
    <?php
     echo " " .$subTotal; ?></td>
     </tr>
     <tr>
     <td></td>
    <td></td>
    <td style="background-color:lightgreen ; text-align:right"> TAX:</td>
    <td style="background-color:lightgreen">5%</td>
</tr>
<tr>
<td></td>
    <td></td>
    <td style="background-color:lightblue ; text-align:right"> TAX AMOUNT :</td>
    <td style="background-color:lightblue;"><?php echo number_format(($subTotal/100)*5,2);?> </td>
</tr>
<tr>
<td></td>
    <td></td>
    <td style="background-color:violet ; text-align:right"> TOTAL AMOUNT :</td>
    <td style="background-color:violet;"><?php $tax = ($subTotal/100)*10;
               echo $grandTotal = number_format($tax,2)+ $subTotal;
?></td>
</tr>
</table>
<div class="print-btn">

       <button onclick="window.print();" class="btn btn-primary">PRINT</button>
        
        </div>
</body>
</html>
