<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="color.css">
	<script type="text/javascript" src="cssjs.js"></script>
	<script type="text/javascript" src="js1.js"></script>
	<title>FoodShala</title>
	<link rel="Icon" type="image/Icon" href="biryani.jpg">
	<script type="text/javascript">
		var nn=0;
	</script>
</head>
<body background="ba8.jpg" style="background-color:; background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: cover; text-align: justify;">
<div style="background-color: lightgray;background-position: fixed;max-width: 100%; border-radius: 10%;border:3px solid black;" align="center" onmouseover="bigsp\(this)" 	onmouseleave="bigout\(this)"><a href="menu.php">
	<abbr title="VS"><img src="vsvs.jpg" width="60px" height="50px" style="border-radius: 50%;float: left"></abbr></a>
	<abbr title="8184839227"><img onclick="open1(this)" onmouseover="bigsp1\(this)" onmouseleave="bigout1\(this)" src="whats.jpg" width="60px" height="50px" style='float:right;'></abbr>
	<div align="center" style="max-width: 50%;color: white;background-color: red;align-items: center; font-family: times in roman; border-radius: 30px;border: 1px solid black;">
		<span style="font-size: 40px">Welcome To FoodShala</span></div>
	</div>

<!-- <button name="button" type="button" style="background-color: gray;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2g(this)" onmouseleave="bigout2g(this)"> -->
<script type="text/javascript">
	var c=0;
	function hide() {
		c++;
		if(c%2==1)
		{
			document.getElementById('reg').style.display="block";
			document.getElementById('reg1').style.display="block";
		}
		else
		{
			document.getElementById('reg').style.display="none";
			document.getElementById('reg1').style.display="none";
		}
	}
</script>
<?php  

	echo '<div id="log" style="display: none ">
	<a href="login.php"><button style="background-color: yellow;float:right;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;">Login</button></a>
	<table align="right"><tr><th align="center" colspan="2">
	<button style="background-color: skyblue;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;" onclick="hide()">Register</button></th></tr><tr><th>
	<a href="register.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: none" id="reg">Customer</button></a></th><th>
	<a href="register1.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: none" id="reg1">Restaurant</button></a></th></tr></table>
</div>
	<div align="right" id="out" style="display:  ">
	<form action="logout.php" method="get" id="logoutf">
					<input type="submit" name="logoutf" hidden=""></form>
			<a href="vieworders.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out2">View_orders</button></a>
			<a href="addmenuitems.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out1">Add_menu_items</button></a>
			<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="out" onclick="lout()">logout</button></div>';
	session_start();
	 if(!(isset($_SESSION["user"])))
 	{
  		session_destroy();
  		echo '<script>document.getElementById("log").style.display="block";document.getElementById("out").style.display="none";document.getElementById("out1").style.display="none";document.getElementById("out2").style.display="none";</script>';
  	}
  	else
  	{echo '<script>document.getElementById("log").style.display="none";document.getElementById("out").style.display="block";</script>';
  	if($_SESSION["rest"]=="c"){
  		echo '<script>document.getElementById("out1").style.display="none";document.getElementById("out2").style.display="none";</script>';
  	echo "<marquee scrollamount='15' behaviour='scroll' direction='left' onmouseover='this.stop()' onmouseout='this.start()'><span style='color: blue;font-size:40px;background-color: gold;padding-top: 0px;padding-bottom: 0px;align-items: center; font-family: times in roman; border-radius: 20px;border: 2px solid black'>Welcome ".$_SESSION["user"]." order your favourite food</span></marquee>";}
  	else
  		echo "<marquee scrollamount='15' behaviour='scroll' direction='left' onmouseover='this.stop()' onmouseout='this.start()'><span style='color: blue;font-size:40px;background-color: gold;padding-top: 0px;padding-bottom: 0px;align-items: center; font-family: times in roman; border-radius: 20px;border: 2px solid black'>Welcome ".$_SESSION["user"]." to your restaurant '".ucwords($_SESSION["rest"])."'</span></marquee>";}
