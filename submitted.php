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
include_once 'header.php';
?>


<?php 
$fname=$_POST["fname"]; 
$lname=$_POST["lname"];
$email=$_POST["email"];
$contact=$_POST["contact_no"];
$address=$_POST["address"];
$zip=$_POST["zip"];
$state=$_POST["state"]; 
$password=$_POST["password1"];
mysql_connect("localhost","root","") or die(mysql_error());
echo "THANK YOU!";
$db_name="gamer_forever";
$select=mysql_select_db($db_name);
echo "";
if (isset($select)) {
$hashedpwd=password_hash($password, PASSWORD_DEFAULT);
$query="insert into customer values('$fname','$lname','$email','$contact','$address','$zip','$state','$hashedpwd','0')";
mysql_query($query) or die(mysql_error());
echo "Successfully registered";
}
mysql_close();
//CREATE TABLE customer(customer_id int(6) NOT null AUTO_INCREMENT, f_name varchar(25), l_name varchar(25), email varchar(50), contact int(10), zip int(6), state varchar(50), PASSWORD varchar(50), PRIMARY key (customer_id))
?>

<?php
include_once 'footer.php';
?>
