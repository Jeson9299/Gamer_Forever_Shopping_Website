<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SELL XBOX ONE GAMES</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
<form action="sell_x1.php" method="POST">


<?php
include_once 'header.php';
?>

<div class="prod_container">
	<h1 align="center">Sell Games</h1>
	<div class="product"><img src="x1_1.png">
	<h2>Tomb Raider XBOX ONE</h2>
	<h3>RS.2,150</h3>
	<table align="right"><tr><td><button name="tomb" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_2.png">
	<h2>Fortnite XBOX ONE</h2>
	<h3>RS.1,600</h3>
	<table align="right"><tr><td><button id="x1_2" value="3399" name="fort" onclick="buy_x1.php">ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_3.png">
	<h2>Just Cause 4 XBOX ONE</h2>
	<h3>RS.2,600</h3>
	<table align="right"><tr><td><button name="jc4" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_4.png">
	<h2>Far Cry 5 XBOX ONE</h2>
	<h3>RS.1,899</h3>
	<table align="right"><tr><td><button name="far_cry" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_5.png">
	<h2>Call of Duty Black Ops 3 XBOX ONE</h2>
	<h3>RS.600</h3>
	<table align="right"><tr><td><button name="cod3" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_6.png">
	<h2>Fifa 19 <br> XBOX ONE</h2>
	<h3>RS.3,000</h3>
	<table align="right"><tr><td><button name="fifa" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_7.png">
	<h2>NBA 2K18 XBOX ONE</h2>
	<h3>RS.1,450</h3>
	<table align="right"><tr><td><button name="nba" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="x1_8.png">
	<h2>WWE 2K19 XBOX ONE</h2>
	<h3>RS.2,400</h3>
	<table align="right"><tr><td><button name="wwe" onclick="buy_x1.php" >ADD TO CART</button></td></tr></table></div>



</div>
</form>

<?php

mysql_connect("localhost","root","") or die(mysql_error());
$db_name="gamer_forever";
mysql_select_db($db_name) or die(mysql_error());

$data_buy=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='buy'") or die(mysql_error());
$data_sell=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='sell'") or die(mysql_error());

if (isset($_POST["tomb"])) {

	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';

	}
	else{

	$ucon=$_SESSION["u_contact"];
		$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Tomb Raider XBOX ONE',null,'2150','Pending','Sell')";
		mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
echo 'alert("Added to cart");';
echo '</script>';
header( "refresh:0;url=buy_x1.php" );

}
}


if (isset($_POST["fort"])) {
		if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Fortnite XBOX ONE',null,'1600','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_x1.php" );
}
}

if (isset($_POST["jc4"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Just Cause 4 XBOX ONE',null,'2600','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_x1.php" );
}
}

if (isset($_POST["far_cry"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Far Cry 5 XBOX ONE',null,'1899','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_x1.php" );
}
}

if (isset($_POST["cod3"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Call of Duty Black Ops 3 XBOX ONE',null,'600','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_x1.php" );
}
}

if (isset($_POST["fifa"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Fifa 19 XBOX ONE',null,'3000','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_x1.php" );
}
}

if (isset($_POST["nba"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','NBA 2K18 XBOX ONE',null,'1450','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_x1.php" );
}
}

if (isset($_POST["wwe"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','WWE 2K19 XBOX ONE',null,'2400','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_x1.php" );
}
}

?>








<script src="project.js"></script>

<?php
include_once 'footer.php';
?>
