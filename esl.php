<?php
session_start();
include 'co.php';
$t=$_POST['q'];

	$t=1;
	$_SESSION['err']=$t;
	

$id=$_GET['pt'];
$_SESSION['gid']=$id;


if($_SESSION['vs']==' '){
	
	$_SESSION['vs']=1;
	header('location:sell.php');
	}else{
	header('location:sell.php');
		}

?>