<?php

	require_once("db_connect.php");

	$lastName = $_POST["last"];
	$firstName = $_POST["first"];
	$department = $_POST["department"];
	$position = $_POST["position"]; 
	$salary = $_POST["salary"];

	$sql = "INSERT INTO employee VALUES (''," .
										 "'" . $lastName   . "'," . 
										 "'" . $firstName  . "'," .
										 "'" . $department . "'," .
										 "'" . $position   . "'," .
										 "'" . $salary      . "')";
	mysql_query($sql);
	mysql_close($conn);

	echo("<br>" . $lastName . " added successfully.");
	echo("<br>Go back to <a href='index.php'>main page.</a>");

?>