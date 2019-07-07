<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>SELL CONSOLES</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
<form action="con_sell.php" method="POST">


<?php
include_once 'header.php';
?>

<div class="prod_container">

	<h1 align="center">Sell Consoles</h1>
	<div class="product"><img src="con_1.png">
	<h2>PS4 PRO CONSOLE</h2>
	<h3>RS.27,999</h3>
	<table align="right"><tr><td><button name="pro" onclick="buy_con.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="con_2.png">
	<h2>PS4 SLIM CONSOLE</h2>
	<h3>RS.18,999</h3>
	<table align="right"><tr><td><button id="con_2" value="3399" name="slim" onclick="buy_con.php">ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="con_3.png">
	<h2>XBOX ONE X CONSOLE</h2>
	<h3>RS.10,599</h3>
	<table align="right"><tr><td><button name="xx" onclick="buy_con.php" >ADD TO CART</button></td></tr></table></div>

	<div class="product"><img src="con_4.png">
	<h2>XBOX ONE S CONSOLE</h2>
	<h3>RS.9,500</h3>
	<table align="right"><tr><td><button name="xs" onclick="buy_con.php" >ADD TO CART</button></td></tr></table></div>

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


if (isset($_POST["pro"])) {

	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';

	}
	else{

	$ucon=$_SESSION["u_contact"];
		$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','PS4 PRO CONSOLE',null,'27999','Pending','Sell')";
		mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
echo 'alert("Added to cart");';
echo '</script>';
header( "refresh:0;url=sell_con.php" );

}
}


if (isset($_POST["slim"])) {
		if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','PS4 SLIM CONSOLE',null,'18999','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_con.php" );
}
}

if (isset($_POST["xx"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','XBOX ONE X',null,'10599','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_con.php" );
}
}

if (isset($_POST["xs"])) {
	if (mysql_num_rows($data_buy)>0) {
					echo '<script language="javascript">';
					echo 'alert("You cannot buy and sell at the same time");';
					echo '</script>';
	}
	else{
	$ucon=$_SESSION["u_contact"];
	$query="insert into bill (contact,name,time,price,status,mode) values ('$ucon','XBOX ONE S CONSOLE',null,'9500','Pending','Sell')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Added to cart");';
	echo '</script>';
header( "refresh:0;url=sell_con.php" );
}
}



?>






<script src="project.js"></script>

<?php
include_once 'footer.php';
?>