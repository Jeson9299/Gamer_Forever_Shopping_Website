<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>BUY PS4 GAMES</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
<form action="buy_ps4.php" method="POST">


<?php
include_once 'header.php';
?>

<div class="prod_container">

	<h1 align="center">Buy Games</h1>
	<div class="product"><img src="ps4_1.png">
	<h2>Marvel's Spider Man PS4</h2>
	<h3>RS.3,999</h3>
	<table align="right"><tr><td><button name="spiderman" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_2.png">
	<h2>GOD OF WAR PS4 <br>PS4</h2>
	<h3>RS.3,399</h3>
	<table align="right"><tr><td><button id="ps4_2" value="3399" name="gow" onclick="buy_ps4.php">ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_3.png">
	<h2>Shadow of the Tomb Raider PS4</h2>
	<h3>RS.3,999</h3>
	<table align="right"><tr><td><button name="tomb_raider" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_4.png">
	<h2>Call Of Duty Black Ops 4 PS4</h2>
	<h3>RS.4,699</h3>
	<table align="right"><tr><td><button name="cod" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_5.png">
	<h2>Fifa 19 PS4</h2>
	<h3>RS.3,799</h3>
	<table align="right"><tr><td><button name="fifa" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_6.png">
	<h2>WWE 2K19 PS4</h2>
	<h3>RS.3,499</h3>
	<table align="right"><tr><td><button name="wwe" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_7.png">
	<h2>Far Cry 5 PS4</h2>
	<h3>RS.2,000</h3>
	<table align="right"><tr><td><button name="far_cry" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="ps4_8.png">
	<h2>GTA V</h2>
	<h3>RS.2,000</h3>
	<table align="right"><tr><td><button name="gta" onclick="buy_ps4.php" >ADD TO CART</button></td></tr></table></div>


</div>
</form>

<?php

mysql_connect("localhost","root","") or die(mysql_error());
$db_name="gamer_forever";
mysql_select_db($db_name) or die(mysql_error());

$data_buy=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='buy'") or die(mysql_error());
$data_sell=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='sell'") or die(mysql_error());


$bill=mysql_query("select * from bill where contact='$ucon' ") or die(mysql_error());				
//$sell_bill=mysql_query("select * from sell_bill where contact='$ucon' ") or die(mysql_error());
//if (mysql_num_rows($bill)==0 && $sell_bill==0) {


if (isset($_POST["spiderman"])) {

	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';

	}
	else{

	$ucon=$_SESSION["u_contact"];
		$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Spiderman PS4',null,'3999','Pending','Buy')";
		mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
echo 'alert("Added to cart");';
echo '</script>';
header( "refresh:0;url=buy_ps4.php" );

}
}


if (isset($_POST["gow"])) {
		if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','God of war PS4',null,'3399','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["tomb_raider"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Shadow of the Tomb Raider PS4',null,'3999','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["cod"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Call Of Duty Black Ops 4 PS4',null,'4699','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["fifa"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Fifa 19 PS4',null,'3799','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["wwe"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','WWE 2K19 PS4',null,'3799','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["far_cry"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Far Cry 5 PS4',null,'2000','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}

if (isset($_POST["gta"])) {
	if (mysql_num_rows($data_sell)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','GTA V PS4',null,'2000','Pending','Buy')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=buy_ps4.php" );
}
}


?>






<script src="project.js"></script>

<?php
include_once 'footer.php';
?>