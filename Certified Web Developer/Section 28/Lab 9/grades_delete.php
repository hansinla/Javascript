<?php
	require_once("db_connect.php");

	$lastName = $_REQUEST['id'];
	$sql = "DELETE FROM students WHERE lastName = '" . $lastName . "';";
	$result = mysql_query($sql) or die (mysql_error());
	
	echo("<br>Student ". $lastName . " deleted from database.");
	echo("<br>Return to <a href='grade_list.php'>main page.</a>");

?>