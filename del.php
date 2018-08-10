<?php
session_start();
include 'co.php';
$i=$_GET['pt'];
$s=mysql_query("DELETE FROM administrators WHERE id='$i'");
header('location:asm.php');
?>