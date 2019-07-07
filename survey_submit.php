<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$q1=$_POST['message1'];
$q2=$_POST['message2'];
$q3=$_POST['message3'];
$q4=$_POST['message4'];
mysql_connect("localhost","root","") or die(mysql_error());
$db_name="gamer_forever";
mysql_select_db($db_name) or die(mysql_error());
if(empty($name)||empty($email)||empty($contact)||empty($q1)||empty($q2)||empty($q3)||empty($q4)){
		echo '<script language="javascript">';
		echo 'alert("Please Complete the survey");
				window.location.href="survey.php?please_complete_the_survey"';
		echo '</script>';
		//header("Location: ../survey.php?please_complete_the_survey");
}
else{

	$query = "INSERT INTO SURVEY VALUES('$name','$email','$contact','$q1','$q2','$q3','$q4')";
	mysql_query($query) or die(mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Thank You!!");
			window.location.href="index.php?survey_complete"';
	echo '</script>';

}
mysql_close();
//CREATE TABLE SURVEY(NAME VARCHAR(30), EMAIL VARCHAR(30), CONTACT VARCHAR(10), Q1 VARCHAR(500), Q2 VARCHAR(500), Q3 VARCHAR(500), Q4 VARCHAR(500))