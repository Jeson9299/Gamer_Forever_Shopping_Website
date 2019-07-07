<?php

session_start();



?>


<!DOCTYPE html>
<html>
<head>
	<title>SELL ACCESSORIES</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
<form action="sell_acc.php" method="POST">


<?php
include_once 'header.php';
?>

<div class="prod_container">

	<h1 align="center">Sell Accessories</h1>
	<div class="product"><img src="acc_1.png">
	<h2>PS4 Controller</h2>
	<h3>RS.1,200</h3>
	<table align="right"><tr><td><button name="pscon" onclick="buy_acc.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="acc_2.png">
	<h2>XBOX ONE Controller</h2>
	<h3>RS.1,000</h3>
	<table align="right"><tr><td><button id="acc_2" value="3399" name="xcon" onclick="buy_acc.php">ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="acc_3.png">
	<h2>XBOX ONE Kinect</h2>
	<h3>RS.1,699</h3>
	<table align="right"><tr><td><button name="kin" onclick="buy_acc.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="acc_4.png">
	<h2>Playstation VR</h2>
	<h3>RS.10,000</h3>
	<table align="right"><tr><td><button name="vr" onclick="buy_acc.php" >ADD TO CART</button></td></tr></table></div>

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


if (isset($_POST["pscon"])) {

	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';

	}
	else{

	$ucon=$_SESSION["u_contact"];
		$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','PS4 Controller',null,'1200','Pending','Sell')";
		mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
echo 'alert("Added to cart");';
echo '</script>';
header( "refresh:0;url=sell_acc.php" );

}
}


if (isset($_POST["xcon"])) {
		if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','XBOX ONE Controller',null,'1000','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_acc.php" );
}
}

if (isset($_POST["kin"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','XBOX ONE Kinect',null,'1699','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_acc.php" );
}
}

if (isset($_POST["vr"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','Play tation VR',null,'10000','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_acc.php" );
}
}



?>






<script src="project.js"></script>

<?php
include_once 'footer.php';
?>