?>	
	
<br><br>
	<h3 align="center" style="padding-top: 0px;font-size: 40px;color: darkblue"><u>Tasty Food</u></h3>
<table style=""><tr><td height="225">
	<marquee style="font-size: 25px;" scrollamount="10" behavior="alternate" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
		<abbr title="Dosa"><table><tr><th width="440px">
			<span >
				<a href="dosa.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="dosa.jpg" height="200px" width="430px" alt="dosa" style="border-radius: 20%;">
				</a>
			</span>
		</abbr></th><th width="440px">
		<abbr title="Biryani">
			<span >
				<a href="biryani.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="biryani.jpg" height="200px" width="430px" alt="biryani" style="border-radius: 20%">
				</a>
			</span><br>
		</abbr></th><th width="440px">
		<abbr title="Fish Fry">
			<span >
				<a href="fish.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="fish.jpg" height="200px" width="430px" alt="fishfry" style="border-radius: 20%">
				</a>
			</span><br>
		</abbr></th>
	<th width="440px">
		<abbr title="Burger">
			<span >
				<a href="burger.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="burger.jpg" height="200px" width="430px" alt="Burger" style="border-radius: 20%">
				</a>
			</span>
		</abbr></th><th width="440px">
		<abbr title="Samosa">
			<span >
				<a href="samosa.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="samosa.jpg" height="200px" width="430px" alt="Samosa" style="border-radius: 20%;background: fixed;">
				</a>
			</span>
		</abbr></th><th width="440px">
		<abbr title="pizza">
			<span >
				<a href="pizza.jpg">
					<img onmouseover="bigImg1(this)" onmouseleave="normalImg1(this)" src="pizza.jpg" height="200px" width="430px" alt="Pizza" style="border-radius: 20%;background: fixed;">
				</a>
			</span>
		</abbr></th></tr></table></marquee>
	</td></tr></table>
	<div align="center" id="logged"><a href="login.php"><button name="button" type="button" style="background-color: gray;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2g(this)" onmouseleave="bigout2g(this)" onclick="alert('Please login to order Food')">Order</button></a></div>

	<h3 align="center" style="padding-top: 0px;font-size: 35px;color: red;background: white"><u>Available Restaurants and Items</u></h3>
