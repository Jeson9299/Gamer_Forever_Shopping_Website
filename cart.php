<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">

<?php
include_once 'header.php';
?>




	
			<form action="cart.php" method="POST">

				<?php
				mysql_connect("localhost","root","") or die(mysql_error());
				$db_name="gamer_forever";
				mysql_select_db($db_name) or die(mysql_error());
				$ucon=$_SESSION["u_contact"];

				mysql_select_db($db_name)or die(mysql_error());
				//display bill query
				$data_buy=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='buy'") or die(mysql_error());
				$data_sell=mysql_query("Select * from bill where contact='$ucon' and status='pending' and mode='sell'") or die(mysql_error());


				$bill=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='buy'") or die(mysql_error());				
				//$sell_bill=mysql_query("select * from sell_bill where contact='$ucon' ") or die(mysql_error());
				if (mysql_num_rows($data_buy)==0 &&mysql_num_rows($data_sell)==0) {
					echo "<h1 align=center>Your cart is empty!</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
				}
				if (mysql_num_rows($bill)>0) {
//diaplay bill
				echo "<div class=cart_container>
				<div class=bill>
				<div class=bill_table>";
				print"<table> ";
				print"<tr>";
				print"<th>Name</th>";
				print"<th>Product Price</th>";
				while($info=mysql_fetch_array($data_buy))
				{
				print"<tr bgcolor=yellow>";
				print"<td>".$info['name']."</td>";
				print"<td>".$info['price']."</td>";
				print "</tr>";
				}
				print "<tr>";
				print "<th colspan=2 align=center>"."Total = ".$_SESSION['price']."</th></tr>";
				print "<tr><th colspan=2 ><button name='buy_items'> BUY </button></th></tr>";
				print"</table>";
//onclick buy
				if (isset($_POST['buy_items'])) {
					$data=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='buy'");
					while($info=mysql_fetch_array($data)){	
					$i=$info['name'];
					$buy4=mysql_query("UPDATE products set quantity=quantity-1 where name='$i'");
					$buy1=mysql_query("update bill set status='order placed' where contact='$ucon' and mode='buy'") or die(mysql_error());

					}

					
					echo '<script language="javascript">';
					echo 'alert("Order Placed");';
					echo '</script>';
					header("refresh:0;url:index.php");
			

				}

				echo '<li class="dropdown" >
				<a class="dropbtn" href="">Edit Bill</a>
				<div class="dropdown-content">	';
			

				$edit=mysql_query("select * from bill where name='spiderman PS4' and contact='$ucon' and status='pending' ") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_spiderman"> Delete Spiderman </button></center>';
					if(isset($_POST['del_spiderman']))
					{
						$delete=mysql_query("delete from bill where name='Spiderman PS4' and contact='$ucon' and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );

					}
				}


				$edit=mysql_query("select * from bill where name='God Of War PS4' and contact='$ucon' and status='pending' ") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_gow"> Delete God Of War </button></center>';
					if(isset($_POST['del_gow']))
					{
						$delete=mysql_query("delete from bill where name='God Of War PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Shadow of the Tomb Raider PS4' and contact='$ucon'and status='pending' ") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_tomb"> Delete Shadow of the Tomb Raider PS4 </button></center>';
					if(isset($_POST['del_tomb']))
					{
						$delete=mysql_query("delete from bill where name='Shadow of the Tomb Raider PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Call Of Duty Black Ops 4 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_cod"> Delete Call Of Duty Black Ops 4 PS4 </button></center>';
					if(isset($_POST['del_cod']))
					{
						$delete=mysql_query("delete from bill where name='Call Of Duty Black Ops 4 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Fifa 19 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fifa">Delete Fifa 19 PS4 </button></center>';
					if(isset($_POST['del_fifa']))
					{
						$delete=mysql_query("delete from bill where name='Fifa 19 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='WWE 2K19 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_wwe">Delete WWE 2K19 PS4 </button></center>';
					if(isset($_POST['del_wwe']))
					{
						$delete=mysql_query("delete from bill where name='WWE 2K19 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Far Cry 5 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_far">Delete Far Cry 5 PS4 </button></center>';
					if(isset($_POST['del_far']))
					{
						$delete=mysql_query("delete from bill where name='Far Cry 5 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='GTA V PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_gta">Delete GTA V PS4 </button></center>';
					if(isset($_POST['del_gta']))
					{
						$delete=mysql_query("delete from bill where name='GTA V PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Tomb Raider XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_tomb">Delete Tomb Raider XBOX ONE </button></center>';
					if(isset($_POST['del_tomb']))
					{
						$delete=mysql_query("delete from bill where name='Tomb Raider XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Fortnite XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fort">Delete Fortnite XBOX ONE </button></center>';
					if(isset($_POST['del_fort']))
					{
						$delete=mysql_query("delete from bill where name='Fortnite XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Just Cause 4 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_jc">Delete Just Cause 4 XBOX ONE </button></center>';
					if(isset($_POST['del_jc']))
					{
						$delete=mysql_query("delete from bill where name='Just Cause 4 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Far Cry 5 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_far">Delete Far Cry 5 XBOX ONE </button></center>';
					if(isset($_POST['del_far']))
					{
						$delete=mysql_query("delete from bill where name='Far Cry 5 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Call of Duty Black Ops 3 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_cod">Delete Call of Duty Black Ops 3 XBOX ONE </button></center>';
					if(isset($_POST['del_cod']))
					{
						$delete=mysql_query("delete from bill where name='Call of Duty Black Ops 3 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Fifa 19 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fifa">Delete Fifa 19 XBOX ONE </button></center>';
					if(isset($_POST['del_fifa']))
					{
						$delete=mysql_query("delete from bill where name='Fifa 19 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='NBA 2K18 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_nba">Delete NBA 2K18 XBOX ONE </button></center>';
					if(isset($_POST['del_nba']))
					{
						$delete=mysql_query("delete from bill where name='NBA 2K18 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='WWE 2K19 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fort">Delete WWE 2K19 XBOX ONE </button></center>';
					if(isset($_POST['del_fort']))
					{
						$delete=mysql_query("delete from bill where name= 'WWE 2K19 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='PS4 PRO CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_pro">Delete PS4 PRO CONSOLE </button></center>';
					if(isset($_POST['del_pro']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 PRO CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='PS4 SLIM CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_slim">Delete PS4 SLIM CONSOLE </button></center>';
					if(isset($_POST['del_slim']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 SLIM CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE X CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xx">Delete XBOX ONE X CONSOLE </button></center>';
					if(isset($_POST['del_xx']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE X CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}
				$edit=mysql_query("select * from bill where name='XBOX ONE S CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xs">Delete XBOX ONE S CONSOLE </button></center>';
					if(isset($_POST['del_xs']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE S CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='PS4 Controller' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_pscon">Delete PS4 Controller </button></center>';
					if(isset($_POST['del_pscon']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 Controller' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE Controller' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xcon">Delete XBOX ONE Controller </button></center>';
					if(isset($_POST['del_xcon']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE Controller' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE Kinetc' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_kin">Delete XBOX ONE Kinetc </button></center>';
					if(isset($_POST['del_kin']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE Kinetc' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Playstation VR' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_vr">Delete Playstation VR </button></center>';
					if(isset($_POST['del_vr']))
					{
						$delete=mysql_query("delete from bill where name= 'Playstation VR' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				echo '</div>';
				echo '</li>';
			

				echo "</div>";
			}


			//sell items




				$bill=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='sell'") or die(mysql_error());		


				if (mysql_num_rows($bill)>0) {

				echo "<div class=cart_container>
				<div class=bill>
				<div class=bill_table>";
				print"<table> ";
				print"<tr>";
				print"<th>Name</th>";
				print"<th>Product Price</th>";
				while($info=mysql_fetch_array($data_sell))
				{
				print"<tr bgcolor=yellow>";
				print"<td>".$info['name']."</td>";
				print"<td>".$info['price']."</td>";
				print "</tr>";
				}
				print "<tr>";
				print "<th colspan=2 align=center>"."Total = ".$_SESSION['price']."</th></tr>";
				print "<tr><th colspan=2 ><button name='sell_items'> SELL </button></th></tr>";
				print"</table>";

				if (isset($_POST['sell_items'])) {
					$x=$_SESSION['credits'];
					$y=$_SESSION['price'];
					$credit=$x+$y;

					$credits=mysql_query("update customer set credits=credits+'$credit' where contact='$ucon'");
					$cre_sess=mysql_query("select credits from customer where contact='$ucon'");
					$cre=mysql_fetch_array($cre_sess);
					$_SESSION['credits']=$cre['credits'];
					$data=mysql_query("select * from bill where contact='$ucon' and status='pending' and mode='sell'");
					while($info=mysql_fetch_array($data)){	
					$i=$info['name'];
					$buy4=mysql_query("UPDATE products set quantity=quantity+1 where name='$i'");
										$buy1=mysql_query("update bill set status='order placed' where contact='$ucon' and mode='sell'") or die(mysql_error());

					}

					//$buy3=mysql_query("DELETE FROM sell_bill where contact='$ucon'") or die(mysql_error());
					
					echo '<script language="javascript">';
					echo 'alert("Sell Order Placed. Credits Updated. ");';
					echo '</script>';
					header("refresh:0;url:index.php");
			

				}

				echo '<li class="dropdown" >
				<a class="dropbtn" href="">Edit Bill</a>
				<div class="dropdown-content">	';
			

				$edit=mysql_query("select * from bill where name='spiderman PS4' and contact='$ucon' and status='pending' ") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_spiderman"> Delete Spiderman </button></center>';
					if(isset($_POST['del_spiderman']))
					{
						$delete=mysql_query("delete from bill where name='Spiderman PS4' and contact='$ucon' and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );

					}
				}


				$edit=mysql_query("select * from bill where name='God Of War PS4' and contact='$ucon' and status='pending' ") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_gow"> Delete God Of War </button></center>';
					if(isset($_POST['del_gow']))
					{
						$delete=mysql_query("delete from bill where name='God Of War PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Shadow of the Tomb Raider PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_tomb"> Delete Shadow of the Tomb Raider PS4 </button></center>';
					if(isset($_POST['del_tomb']))
					{
						$delete=mysql_query("delete from bill where name='Shadow of the Tomb Raider PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Call Of Duty Black Ops 4 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_cod"> Call Of Duty Black Ops 4 PS4 </button></center>';
					if(isset($_POST['del_cod']))
					{
						$delete=mysql_query("delete from bill where name='Call Of Duty Black Ops 4 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

								$edit=mysql_query("select * from bill where name='Fifa 19 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fifa">Delete Fifa 19 PS4 </button></center>';
					if(isset($_POST['del_fifa']))
					{
						$delete=mysql_query("delete from bill where name='Fifa 19 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='WWE 2K19 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_wwe">Delete WWE 2K19 PS4 </button></center>';
					if(isset($_POST['del_wwe']))
					{
						$delete=mysql_query("delete from bill where name='WWE 2K19 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Far Cry 5 PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_far">Delete Far Cry 5 PS4 </button></center>';
					if(isset($_POST['del_far']))
					{
						$delete=mysql_query("delete from bill where name='Far Cry 5 PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='GTA V PS4' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_gta">Delete GTA V PS4 </button></center>';
					if(isset($_POST['del_gta']))
					{
						$delete=mysql_query("delete from bill where name='GTA V PS4' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Tomb Raider XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_tomb">Delete Tomb Raider XBOX ONE </button></center>';
					if(isset($_POST['del_tomb']))
					{
						$delete=mysql_query("delete from bill where name='Tomb Raider XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Fortnite XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fort">Delete Fortnite XBOX ONE </button></center>';
					if(isset($_POST['del_fort']))
					{
						$delete=mysql_query("delete from bill where name='Fortnite XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Just Cause 4 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_jc">Delete Just Cause 4 XBOX ONE </button></center>';
					if(isset($_POST['del_jc']))
					{
						$delete=mysql_query("delete from bill where name='Just Cause 4 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='Far Cry 5 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_far">Delete Far Cry 5 XBOX ONE </button></center>';
					if(isset($_POST['del_far']))
					{
						$delete=mysql_query("delete from bill where name='Far Cry 5 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Call of Duty Black Ops 3 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_cod">Delete Call of Duty Black Ops 3 XBOX ONE </button></center>';
					if(isset($_POST['del_cod']))
					{
						$delete=mysql_query("delete from bill where name='Call of Duty Black Ops 3 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Fifa 19 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fifa">Delete Fifa 19 XBOX ONE </button></center>';
					if(isset($_POST['del_fifa']))
					{
						$delete=mysql_query("delete from bill where name='Fifa 19 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='NBA 2K18 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_nba">Delete NBA 2K18 XBOX ONE </button></center>';
					if(isset($_POST['del_nba']))
					{
						$delete=mysql_query("delete from bill where name='NBA 2K18 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='WWE 2K19 XBOX ONE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_fort">Delete WWE 2K19 XBOX ONE </button></center>';
					if(isset($_POST['del_fort']))
					{
						$delete=mysql_query("delete from bill where name= 'WWE 2K19 XBOX ONE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

								$edit=mysql_query("select * from bill where name='PS4 PRO CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_pro">Delete PS4 PRO CONSOLE </button></center>';
					if(isset($_POST['del_pro']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 PRO CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='PS4 SLIM CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_slim">Delete PS4 SLIM CONSOLE </button></center>';
					if(isset($_POST['del_slim']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 SLIM CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE X CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xx">Delete XBOX ONE X CONSOLE </button></center>';
					if(isset($_POST['del_xx']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE X CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE S CONSOLE' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xs">Delete XBOX ONE S CONSOLE </button></center>';
					if(isset($_POST['del_xs']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE S CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='PS4 Controller' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_pscon">Delete PS4 Controller </button></center>';
					if(isset($_POST['del_pscon']))
					{
						$delete=mysql_query("delete from bill where name= 'PS4 Controller' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE Controller' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_xcon">Delete XBOX ONE Controller </button></center>';
					if(isset($_POST['del_xcon']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE S CONSOLE' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}

				$edit=mysql_query("select * from bill where name='XBOX ONE Kinect' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_kin">Delete XBOX ONE Kinect </button></center>';
					if(isset($_POST['del_kin']))
					{
						$delete=mysql_query("delete from bill where name= 'XBOX ONE Kinect' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				$edit=mysql_query("select * from bill where name='Playstation VR' and contact='$ucon' and status='pending'") or die(mysql_error());				
				if (mysql_num_rows($edit)>0) {
					echo '<center><button name="del_vr">Delete Playstation VR </button></center>';
					if(isset($_POST['del_vr']))
					{
						$delete=mysql_query("delete from bill where name= 'Playstation VR' and contact='$ucon'and status='pending'") or die(mysql_error());
						header( "refresh:0;url=cart.php" );
					}
				}


				echo '</div>';
				echo '</li>';
			
			}
				echo "</div>";


				mysql_close();


				?>


			</form>
		</div>
	</div>


<style >

.cart_container{
	padding-left: 380px;
	padding-top: 20px;
	padding-bottom: 100px;
}
	.bill{
  padding: 10px;
  width: 550px;
  background-color: dodgerblue;
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

<?php
include_once 'footer.php';
?>
