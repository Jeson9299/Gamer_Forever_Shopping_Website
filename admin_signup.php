<?php 
session_start();


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Submitted</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">


<?php 
if (isset($_POST['admin_sign'])) {

$name=$_POST["admin_name"]; 
$pwd=$_POST["admin_pwd"];
mysql_connect("localhost","root","") or die(mysql_error());
$db_name="gamer_forever";
$select=mysql_select_db($db_name);
if (isset($select)) {
$hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
$query="insert into admin values('$name','$hashedpwd')";
mysql_query($query) or die(mysql_error());
echo "Successfully registered";
}
}
mysql_close();
//CREATE TABLE customer(customer_id int(6) NOT null AUTO_INCREMENT, f_name varchar(25), l_name varchar(25), email varchar(50), contact int(10), zip int(6), state varchar(50), PASSWORD varchar(50), PRIMARY key (customer_id))
?>