<?php  

	if($_SERVER["REQUEST_METHOD"]=="POST")
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

	$restname=$_POST["restaurant1"];
	//$foodorder=$_POST["item[]"];
	$username=$_SESSION["user"];
	$pwd=$_SESSION["pwd"];
	$foodorder= NULL;
	$check=0;$arr=array();$ff=0;
	if(!empty($_POST['item'])){

		foreach ($_POST['item'] as $food) {
			$food1=ucfirst($food);
			array_push($arr, "$food1");$ff++;
			//echo '<script>alert("'.$arr[$check].'");</script>';
			if($ff!=1)
			$foodorder.=",";
			$foodorder.=ucfirst($food);
			$sql5="select restaurant from items where item='$food' AND restaurant='$restname'";
			$res5=$con->query($sql5);
			if(!($res5->num_rows>0))
				{	$check=1;
					echo '<script>alert("Please select the available items from the restaurant '.ucfirst($restname).'");location.href="menu.php";</script>';
				}
			//$foodorder[$l]=$food;
				// $foodorder.=",";
			//echo '<script>alert("'.$foodorder.'");</script>';
			
		}$foodordered="";
		$sql6="select food from ordered where name='$username' AND pwd='$pwd' AND restaurant='$restname'";
		$res6=$con->query($sql6);//echo '<script>alert("hi");</script>';
		if($res6->num_rows>0)
		{	
			while($row6=$res6->fetch_assoc())
			{	
				$ar=explode(",", $row6["food"]);
						if(count($arr)==count(array_intersect($ar,$arr)))
						{
							$check=1;
							echo ("<script>alert('You have already ordered these items in this Restaurant ".ucfirst($restname)."');location.href='menu.php';</script>");
						}

				//$ch=array_diff($arr, $ar);
						$ff=0;
				$foodordered.=$row6["food"];
				for($a=0;$a<sizeof($arr);$a++)
				{	$ff=0;
					for($b=0;$b<sizeof($ar);$b++)
					{
						if(ucfirst($arr[$a])==$ar[$b])
						{$ff=1;break;}	
					}
					if($ff==0)
					{
						$foodordered.=",";
						$foodordered.=ucfirst($arr[$a]);	
					}
				}
			}
		}
		else
			$foodordered=$foodorder;
	}
	else{$check=1;
		$sql7="select DISTINCT restaurant from items";
		$res7=$con->query($sql7);
		if(!($res7->num_rows>0))
		{
			echo '<script>alert("We do not have anything to order.");location.href="menu.php";</script>';}
		else
	 	echo '<script>alert("No item has been selected.. Please select item/s to order");location.href="menu.php";</script>';}
	//echo '<script>alert("'.$foodordered.'");</script>';
	// $sql="CREATE table ordered(name varchar(15),restaurant varchar(15),food varchar(50))";
	// if(mysqli_query( $con,$sql)){  
	//    echo "<script>alert('Table created successfully.');</script>";}
	 	
	 	if($check==0){
	 	$sql11="delete from ordered where name='$username' AND pwd='$pwd' AND restaurant='$restname'";
	 	mysqli_query($con,$sql11);
	 	//if(mysqli_query($con,$sql11))
	 		// echo "<script>alert('Items added to the previous order.');</script>";
		$sql12="INSERT INTO ordered VALUES ('$username','$pwd','$restname','$foodordered')";
		if(mysqli_query($con,$sql12)){
			echo ("<script>alert('Order successful.. Your current item/s:".ucfirst($foodordered)."');location.href='menu.php';</script>");
		}
		else
		{	
			echo ("<script>alert('You have already ordered these items in this Restaurant');location.href='menu.php';</script>");
		}}
	}
