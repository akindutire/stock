<?php
session_start();
include 'co.php';

$requested=$_SESSION['err'];
echo $requested;
$p=$_SESSION['pn'];
$id=$_SESSION['gid'];
$sql=mysql_query("SELECT * FROM producta WHERE id='$id'");
$as=mysql_fetch_assoc($sql);
$item=$as['prod'];
$qr=($as['quantity']);
echo $qr.'<br>';
if($qr>=$requested){
$c=($as['costprice'])*$requested;
$time=date('h:i a');
$d=date('d-M-Y');
$er=mysql_query("INSERT INTO ordertab(item_id,item_name,quantity,costprice,pin,time,it) VALUES('$id','$item','$requested','$c','$p','$time','$d')") or die("Go back Retry, SERVER ERROR");
$left=$qr-$requested;
mysql_query("UPDATE producta SET quantity='$left' WHERE id='$id'");

echo "<body onload='add()'></body>";
}else{
echo "<body onload='bv()'></body>";
	}
	unset ($_SESSION['err']);
?>
<form name="myform">
	<input type="hidden" value="<?php echo $_SESSION['c']; ?>" name="mm">
</form>
<script>
var vr=myform.mm.value;
function add(){
	
	window.location='subcart.php?catid='+vr;
	}
function bv(){
	alert("We Don't Have Upto This Quantity In Our Stock");
	window.location='subcart.php?catid='+vr;
	}
</script>