<?php
session_start();
include 'co.php';
$p=$_SESSION['pn'];

?>
<table align="center" border="0" style="font-family:consolas; color:black; margin-top:350px;">
<tr><th><?php echo date('d-M-Y, H:i a',time()); ?></th></tr>
<tr><th>Product</th><th>Quantity</th><th>Price</th></tr>
<?php
$sql=mysql_query("SELECT * FROM ordertab WHERE pin='$p'");
while($r=mysql_fetch_assoc($sql)){
$p=$r['item_name'];
$q=$r['quantity'];
$c=$r['costprice'];
$rr=@$rr+$c;
$rsa['0']=$rr;
echo "<tr><td>$p</td><td>$q</td><td>$c</td></tr>";

}
?>
<tr><td></td><td></td><td>Total&nbsp;<?php echo @$rsa['0']; ?></td></tr>
<tr><td></td><td><button onClick="window.print()">Print</button></td><td><button onClick="window.close()">Close</button></td></tr>
</table>
