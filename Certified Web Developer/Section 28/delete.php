<?php
	require_once('db_connect.php');

	$id = $_REQUEST['id'];
	$sql = "DELETE FROM employee WHERE empId = '" . $id . "';";

	mysql_query($sql) or die(mysql_error());
	echo("<br>User ". $id . " deleted from database.");
	echo("<br>Return to <a href='index.php'>main page.</a>");
?>