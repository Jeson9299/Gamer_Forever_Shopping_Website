<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Products table</title>
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

				$data=mysql_query("Select * from products") or die(mysql_error());
				echo "<div class=survey_table>";
				print"<table> ";
				print"<tr><th colspan=7 bgcolor=darkcyan>Products</th></tr>";
				print"<tr>";
				print"<th bgcolor=black>Name</th>";
				print"<th bgcolor=black>Quantity</th>";
				print"<th bgcolor=black>Buy Price</th>";
				print"<th bgcolor=black>Sell Price</th>";
				
				while($info=mysql_fetch_array($data))
				{
				print"<tr bgcolor=yellow>";
				print"<td>".$info['name']."</td>";
				print"<td>".$info['quantity']."</td>";
				print"<td>".$info['price']."</td>";
				print"<td>".$info['sell_price']."</td>";
				print "</tr>";
				}
				print "<tr>";
				print"</table>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				mysql_close();

				echo '<a href="admin.php">back</a>';


	}
	else{
	echo 'admin not logged in';
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