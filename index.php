<?php
  $s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
// $ss="drop table ordered";
// if(mysqli_query( $con,$ss))
// 	echo "<script>alert('ordered droped');</script>";
// $sql4="CREATE table ordered(name varchar(15),mob varchar(11),restaurant varchar(30),food varchar(50),status varchar(2))";
// if(mysqli_query( $con,$sql4))
// 	echo "<script>alert('ordered created');</script>";
$s="DROP TABLE customer,restaurant,items,ordered";
if(mysqli_query( $con,$s))
	echo "<script>alert('droped');</script>";
 echo "<script>alert('welcome');location.href='sqldatabase.php'</script>";
//to create database tables
//echo "<script>location.href='sqldatabase.php'</script>";
	echo "<script>location.href='menu.php'</script>";
?>
