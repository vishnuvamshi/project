<?php session_start();
	if(!(isset($_SESSION["user"])))
	{	session_destroy();
		echo '<script>alert("Please login as restaurant to access this page");</script>';
		header("location:menu.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>addmenuitems</title>
	<link rel="Icon" type="image/Icon" href="dosa.jpg">
	<script type="text/javascript" src="cssjs.js"></script>
	<script type="text/javascript" src="js1.js"></script>
	<script type="text/javascript" src="all.js"></script>
	<style type="text/css">
		div
		{
			color: red;
			font-size:40px;font-family: times new roman;
		}
	</style>
	<style type="text/css">
		h2{
			color:blue;font-size: 30px;font-family: times new roman;
		}
	</style>
	<style type="text/css">
		h1{
			color: red;font-size: 30px;font-family: sans-serif;font-style: italic;
		}
	</style>
</head>
<body background="ba8.jpg" style="background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: cover; text-align: justify;">
	<div style="background-color: lightgray;background-position: fixed;max-width: 100%; border-radius: 10%;border:3px solid black;" align="center" onmouseover="bigsp\(this)" 	onmouseleave="bigout\(this)"><a href="menu.php">
	<abbr title="Login"><img src="vsvs.jpg" width="60px" height="50px" style="border-radius: 50%;float: left"></abbr></a>
	<abbr title="8184839227"><img onclick="open1(this)" onmouseover="bigsp1\(this)" onmouseleave="bigout1\(this)" src="whats.jpg" width="60px" height="50px" style='float:right;'></abbr>
	<div align="center" style="max-width: 50%;color: white;background-color: red;align-items: center; font-family: times in roman; border-radius: 30px;border: 1px solid black;">
		<span style="font-size: 40px">Welcome To FoodShala</span></div>
		
</div>
<div align="right" id="out" style="display:  ">
	<form action="logout.php" method="get" id="logoutf">
					<input type="submit" name="logoutf" hidden=""></form>
			<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out" onclick="lout()">logout</button></div>
<?php 

	if(isset($_POST['submitt']))
	{
		echo('<script> this.style.background="ba5.jpg"</script>');
	$s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
	if($con->connect_error)
	{
		die($con->connect_error);
	}

	$item=$_POST["item"];
	$restaurant=$_SESSION["rest"];
	$type=$_POST["types"];	
	//echo '<script>alert("'.$restaurant.'");</script>';
		$sql="INSERT INTO items (item,restaurant,type) VALUES ('$item','$restaurant','$type')";
		if(mysqli_query($con,$sql)){
			echo ("<script>alert('Item successfully added');location.href='addmenuitems.php';</script>");
		}
		else
		{	
			echo ("<script>alert('You already have this item');location.href='addmenuitems.php';</script>");
		}
}	
	?>

<form action="addmenuitems.php" method="post" align="center">	
	<table border="0"  cellpadding="7" cellspacing="7" width="600" align="center" id="show" style="display:;">
			<tr>
				<th colspan="3" align="center" style="color: darkblue;font-size: 60px;font-family: Segoe Script;">
					
					<b><u>Enter Items</u></b>
				</th>
			</tr>
		<tr>
	    	<td style="font-size: 30px;color: #641E16" width="170" ><label for="1"><b>Item Name:</b></label></td>
	    	<td width:><input type="text" name="item" id="1" required="" placeholder="enter item name"></td>
		</tr>
		<tr>
	  		<td style="font-size: 30px;color: #641E16"><label for="2"><b>Type:</b></label></td>
	  		<td width="350"><input type="radio" name="types" value="veg" id="10" checked><label for="10">Veg</label>
		<input type="radio" name="types" value="non-veg" id="11"> <label for="11">Non-veg</label>
		</td>
		</tr>
		<tr>
			<td align="center" colspan="">
					<input type="reset" value="Reset" style="background-color: red;font-color:black ;height: 60px;width: 150px;border-radius: 30px;font-size: 19px;text-align: center;" onmouseover="bigsp2r(this)" onmouseleave="bigout2r(this)">
							</td>
			<td height="100" align="">
					<input type="submit" value="Submit" id="sub" name="submitt" style="background-color: blue;font-color:black ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2b(this)" onmouseleave="bigout2b(this)">
			</td></tr>
			</table>
		</form>
</body>
</html>
