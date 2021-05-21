<?php 
 session_start();

   	if(isset($_SESSION["user"]))
   	{	//session_destroy();
  		 echo('<script>if("menu.php"==window.history.forward()) {window.history.forward();}
		 else{window.history.back();}</script>');
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="Icon" type="image/Icon" href="dosa.jpg">
	<script type="text/javascript" src="cssjs.js"></script>
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
	

	<form action="register.php" method="POST" enctype="multipart/form-data" style="font-size: 18px;font-weight: bold;">	 
		<table border="0" width="450px" cellpadding="7" cellspacing="1" align='center' title="Register" id="user" style="display:">
		<tr align="center">
			<th style="color:  #78281f;font-size: 30px;" colspan="2"><u>Registration Form</u></th>
		</tr>
		
	<tr>
	    <th align="center" width="350">Name:</th>
	    <td width="300"><input type="text" name="ln" id="ln" placeholder="enter your name" required=""></td>
	</tr>
	<tr>
		<th align="center">Password:</th>
		<td><input type="password" name="password" id="password" placeholder="enter your password" required="required"></td><br>
	</tr>
	<tr>
		<th align="center">preference:</th>
		<!-- <td><input type="radio" name="gender"><br></td> -->
		<td width="350"><input type="radio" name="preference" value="veg" id="10" checked><label for="10">veg</label>
		<input type="radio" name="preference" value="non-veg" id="11"> <label for="11">Non-veg</label>
		<input type="radio" name="preference" value="both" id="12"> <label for="12">Both</label>
		</td>
	</tr><br>
	<tr>
		<th align="center">Mobile No:</th>
		<td><input type="text" maxlength="10" name="Mobile" id="mob" required=""></td><br>
	</tr>
	<tr>
		<td align="center" height="70">
			<input type="reset" name="reset" style="background-color: #FF0000;color: darkblue;font-size: 15px" onmouseover="big(this)" onmouseleave="bigo(this)"></td>
		<th height="70" align="center">
		<input type="submit" value="Register" style="background-color: #808000;color: darkblue;font-size: 15px" onmouseover="big(this)" onmouseleave="bigo(this)"
		onclick="return checkall();"></th>
	</tr>
</table>

</form>
<script type="text/javascript">
	function checkall()
	{	
		var phone=document.getElementById('mob').value;
		var nam=document.getElementById('ln').value;
		var pa=document.getElementById('password').value;
		var pa1=/^[0-9]{0,10}\w{1,15}$/;
		var na=/^[a-z]{1}[a-z]{1,20}$/;
		var ph=/^[6-9]{1}[0-9]{9}$/;
		if(!(na.test(nam)))
			{alert("Name is wrong");return false;}
		if(!(pa1.test(pa)))
			{alert("Password is wrong");return false;}
		if(!(ph.test(phone)))
			{alert("Mobile number is wrong");return false;}
		var add=document.getElementById('add').value;
	}
</script>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$s="remotemysql.com:3306";
	$un="0Qc34rspqi";
	$pw="dGdmOsAXAn";
	$db="0Qc34rspqi";
	$con=mysqli_connect($s,$un,$pw,$db);
	if(!$con)
		die("error".mysqli_connect_error());
	// else
	// 	echo "succes";

		$ln=$_POST["ln"];
		$password=$_POST["password"];
		$preference=$_POST["preference"];
		$mobile=$_POST["Mobile"];
	// else{  
	// echo "Sorry, database creation failed ".mysqli_error($con);  
	// }

		$sql="INSERT INTO customer (name,pwd,preference,mob) VALUES ('$ln','$password','$preference','$mobile')";
		if(mysqli_query($con,$sql)){
			echo ("<script>alert('Registration completed');location.href='login.php';</script>");
		}
		else
		{	
			$sql1="select * from customer where mob='$mobile'";
			$res1=$con->query($sql1);
			if($res1->num_rows>0)
			{
				echo ("<script>alert('This mobile number already has an account');location.href='register.php';</script>");
			}
			else
			echo ("<script>alert('You have already registered please login');location.href='login.php';</script>");
		}
}
	?>


</body>
</html>
