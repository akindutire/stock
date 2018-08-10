<?php
session_start();
include 'co.php';
$t=$_POST['q'];

	$_SESSION['er']=$t;
		
	




if($_SESSION['vs']==' '){
	
	$_SESSION['vs']=1;
	header('location:sell2.php');
	}else{
	header('location:sell2.php');
		}

?>