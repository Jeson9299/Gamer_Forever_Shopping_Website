<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">

<?php
include_once 'header.php';
?>

<img style="margin-left: 250px ; margin-top: 30px; height:400px; width:800px;" id="i1" src=""><br><br><br><br><br>

<script src="project.js"></script>
<script >
	var e=document.getElementById("i1");
var colors=["ss1.jpeg","ss2.jpeg","ss3.jpg","ss4.jpg"];
var nextColor=0;
setInterval("e.src=colors[nextColor++%colors.length];",1000);


</script>
<?php
include_once 'footer.php';
?>