<?php
  $s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
  echo "<script>alert('welcome');location.href='sqldatabase.php'</script>";
?>
