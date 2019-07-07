<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
	
	<?php  

	if (isset($_SESSION['ad_name'])) {
		echo "<h3 align=right>";
		echo "Welcome ".$_SESSION['ad_name'];
		echo "<br>";
		echo'<form action="logout.php" method="POST"><button  name="logout">Logout</button> </form>';
		echo "</h3>";
		echo "<div class=survey_container>";
		echo "<div class=survey>";
				
				mysql_connect("localhost","root","") or die(mysql_error());
				$db_name="gamer_forever";
				mysql_select_db($db_name) or die(mysql_error());

				$data=mysql_query("Select * from survey") or die(mysql_error());
				echo "<div class=survey_table>";
				print"<table> ";
				print"<tr><th colspan=7 bgcolor=darkcyan>User Surveys</th></tr>";
				print"<tr>";
				print"<th bgcolor=black>Name</th>";
				print"<th bgcolor=black>Email</th>";
				print"<th bgcolor=black>Contact</th>";
				print"<th bgcolor=black>Q1</th>";
				print"<th bgcolor=black>Q2</th>";
				print"<th bgcolor=black>Q3</th>";
				print"<th bgcolor=black>Q4</th>";
				
				while($info=mysql_fetch_array($data))
				{
				print"<tr bgcolor=yellow>";
				print"<td>".$info['name']."</td>";
				print"<td>".$info['email']."</td>";
				print"<td>".$info['phone']."</td>";
				print"<td>".$info['Q1']."</td>";
				print"<td>".$info['Q2']."</td>";
				print"<td>".$info['Q3']."</td>";
				print"<td>".$info['Q4']."</td>";
				print "</tr>";
				}
				print "<tr>";
				print"</table>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				mysql_close();

				echo '<a href="admin_products.php">products table</a>';
	}
	else{
		echo '<div class="admin">
	<div class="admin_form">
			<form action="admin_login.php" method="POST">
				<table cellpadding="10">
					<tr>
						<td>Admin Username:</td><td><input type="text" name="admin_name" placeholder="Admin Username"></td>
					</tr>
					<tr>	
						<td>Password:</td><td><input type="Password" name="admin_pwd" placeholder="Password"></td>
					</tr>
					<tr><td colspan="2" align="center" name="admin_login"><br><button name="admin_login">Login</button></td></tr>
				</table>
			</form>
		</div>
	</div>
';
	}
?>

<style >
	.admin_form{
  padding-top: 100px;
  padding-left: 10px;
  width: 350px;
  height: 300px;
  background-color: white;
  box-shadow: 0px 8px 16px 0px rgba(1,1,1,1);
  border-radius: 20px;
}

.admin{
	padding-left: 500px;
	padding-top: 150px;
}

.admin_form input{
	height: 30px;
	border-radius: 20px;
}

.admin_form button{
    color: white;
    background-color: red;
    border-color: black;
    padding: 10px;
    width: 100px;
    border-radius:15px;

}


.survey_container{
	padding:20px; 
	padding-bottom: 100px;
}
	.survey{
  padding: 10px;
  background-color:white;
  box-shadow: 0px 8px 16px 0px rgba(1,1,1,1);
  border-radius: 20px;
}

.survey_table table{
	height: 250px;
	width: 100%;
	padding: 0px;
	border-spacing: 0px;
	font-family: timesnewroman;
	border-radius: 20px;
}

.survey_table table th{
	color: white;
}

.survey_table table td{
	text-align: center;
	color: darkcyan;
}

.survey_table tr:nth-child(even) {background-color: lightgrey;}
.survey_table tr:nth-child(odd) {background-color: darkgrey;}

.survey_table button{
    color: white;
    background-color: red;
    border-color: black;
    padding: 10px;
}


</style>
</body>
</html>