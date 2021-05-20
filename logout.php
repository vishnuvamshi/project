<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
	<?php
		session_start();
		session_unset(); 
		session_destroy();
		header("location:menu.php");?>

</body>
</html>