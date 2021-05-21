<!DOCTYPE html>
<html>
<head>
	<title>Data base</title>
</head>
<body>
	<?php
	$s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
	if($con->connect_error)
	{
		die($con->connect_error);
	}
	else{
		$sql="CREATE table customer(name varchar(15),pwd varchar(15),mob varchar(11),preference varchar(8), PRIMARY KEY(name,pwd),UNIQUE(mob))";
		 if(mysqli_query( $con,$sql)){  
	    	echo "<script>alert('Customer table created successfully.');</script>";}
	      else
	      	echo "<script>alert('Customer table already created.');</script>";
	    $sql1="CREATE table restaurant(name varchar(15),pwd varchar(15),mob varchar(11),rest varchar(30), PRIMARY KEY(name,pwd), UNIQUE(rest),UNIQUE(mob))";
		 if(mysqli_query( $con,$sql1)){  
	    	echo "<script>alert('Restaurant table created successfully.');</script>";}
	      else
	      	echo "<script>alert('Restaurant table already created.');</script>";
	    $sql3="CREATE table items(item varchar(15),restaurant varchar(30),type varchar(8), PRIMARY KEY(item,restaurant,type))";
		 if(mysqli_query( $con,$sql3)){  
	    	echo "<script>alert('Items table created successfully.');</script>";}
	      else
	      	echo "<script>alert('Items table already created.');</script>";
	    $sql4="CREATE table ordered(name varchar(15),mob varchar(11),restaurant varchar(30),food varchar(50),status varchar(2))";
		if(mysqli_query( $con,$sql4)){  
	    	echo "<script>alert('Ordered table created successfully.');</script>";}
	    else
	    	echo "<script>alert('Ordered table already created.');</script>";
	echo "<script>location.href='menu.php';</script>";}
	?>

</body>
</html>
