<?php
error_reporting(0);
		mysql_connect("localhost","root","") or die(mysql_error());
		$db_name="gamer_forever";
		mysql_select_db($db_name) or die(mysql_error());

		$ucon=$_SESSION['u_contact'];

		$bill=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='buy' ") or die(mysql_error());				
		$sell_bill=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='sell' ") or die(mysql_error());

//cart total rs
		if (mysql_num_rows($sell_bill)==0) {
		$price=mysql_query("select sum(price) as total from bill where contact='$ucon' and status='pending' and mode='buy' ");
		//$price=mysql_query("select sum(price) as total from products p,bill b where b.name=p.name and b.contact='$ucon'"); 
		$row=mysql_fetch_assoc($price);
		$_SESSION['price']=$row['total'];
	}

		if (mysql_num_rows($bill)==0) {
		$price=mysql_query("select sum(price) as total from bill where contact='$ucon' and status='pending' and mode='sell'");
		//$price=mysql_query("select sum(price) as total from products p,bill b where b.name=p.name and b.contact='$ucon'"); 
		$row=mysql_fetch_assoc($price);
		$_SESSION['price']=$row['total'];
	}

// cart count
	if (mysql_num_rows($sell_bill)==0) 
	{
		$query="select count(contact) as 'cart' from bill where status='pending' and mode='buy'";
		$result=mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		$_SESSION['cart']=0;
		$_SESSION['cart']=$row['cart'];
	}

	if (mysql_num_rows($bill)==0) {
		$query="select count(contact) as 'cart' from bill where status='pending' and mode='sell'";
		$result=mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_assoc($result);
		$_SESSION['cart']=0;
		$_SESSION['cart']=$row['cart'];
	}


?>
		<ul class="header">
			<li><a href="login_signup.php">
				<?php
				if (isset($_SESSION['u_contact'])) {
					echo "My Account";
				}
				else{
					echo "Login/Sign up";
				}
				?>

			</a></li>


			<li class="dropdown"><a class="dropbtn" href="cart.php"><img src="cart.jpg" height="16" width="16" style="border-radius:10px ">
			Your cart <input style="color: white;" type="text" id="cart_count" name="cart_count" value='<?php if(isset($_SESSION['u_contact'])){ echo htmlentities($_SESSION['cart']);}?>'>
		</div></a><div class="dropdown-content" style="color: white; text-align: center;">Total = Rs.<input type="text" id="cart_total" value='<?php if(isset($_SESSION['u_contact'])){ echo htmlentities($_SESSION['price']);}?>' readonly="true" style="width: 45px"></div></div></li>  
			<li><a href="mailto:support@gamerforever.com">support@gamerforever.com</a></li>
		</ul>
		<div>
			<fieldset class="logo"></fieldset>
		</div>
		<div class="nav">
		<ul class="menu" style="background-color: red">
			<li><a href="index.php">Home</a></li>
			<li class="dropdown" >
				<a class="dropbtn" href="">Buy Games</a>
			<div class="dropdown-content">
				<a href="buy_ps4.php">PS4</a>
				<a href="buy_x1.php">XBOX ONE</a>
			</div>
			</li>
			<li class="dropdown" >
				<a class="dropbtn" href="">Sell Games</a>
			<div class="dropdown-content">
				<a href="sell_ps4.php">PS4</a>
				<a href="sell_x1.php">XBOX ONE</a>
			</div>
			</li>
			<li class="dropdown" >
				<a class="dropbtn" href="">Consoles</a>
			<div class="dropdown-content">
				<a href="buy_con.php">Buy Consoles</a>
				<a href="con_sell.php">Sell Consoles</a>
			</div>
			</li>
			<li class="dropdown" >
				<a class="dropbtn" href="">Accessories</a>
			<div class="dropdown-content">
				<a href="buy_acc.php">Buy Accessories</a>
				<a href="sell_acc.php">Sell Accessories</a>
			</div>
			</li>
			<li>
				<a href="survey.php">Survey</a>
			</li>
			<li>
				<a href="admin.php">Admin Login</a>
			</li>

		</ul>
	</div>
	</div>
