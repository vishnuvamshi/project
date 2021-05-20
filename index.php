<?php
  $s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
// $s="DROP TABLE customer,restaurant,items,ordered";
// if(mysqli_query( $con,$s))
// 	echo "<script>alert('droped');</script>";
//  echo "<script>alert('welcome');location.href='sqldatabase.php'</script>";
//to create database tables
//echo "<script>location.href='sqldatabase.php'</script>";
	echo "<script>location.href='menu.php'</script>";
?>
