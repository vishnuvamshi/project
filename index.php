<?php
  $s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
// $ss="drop table customer";
// if(mysqli_query( $con,$ss))
// 	echo "<script>alert('customer droped');</script>";
// $sql="CREATE table customer(name varchar(15),pwd varchar(15),mob varchar(11),preference varchar(8), PRIMARY KEY(name,pwd,mob),UNIQUE(mob))";
// 	if(mysqli_query( $con,$sql)){  
// 	    echo "<script>alert('Customer table created successfully.');</script>";}
// 	else
// 	     echo "<script>alert('Customer table already created.');</script>";
// $sql4="CREATE table ordered(name varchar(15),mob varchar(11),restaurant varchar(30),food varchar(50),status varchar(2))";
// if(mysqli_query( $con,$sql4))
// 	echo "<script>alert('ordered created');</script>";
// $s="DROP TABLE customer,restaurant,items,ordered";
// if(mysqli_query( $con,$s))
// 	echo "<script>alert('droped');</script>";
//  echo "<script>alert('welcome');location.href='sqldatabase.php'</script>";
//to create database tables
//echo "<script>location.href='sqldatabase.php'</script>";
	echo "<script>location.href='menu.php'</script>";
?>
