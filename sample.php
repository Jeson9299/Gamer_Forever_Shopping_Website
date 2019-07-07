<?php
session_start();
/*$counter=1;

if (isset($_POST['cart_count']))
{
	$counter=$_POST['cart_count'];
	$counter++;
	$_SESSION['cart']=$counter;
	
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="sample.php">
<div><input type="text" name="cart_count" value='<?php echo htmlentities($_SESSION['cart']) ?>'></div>
<button >click</button>
</form>
<a href="login_signup.php">link</a>

</body>
</html>
<!--
<?php
$cart=$_POST["cart_count"];
$_SESSION["cart_count"]=$cart; 
if(isset($_SESSION["cart_count"]))
{
	echo cart();
}
function cart(){
	$counter=$_SESSION["cart_count"];
	$counter++;
	$_SESSION["cart_count"]=$counter;
	return $counter;
}
?>*/-->