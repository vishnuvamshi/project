<?php
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	$s="remotemysql.com:3306";
	$un="diDhuV3BtC";
	$pw="b9YNjjRqOC";
	$db="diDhuV3BtC";
	$con=mysqli_connect($s,$un,$pw,$db);
	if(!$con)
		die("error".mysqli_connect_error());
	else
		echo "<script>alert('Successfully connected to database');location.href='sqldatabase.php';</script>";
	
//}
	?>
