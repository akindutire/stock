<?php
session_start();
include 'co.php';
$catid=$_SESSION['io'];

$dlp=@$_GET['delprod'];
if(isset($dlp)){
$sql=mysql_query("DELETE FROM producta WHERE id='$dlp'");
if($sql==true){
	header("location:editstock.php?catid=$catid");
	}else{
	header("location:editstock.php?catid=$catid");
		}
	
	}
?>