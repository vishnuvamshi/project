<?php
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	$s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
	if(!$con)
		die("error".mysqli_connect_error());
	else
		echo "<script>alert('Successfully connected to database');location.href='sqldatabase.php';</script>";
	
//}
	?>
