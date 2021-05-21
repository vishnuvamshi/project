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
<body background="ba5.jpg" style="background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-size: cover; text-align: justify;">
<div style="background-color: lightgray;background-position: fixed;max-width: 100%; border-radius: 10%;border:3px solid black;" align="center" onmouseover="bigsp\(this)" 	onmouseleave="bigout\(this)"><a href="menu.php">
	<abbr title="VS"><img src="vsvs.jpg" width="60px" height="50px" style="border-radius: 50%;float: left"></abbr></a>
	<abbr title="8184839227"><img onclick="open1(this)" onmouseover="bigsp1\(this)" onmouseleave="bigout1\(this)" src="whats.jpg" width="60px" height="50px" style='float:right;'></abbr>
	<div align="center" style="max-width: 50%;color: white;background-color: red;align-items: center; font-family: times in roman; border-radius: 30px;border: 1px solid black;">
		<span style="font-size: 40px">Welcome To FoodShala</span></div>
	</div>
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
	session_start();
	 if(!(isset($_SESSION["user"])))
 	{
  		session_destroy();
  		echo '<script>document.getElementById("log").style.display="block";document.getElementById("out").style.display="none";document.getElementById("outt").style.display="none";</script>';
  	}
echo '<div id="log" style="display: none ">
	<a href="login.php"><button style="background-color: yellow;float:right;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;">Login</button></a>
	<table align="right"><tr><th align="center" colspan="2">
	<button style="background-color: skyblue;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;" onclick="hide()">Register</button></th></tr><tr><th>
	<a href="register.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: none" id="reg">Customer</button></a></th><th>
	<a href="register1.php"><button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: none" id="reg1">Restaurant</button></a></th></tr></table>
		</div>';
