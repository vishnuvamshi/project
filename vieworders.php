<?php session_start();
	if(!(isset($_SESSION["user"])))
	{	session_destroy();header("location:menu.php");}
         else if($_SESSION["type"]=="customer"){
          header("location:menu.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="color.css">
	<script type="text/javascript" src="cssjs.js"></script>
	<script type="text/javascript" src="js1.js"></script>
	<title>view_orders</title>
	<link rel="Icon" type="image/Icon" href="vsvs.jpg">
	<script type="text/javascript">
		var nn=0;
	</script>
</head>
<body background="ba8.jpg" style="background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: 100%; text-align: justify;">
<div style="background-color: lightgray;background-position: fixed;max-width: 100%; border-radius: 10%;border:3px solid black;" align="center" onmouseover="bigsp\(this)" 	onmouseleave="bigout\(this)"><a href="menu.php">
	<abbr title="VS"><img src="vsvs.jpg" width="60px" height="50px" style="border-radius: 50%;float: left"></abbr></a>
	<abbr title="8184839227"><img onclick="open1(this)" onmouseover="bigsp1\(this)" onmouseleave="bigout1\(this)" src="whats.jpg" width="60px" height="50px" style='float:right;'></abbr>
	<div align="center" style="max-width: 50%;color: white;background-color: red;align-items: center; font-family: times in roman; border-radius: 30px;border: 1px solid black;">
		<span style="font-size: 40px">Welcome To FoodShala</span></div>

</div><br>
<div align="right" id="out" style="display:  ">
	<form action="logout.php" method="get" id="logoutf">
					<input type="submit" name="logoutf" hidden=""></form>
			<a href="addmenuitems.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out1">Add_menu_items</button></a>
			<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out" onclick="lout()">logout</button></div>
	
	<h1 colspan="3" align="center" style="color: darkblue;font-size: 45px;font-family: Segoe Script;">
					<b><u>All available orders</u></b>
				</h1>
		<script type="text/javascript">
			function confirmorder() {
				var vv=confirm("Do you want to confirm this order?");
				if(!(vv))
					return false;
			}
		</script>
	<?php

		echo('<div align="center">
				<table cellpadding="7" style="background-color: yellow;align-items: center;color:blue; font-family: times new roman; border-radius: 30px;font-size:23px;min-width:50%;border: 5px solid black;display:;max-width:95%" border="0" >
		<tr><th align="center" style="font-size:30px;background-color:cyan; width:;border-radius:30px;color:black">Customer Name</th>
			<th align="center" style="font-size:30px;background-color:cyan; width:;border-radius:30px;color:black">Customer Mobile</th>
		<th align="center" style="font-size:30px;background-color:cyan; width:;border-radius:30px;color:black">Orders
		</th>
		<th align="center" style="font-size:30px;background-color:cyan; width:;border-radius:30px;color:black">status
		</th>
		</tr>
					');
		$s="remotemysql.com:3306";
	$un="diDhuV3BtC";
	$pw="b9YNjjRqOC";
	$db="diDhuV3BtC";
	$con=mysqli_connect($s,$un,$pw,$db);
		if($con->connect_error)
		die($con->connect_error);

		if(isset($_POST['conf']))
		{
			//echo '<script>alert("'.$_POST['conf'].'");</script>';
			$mobi=$_POST['conf'];$re=$_SESSION['rest'];
			$sqll="update ordered set status='1' where mob='$mobi' and status='0' and restaurant='$re'";
			$ress=$con->query($sqll);
			echo '<script>alert("Order Confirmed");location.href="vieworders.php";</script>';
		}

		$name=$_SESSION["user"];
		$rest=$_SESSION["rest"];
		$sql="select * from ordered where restaurant='$rest'";
		$res=$con->query($sql);
		$rowsno=$res->num_rows;
		if($res->num_rows>0)
		{	echo '<form method="post">';
			while($row=$res->fetch_assoc())
			{
				echo '<tr><th align="center" style="font-size:20px;background-color:gold; width:;border-radius:30px;">'.ucfirst($row["name"]).'</th><th align="center" style="font-size:20px;background-color:gold; width:;border-radius:30px;">'.ucfirst($row["mob"]).'</th><th align="center" style="font-size:20px;background-color:gold; width:;border-radius:30px;">'.$row["food"].'</th>';
				if($row["status"]=='0')
				{
					echo '<th align="center" style="font-size:20px;background-color:gold; width:;border-radius:30px;">
							<button type="submit" style="background-color: cyan	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="canf" name="conf" value="'.$row["mob"].'" onclick="return confirmorder()">Confirm</button>
						</th>';
				}
				else
				{
					echo '<th align="center" style="font-size:20px;background-color:gold; width:;border-radius:30px;color:green">Order Confirmed</th>';
				}
			}
		}
		else
		{
			echo '<tr><th colspan="4" align="center" style="font-size:30px;background-color:gold; width:;border-radius:30px;">No orders available</th></tr>';

		}

			echo ('</form></table></div>');

			  ?>

	</body>
</html>
