<?php 
session_start();


 ?>
 <!DOCTYPE html>
<html>
<?php
if (isset($_POST['admin_login'])) {

$ad_uname=$_POST["admin_name"];
$ad_pwd=$_POST["admin_pwd"];

mysql_connect("localhost","root","") or die(mysql_error());
$db_name="gamer_forever";
mysql_select_db($db_name) or die(mysql_error());

$query="select * from admin where name='$ad_uname'";
$result=mysql_query($query);
$check=mysql_num_rows($result);
if ($check==0)
{
	echo '<script language="javascript">';
echo 'alert("User not registered");
		window.location.href="admin.php?Invalid_admin"';
echo '</script>';
//header("Location: ../login_signup.php?login_signup=User_not_registered");
	exit();
}
else{
	if ($row=mysql_fetch_assoc($result)) {
		//dehashing password
		$hashedPwdCheck = password_verify($ad_pwd,$row['password']);
		if($hashedPwdCheck == false){
			header("Location: ../admin.php?error");
			exit();
		}
		elseif ($hashedPwdCheck==true) {
			//login the admin
			$_SESSION['ad_name']=$row['name'];
			//unset($_SESSION['u_contact']);
			header("Location: ../admin.php?login=success");
		}
	}
}
//CREATE TABLE ADMIN (NAME VARCHAR(10), PASSWORD VARCHAR(10))
mysql_close();
}
?>
</html>