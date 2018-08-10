<?php
session_start();
include 'co.php';

$delete=@$_GET['df'];
if(isset($delete)){
$sql=mysql_query("DELETE FROM category WHERE id='$delete'");
$sqle=mysql_query("DELETE FROM producta WHERE category_id='$delete'");

if($sql==true && $sqle==true){
	header('location:addproducts.php');
	}else{
	header('location:addproducts.php');
		}
}
?>