echo '<div align="right" id="out" style="display:  ">
		<form action="logout.php" method="get" id="logoutf">
			<input type="submit" name="logoutf" hidden=""></form>
		<a href="vieworders.php"><button style="background-color: violet;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="">View_orders</button></a>
		<a href="addmenuitems.php"><button style="background-color: violet;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="">Add_menu_items</button></a>
		<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="" onclick="lout()">logout</button></div>
		<div align="right" id="outt" style="display:>
		<form action="logout.php" method="get" id="logoutf">
			<input type="submit" name="logoutf" hidden=""></form>
		<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="" onclick="myorder()" name="">My_orders</button>
		<button style="background-color: violet	;font-color:#f90413 ;height: 30px;width: 130px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="" onclick="lout()">logout</button></div>';
	
  	if(isset($_SESSION["user"]))
  	{
  		if($_SESSION["rest"]=="c")
  		{
  			echo '<script>document.getElementById("out").style.display="none";</script>';
  			echo "<marquee scrollamount='15' behaviour='scroll' direction='left' onmouseover='this.stop()' onmouseout='this.start()'><span style='color: blue;font-size:40px;background-color: gold;padding-top: 0px;padding-bottom: 0px;align-items: center; font-family: times in roman; border-radius: 20px;border: 2px solid black'>Welcome ".ucfirst($_SESSION["user"])." order your favourite food</span></marquee>";
  		}
  		else{
  			echo '<script>document.getElementById("outt").style.display="none";</script>';
  			echo "<marquee scrollamount='15' behaviour='scroll' direction='left' onmouseover='this.stop()' onmouseout='this.start()'><span style='color: blue;font-size:40px;background-color: gold;padding-top: 0px;padding-bottom: 0px;align-items: center; font-family: times in roman; border-radius: 20px;border: 2px solid black'>Welcome ".ucfirst($_SESSION["user"])." to your restaurant '".ucwords($_SESSION["rest"])."'</span></marquee>";
  		}
  		echo '<script type="text/javascript">
		var co=0;
		function cancelconfirm()
		{
			var conf=confirm("Do you want to cancel this order?"); 
			if(!(conf))
				return false;
		}
		function myorder()
			{	co++; if(co%2==1){
			document.getElementById("orderstable").style.display="block";
			document.getElementById("").style.background="green";}
			else{ document.getElementById("orderstable").style.display="none";document.getElementById("order").style.background="gold";}
		}
		</script>';	
	$s="localhost";
	$u="root";
	$p="";
	$d="MyDB";
	$con=new mysqli($s,$u,$p,$d);
	if($con->connect_error)
	{
		die($con->connect_error);
	}	
	$us=$_SESSION["user"];$pwd=$_SESSION["pwd"];
	$sql123="select * from ordered where name='$us' AND pwd='$pwd'";
	if(mysqli_query($con,$sql123))
	$res123=mysqli_query($con,$sql123);	
	if($res123->num_rows>0)
	{	
		echo('<table cellpadding="7" style="background-color: gold;align-items: center;color:blue; font-family: times new roman; border-radius: 30px;font-size:25px;border: 5px solid black;display:none;max-width:90%" border="1" id="orderstable">

		<tr>
			<th colspan="5" align="center" style="font-size:40px;background-color:cyan; width:1200px;border-radius:20px;">My_orders</th>
			</tr>
			<tr style="background-color:;color:black;">
				<th colspan="" align="center">Restaurant name</th><th>Ordered food</th><th>Status</th><th>Cancel</th>
			</tr>
			<form method="post" action="menu.php">');
		while($row123=mysqli_fetch_assoc($res123))
		{
			echo('<tr>
				<td align="center">'.ucwords($row123["restaurant"]).'</td><td>'.$row123["food"].'</td><td>Waiting for conformation </td>'); 
				echo '<td align="center">
				<button type="submit" style="background-color: cyan;font-color:#f90413 ;height: 30px;width: 120px;border-radius: 30px;font-size: 15px;text-align: center;display: " id="can" name="can" value="'.$row123["restaurant"].'" onclick="return cancelconfirm()">Cancel</button></td></tr>';
		}echo '</table>';
	}
	else
	{
		echo('<div><table cellpadding="7" style="background-color: gold;align-items: center;color:blue; font-family: times new roman; border-radius: 30px;font-size:25px;border: 5px solid black;display:none;max-width:90%" border="1" id="orderstable">

		<tr>
			<th colspan="5" align="center" style="font-size:40px;background-color:cyan; width:1200px;border-radius:20px;">My_orders</th>
			</tr>
			<tr style="background-color:;color:black;">
				<th colspan="" align="center">Restaurant name</th><th>Ordered food</th><th>Status</th><th>Cancel</th>
			</tr>
			<tr><th colspan="5" style="font-size:40px" align="center">No items available</th></tr></table>');
}}
else
{
	echo '<script>document.getElementById("out").style.display="none";document.getElementById("outt").style.display="none";document.getElementById("log").style.display="block";</script>';	
}
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
	<div align="center" id="logged"><a href="login.php"><button name="button" type="button" style="background-color: pink;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigout2g(this)" onmouseleave="bigsp2g(this)" onclick="alert('Please login to order Food')">Order</button></a></div>

	<h3 align="center" style="padding-top: 0px;font-size: 35px;color: red;background: white"><u>Available Restaurants and Items</u></h3>
<?php  

	if(isset($_POST['button']))
	{
		echo('<script> this.style.background="ba5.jpg"</script>');
	$s="localhost";
	$u="root";
	$p="";
	$d="MyDB";
	$con=new mysqli($s,$u,$p,$d);
	if($con->connect_error)
	{
		die($con->connect_error);
	}

	$restname=$_POST["restaurant1"];
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
	 
	 	if($check==0){
	 	$sql11="delete from ordered where name='$username' AND pwd='$pwd' AND restaurant='$restname'";
	 	mysqli_query($con,$sql11);
	 	//if(mysqli_query($con,$sql11))
	 		// echo "<script>alert('Items added to the previous order.');</script>";
		$sql="INSERT INTO ordered VALUES ('$username','$pwd','$restname','$foodordered')";
		if(mysqli_query($con,$sql)){
			echo ("<script>alert('Order successful.. Your current item/s:".ucfirst($foodordered)."');location.href='menu.php';</script>");
		}
		else
		{	
			echo ("<script>alert('You have already ordered these items in this Restaurant');location.href='menu.php';</script>");
		}}
	}
	if(isset($_POST['can']))
	{
		echo('<script> this.style.background="ba5.jpg"</script>');
		$s="localhost";
		$u="root";
		$p="";
		$d="MyDB";
		$con=new mysqli($s,$u,$p,$d);
		if($con->connect_error)
			die($con->connect_error);
		$restname=$_POST["can"];
		$username=$_SESSION["user"];
		$pwd=$_SESSION["pwd"];
		//echo '<script>alert("'.$username.'");</script>';
		$sql55="DELETE FROM ordered where name='$username' AND restaurant='$restname' AND pwd='$pwd'";
			if($con->query($sql55))
				echo "<script>alert('Order Cancelled from the restaurant ".ucfirst($restname)."');location.href='menu.php';</script>";
	}
?>



<?php  
	$s="localhost";
	$u="root";
	$p="";
	$d="MyDB";
	$con=new mysqli($s,$u,$p,$d);
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
				$sql2="select item from items where restaurant='$s' and type='$s1'";
				else
				 	$sql2="select item from items where restaurant='$s'";
				$res1=$con->query($sql2);
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
		<tr align="center" style="">
			<th style="color: #99189f;font-size: 30px;background-color:yellow;border-radius:30px" colspan="3"><u>Select to Order</u></th>
		</tr>
		<tr >
			';
			if(isset($_SESSION["user"]))
			echo '<script>document.getElementById("logg").style.display="block";</script>';
		$sql2="select DISTINCT rest from restaurant";
		$res2=$con->query($sql2);
		$rowsno2=$res2->num_rows;$c=1;$cc=0;
		if($res2->num_rows>0)
		{
			while($row2=$res2->fetch_assoc())
			{$cc++;
				echo ('<th rowspan="">');
				echo '<input type="radio" name="restaurant1" value="'.ucfirst($row2["rest"]).'" id="'.$c.'" checked><label for="'.$c.'">'.ucfirst($row2["rest"]).'</lable>';
				$nr=$row2["rest"];$c++;
			if(isset($_SESSION["user"]))
				$foodtype=$_SESSION["food"];
			else
				$foodtype="both";
			if($foodtype=="veg")
				$sql33="select DISTINCT item from items where type='$foodtype' AND restaurant='$nr'";
			else if($foodtype=="non-veg")
				$sql33="select DISTINCT item from items where type='$foodtype'  AND restaurant='$nr'";
			else
				$sql33="select DISTINCT item from items where restaurant='$nr'";
			$res33=$con->query($sql33);
			$rowsno33=$res33->num_rows;
			$count=0;
			if($res33->num_rows>0)
			{	echo "<th style='color:  #99189f'>";
				while($row33=$res33->fetch_assoc())
				{$count++;
				echo '<input type="checkbox" name="item[]" value="'.$row33["item"].'"><label style="font-color:red;">'.ucfirst($row33["item"]).'  </label>';
					if($count%3==0)
						{echo '<br><br>';}
				}
			}
			else
				echo "<th style='color: red;font-size:30px'>No items Available</th>";
			echo '</th>';
	if(isset($_SESSION["user"]))
 	{	echo "<script>document.getElementById('logged').style.display='none';</script>";
	if($_SESSION["type"]=="customer")
	{
		if($cc==1)
		echo '<th align="center" rowspan="'.$rowsno2.'">
	<button name="button" type="submit" style="background-color: pink;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigout2g(this)" onmouseleave="bigsp2g(this)" onclick="">Order</button>
	</th>';
	}
	else{
		if($cc==1)
		echo '<th align="center" rowspan="'.$rowsno2.'">
	<button name="button" type="button" style="background-color: pink;font-color:#f90413 ;height: 60px;width: 150px;border-radius: 30px;font-size: 25px;text-align: center;" onmouseover="bigout2g(this)" onmouseleave="bigsp2g(this)" onclick="order1()")">Order</button>
	</th>';
	echo '<script type="text/javascript">
	function order1() {
		alert("You do not have permission to order Food!!");
	}
</script>';

	}
}

			echo '</tr>';
			}
		}
		else
			echo ("<th style='font-size:30px;color:  red'>No Restaurants Available");
		echo '</table></form>';
	?>
</body>
</html>
