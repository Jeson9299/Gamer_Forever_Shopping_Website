<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">


<?php
include_once 'header.php';
?>


<?php 
$email=$_POST["uname"];
$password=$_POST["password"];
mysql_connect("localhost","root","") or die(mysql_error());
echo "THANK YOU!";
$db_name="gamer_forever";
mysql_select_db($db_name) or die(mysql_error());
echo "";
$query="select * from customer where email='$email'";
$result=mysql_query($query);
$check=mysql_num_rows($result);
if(empty($email)||empty($password)){
	echo '<script language="javascript">';
echo 'alert("Please fill the required fields");';
echo '</script>';

}
if ($check==0)
{
	echo '<script language="javascript">';
echo 'alert("User not registered");
		window.location.href="login_signup.php?User_not_registered"';
echo '</script>';
//header("Location: ../login_signup.php?login_signup=User_not_registered");
	exit();
}
else{
	if ($row=mysql_fetch_assoc($result)) {
		//dehashing password
		$hashedPwdCheck = password_verify($password,$row['password']);
		if($hashedPwdCheck == false){
			header("Location: ../login_signup.php?login_signup=error");
			exit();
		}
		elseif ($hashedPwdCheck==true) {
			//login the user
			$_SESSION['u_fname']=$row['fname'];
			$_SESSION['u_lname']=$row['lname'];
			$_SESSION['u_email']=$row['email'];
			$_SESSION['u_contact']=$row['contact'];
			$_SESSION['u_zip']=$row['zipcode'];
			$_SESSION['u_state']=$row['state'];
			$_SESSION['credits']=$row['credits'];
			header("Location: ../index.php?login=success");
		}
	}
}
mysql_close();
?>

<?php
include_once 'footer.php';
?>