?>


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
	echo '<table cellpadding="7" style="background-color: cyan;align-items: center;color:blue; font-family: times new roman; border-radius: 30px;font-size:23px;border: 5px solid black;display:;max-width:100%; min-width: 50%; width: 100%" border="0" id="infff">
		<tr><th colspan="2" align="center" style="font-size:30px;color:  #99189f;background-color:gold; width:;border-radius:30px;"><u>Restaurant</u></th>
		<th colspan="2" align="center" style="font-size:30px;color: #99189f;background-color:gold; width:;border-radius:30px;"><u>Available Items</u></th></tr>';
	$sql="select DISTINCT restaurant from items";
	$res=$con->query($sql);
		$rowsno=$res->num_rows;
		if($res->num_rows>0)
		{
			while($row=$res->fetch_assoc())
			{	
				echo '<tr>
				<th style="color:blue" colspan="2" align="center">'.ucfirst($row["restaurant"]).'</th><th style="color:blue" align="">';$s=$row["restaurant"];
					if(isset($_SESSION["user"])){
					if($_SESSION["food"]=="veg")
						$s1="veg";
					else if($_SESSION["food"]=="non-veg")
						$s1="non-veg";
					else
						$s1="both";}
					else
						$s1="both";
				//echo '<script>alert("'.$_SESSION["food"].'");</script>';
				if($s1!="both")
				$sql1="select item from items where restaurant='$s' and type='$s1'";
				else
				 	$sql1="select item from items where restaurant='$s'";
				$res1=$con->query($sql1);
				$rowsno1=$res1->num_rows;

				if($res1->num_rows>0)
				{
					while($row1=$res1->fetch_assoc())
					{
						echo ucfirst($row1["item"]).'; ';
					}	
				}
				else
					{
						if($s1!="both")
						echo ucfirst($s1).' type food is not available; ';
						else
							echo 'Veg & Non-veg both types of food is not available; ';
					}
				echo '</th></tr>';
			}
		}
		else{
			echo "<tr>
				<th style='color:blue' colspan='3' align='center'>Sorry currently we don't have any available Restaurants with available items</th></tr>";

		}
		echo '</table>';
		echo '<form action="menu.php" method="POST" enctype="multipart/form-data" style="font-size: 18px;font-weight: bold; ">
		<div align="center" style="display:none" id="logg"><div align="center" style="min-width:60%;max-width:100%;width:70%;height: px; padding: 20px;border: 5px solid black;margin: 1px;border-radius: 77px;
			overflow: auto;color: blue;font-size: 26px;background-color: lightgray;font-style: italic;">  
		<table border="0" width="95%" cellpadding="7" cellspacing="1" align="center" title="Order" id="user" style="background-color: skyblue;align-items: center;color:blue; font-family: times new roman;max-width:100%; border-radius: 30px;font-size:23px;border: 2px solid black;">
		<tr align="center" style="background-color:yellow">
			<th style="color:  #99189f;font-size: 30px;border-radius:30px" colspan="2"><u>Select to Order</u></th>
		</tr>
		<tr >
			<th style="font-size:30px;">Select Restaurant:</th>
			';
			if(isset($_SESSION["user"]))
			echo '<script>document.getElementById("logg").style.display="block";</script>';
		$sql2="select DISTINCT rest from restaurant";
		$res23=$con->query($sql2);
		$rowsno23=$res23->num_rows;
		if($res23->num_rows>0)
		{
			echo ('<th rowspan=""><select name="restaurant1" id="restaurant1" style="color:;background-color:skyblue ;height: 34px;width: 200px">');
			while($row23=$res23->fetch_assoc())
			{
				echo '<option value="'.$row23["rest"].'">'.ucfirst($row23["rest"]).'</option>';
			}
		}
		else
			echo ("<th style='font-size:30px;color:  red'>No Restaurants Available");
		echo "</th></tr><tr><th style='font-size:30px;'>Select Items:</th>";
			if(isset($_SESSION["user"]))
				$foodtype=$_SESSION["food"];
			else
				$foodtype="both";
			if($foodtype=="veg")
				$sql3="select DISTINCT item from items where type='$foodtype'";
			else if($foodtype=="non-veg")
				$sql3="select DISTINCT item from items where type='$foodtype'";
			else
				$sql3="select DISTINCT item from items";
			$res3=$con->query($sql3);
			$rowsno3=$res3->num_rows;
			$coun=0;
			if($res3->num_rows>0)
			{	echo "<th style='color:  #99189f'>";
				while($row3=$res3->fetch_assoc())
				{$coun++;
				echo '<input type="checkbox" name="item[]" value="'.$row3["item"].'"><label style="font-color:red;">'.ucfirst($row3["item"]).'  </label>';
					if($coun%5==0)
						{echo '<br><br>';}
				}
			}
			else
				echo "<th style='color: red;font-size:30px'>No items Available";
		echo '</th>
		</tr>
		</table></form>';
	?>
<?php  
	 if(isset($_SESSION["user"]))
 	{	echo "<script>document.getElementById('logged').style.display='none';</script>";
	if($_SESSION["type"]=="customer")
	{echo '<br><div align="center">
	<button name="button" type="submit" style="background-color: gray;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2g(this)" onmouseleave="bigout2g(this)" onclick="">Order</button>
	</div>
<script type="text/javascript">
	function order() {
		alert("Your food is on your way!!");
	}
</script>';}
	else{
		echo '<div align="center">
	<button name="button" type="button" style="background-color: gray;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigsp2g(this)" onmouseleave="bigout2g(this)" onclick="order1()")">Order</button>
	</div></div>
	<script type="text/javascript">
	function order1() {
		alert("You do not have permission to order Food!!");
	}
</script>';

	}}
?>
</body>
</html>
