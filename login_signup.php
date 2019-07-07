<?php 
session_start();
 ?>

<html>
<head>
	<title>Login/SignUp</title>
</head>

<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">

<?php
require_once 'header.php';
?>
<?php
if (isset($_SESSION['u_contact'])) {
						echo '<img src="welcome.jpg" width="500" height="300" align="center" style="padding-left: 400px">';
						echo "<br>";
						echo "<h1><center>"; echo $_SESSION['u_fname']; echo $_SESSION['u_lname'];echo'<br>Credits = '.$_SESSION['credits'];
						echo "</center></h1>";

						mysql_connect("localhost","root","") or die(mysql_error());
						$db_name="gamer_forever";
						mysql_select_db($db_name) or die(mysql_error());
						$ucon=$_SESSION['u_contact'];


						$query=mysql_query("Select name,price,status,mode from bill where contact='$ucon' and status='order placed'") or die(mysql_error());

						$bill=mysql_query("select * from bill where contact='$ucon' and status='order placed' ") or die(mysql_error());				
						if (mysql_num_rows($bill)>0) {
						echo '<div class="cart_container">
						<div class="bill">';
						echo "<div class=bill_table>";
						print"<table> ";
						print"<tr>";
						print"<th>Name</th>";
						print"<th>Price</th>";
						print"<th>Status</th>";
						print"<th>Mode</th>";
						while($info=mysql_fetch_array($query))
						{
						print"<tr bgcolor=yellow>";
						print"<td>".$info['name']."</td>";
						print"<td>".$info['price']."</td>";
						print"<td>".$info['status']."</td>";
						print"<td>".$info['mode']."</td>";
						print "</tr>";
						}
						print "<tr>";
						print"</table>";
						echo "</div></div></div>";
					}
						echo '
						<form action="logout.php" method="POST">
						<button id="register_button" name="logout">LOGOUT</button>
						</form>
						';
					
		}
else
{
						echo "<br><br><br><br><br><br><br><br>";
						echo'		<div class="form_container">
						<table border="0" width="675" align="center" style="background-color: black">
						<tr><td align="center" style="border-right: 2px solid white">
						<button id="login_button" onclick="overlay_on2()">LOGIN</button></td> 
						<td align="center"><button id="signup_button" onclick="overlay_on1()">SIGN UP</button></td>
						</tr>
						<tr><td colspan="2" align="center" ><br><img src="gamer6.jpg" width="500" height="100"></td></tr>
						</table>
						</div>
						<div id="overlay1"><div class="signup_container">
						<table align="right"><tr><td><form action="login_signup.php" method="POST"><button onclick="login_signup.php">X</button></form></td></tr></table>
						<br>

						<table align="center" ><form method="POST" action="submitted.php">
						<tr>
						<td>First Name:<br><input type="text" id="fname" name="fname" placeholder="Enter first name"></td>
						<td>Last name:<br><input type="text" id="lname" name="lname" placeholder="Enter last name"></td><td id="dispfname"></td>
						</tr>
						<tr>
						<td colspan="2">Email:<br><input type="Email" id="email" name="email" placeholder="Enter valid email"></td>
						</tr>
						<tr>
						<td colspan="2">Contact Number:<br><input type="text" id="contact_no" name="contact_no" placeholder="Enter contact number"></td>
						</tr>
						<tr>
						<td colspan="2">Address:<br><textarea id="address" name="address" placeholder="Enter address" cols="4" rows="4"></textarea></td>
						</tr>
						<tr>
						<td colspan="2">Zip Code:<br><input type="text" id="zip" name="zip" placeholder="Enter valid zip code"></td>
						</tr>
						<tr>
						<td colspan="2">State:<br><select id="state" name="state">
						<option value="default">Select State</option>
						<option>Andhra Pradesh</option>
						<option>Arunachal Pradesh</option>
						<option>Assam</option>
						<option>Bihar</option>
						<option>Chhattisgarh</option>
						<option>Goa</option>
						<option>Gujarat</option>
						<option>Haryana</option>
						<option>Himachal Pradesh</option>
						<option>Jammu and Kashmir</option>
						<option>Jharkhand</option>
						<option>Karnataka</option>
						<option>Madhya Pradesh</option>
						<option>Maharashtra</option>
						<option>Manipur</option>
						<option>Meghalaya</option>
						<option>Mizoram</option>
						<option>Nagaland</option>
						<option>Odisha</option>
						<option>Punjab</option>
						<option>Rajasthan</option>
						<option>Sikkim</option>
						<option>Tamil Nadu</option>
						<option>Telangana</option>
						<option>Tripura</option>
						<option>Uttar Pradesh</option>
						<option>Uttarakhand</option>
						<option>West Bengal</option>
						</select></td>
						</tr>
						<tr>
						<td>Password:<br><input type="Password" id="password1" name="password1" placeholder="Enter password"></td>
						<td>Verify Password:<br><input type="password" id="password2" name="password2" placeholder="Enter password again"></td>
						</tr>
						<tr>
						<td><button type="submit" id="register_button" onclick="formvalidation()">REGISTER</button></td>
						</tr>
						</form>
						</table>
						</div></div>
						<div id="overlay2"><div class="signup_container">
						<table align="right"><tr><td><form action="login_signup.php" method="POST"><button onclick="overlay_off2()">X</button></form></td></tr></table><br>
						<br><br><br><br><br>
						<table align="center" width="80%" > <form method="POST" action="login.php"> 
						<tr>
						<td>Username:<br><input type="text" id="uname" name="uname"  placeholder="Enter username/email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid" required></td>
						</tr>
						<tr>
						<td>Password:<br><input type="password" id="password" name="password" placeholder="Enter password" required></td>
						</tr>
						<tr>
						<td><br><br><button id="register_button">LOGIN</button></td>
						</tr>
						</form>
						</table>
						</div></div>
						';
						echo "<br><br><br><br>";
}
?>

<!---
INSERT INTO customer2 (contact,name,time,price)
SELECT contact,name,time,price
FROM bill;

UPDATE customer2 SET status='Order Placed' where contact='7506130236'; 
-->		

<style>
.cart_container{
	padding-left: 40px;
	padding-top: 100px;
	padding-bottom: 100px;
}

		.bill{
  padding: 10px;
  width: 95%;
  background-color: white;
  box-shadow: 0px 8px 16px 0px rgba(1,1,1,1);
  border-radius: 20px;
}

.bill_table table{
	height: 250px;
	width: 100%;
	padding: 0;
	font-family: timesnewroman;
}

.bill_table table th{
	color: white;
	background-color: black;
}

.bill_table table td{
	text-align: center;
	color: black;
}

.bill_table tr:nth-child(even) {background-color: lightgrey;}
.bill_table tr:nth-child(odd) {background-color: darkgrey;}

.bill_table button{
    color: white;
    background-color: red;
    border-color: black;
    padding: 10px;
}

</style>
<script src="project.js"></script>

<?php
include_once 'footer.php';
?>

