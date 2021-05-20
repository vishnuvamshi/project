<?php
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	$s="localhost:3306";
	$un="root";
	$pw="";
	$db="MyDB";
	$conn=mysqli_connect($s,$un,$pw,$db);
	if(!$conn)
		die("error".mysqli_connect_error());
	else
		echo "<script>alert('Successfully connected to database');location.href='menu.php';</script>";
	
//}
	?>