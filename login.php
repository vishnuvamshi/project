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
	<title>login</title>
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

	$uname=$_POST["username"];
	$pword=$_POST["password"];
	$type=$_POST["types"];
	//echo '<script>alert("'.$type.'");</script>';
	if($type=="customer")
	{	
		$sql="select * from customer";	
	}
	else
		$sql="select * from restaurant";

		$res=$con->query($sql);
		$rowsno=$res->num_rows;$count='0';$newuser=0;
		if($res->num_rows>0)
		{
			while($row=$res->fetch_assoc())
			{	if($uname==$row["name"])
					$newuser=1;
				if($uname==$row["name"]&&$pword==$row["pwd"])
				{
					if(!($pword==$row["pwd"]))
						echo("<script>alert('Password mismatch please enter correct password');
						document.getElementById('wrong').style.display='block';</script>");
					else
					{	echo("<html><body background='link.jpg'></body></html>");
						 //session_start();
						 $_SESSION["user"]=$uname;$_SESSION["pwd"]=$pword;$_SESSION["type"]=$type;
						 if($type=="restaurant"){
						 $_SESSION["rest"]=$row["rest"];$_SESSION["food"]="both";}
						 else
						 	{$_SESSION["rest"]="c";$_SESSION["food"]=$row["preference"];}
						echo "<script>location.href='menu.php';</script>";
					}
				}
				else
				{$count=$count+1;}
		}

	}
		if($count==$rowsno)
		{
			if($newuser==0)
			 echo("<script>alert('Your are a new user please register');location.href='login.php';</script>;");
			else
			echo("<script>alert('user name password mismatch');location.href='login.php';</script>;");
		}

}  
		echo('<div align="right" style="display:none"><a href="logout.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="lout">logout</button></a></div><form action="" method="post" align="center" id="123">	 
		<table border="0"  cellpadding="7" cellspacing="7" width="600" align="center" id="show" style="display:;">
			<tr>
				<th colspan="3" align="center" style="color: darkblue;font-size: 60px;font-family: Segoe Script;">
					
					<b><u>Login</u></b>
				</th>
			</tr>
		<tr>
	    	<td style="font-size: 30px;color: #641E16" width="170" ><label for="1"><b>User Name:</b></label></td>
	    	<td width:><input type="text" name="username" id="1" required="" placeholder="enter username"></td>
	    	<td rowspan="2" width:><span id="wrong" style="display:none;font-size:25px;color:red;font-weight:bold">Wrong-credintials please enter again</span></td>
		</tr>
		<tr>
	  		<td style="font-size: 30px;color: #641E16"><label for="2"><b>Password:</b></label></td>
	  		<td ><input type="password" name="password" id="2" required="" placeholder="enter password"></td>
		</tr>
		<tr>
	  		<td style="font-size: 30px;color: #641E16"><label for="2"><b>Type:</b></label></td>
	  		<td width="350"><input type="radio" name="types" value="customer" id="10" checked><label for="10">Customer</label>
		<input type="radio" name="types" value="restaurant" id="11"> <label for="11">Restaurant</label>
		</td>
		</tr>
		<tr>
			<td height="100" align="">
					<input type="submit" value="Submit" id="sub" name="submitt" style="background-color: blue;font-color:black ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2b(this)" onmouseleave="bigout2b(this)">
			</td><td align="center" colspan="2">
							<button name="button" type="button" style="background-color: gray;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onclick="hide()" onmouseover="bigsp2g(this)" onmouseleave="bigout2g(this)">Sign up
							</button></td></tr>
		<script type="text/javascript">
					var c=0;
	function hide() {
		c++;
		if(c%2==1)
		{
			document.getElementById("reg").style.display="block";
			document.getElementById("reg1").style.display="block";
			document.getElementById("sub").style.display="none";

		}
		else
		{
			document.getElementById("reg").style.display="none";
			document.getElementById("reg1").style.display="none";
			document.getElementById("sub").style.display="block";
		}
	}</script></table>
	<table border="0"  cellpadding="7" cellspacing="7" width="85%" align="center" id="show" style="display:;">
			<tr><td colspan="2" align="right">
			<button style="background-color:	yellow;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;display: none" onmouseover="bigsp2r(this)" onmouseleave="bigout2r(this)" onclick="regi()" id="reg">Customer</button></td><td align="center" colspan="">
			<button style="background-color: skyblue	;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;display: none" onmouseover="bigsp2r(this)" onmouseleave="bigsp2b(this)" onclick="regi1()" id="reg1" >Restaurant</button>
			<script type="text/javascript">
					function regi() {
							location.href="register.php";
						}
						function regi1() {
							location.href="register1.php";
						}
			</script>
		</td>
	</tr></table>
	</form>');
	?>
</body>
</html>
