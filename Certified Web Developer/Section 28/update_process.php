<?php

	require_once("db_connect.php");

	$id = $_POST["id"];
	$lastName = $_POST["last"];
	$firstName = $_POST["first"];
	$department = $_POST["department"];
	$position = $_POST["position"]; 
	$salary = $_POST["salary"];

	$sql = "UPDATE employee SET " .
					"lastName = '" .   $lastName   . "', " .
					"firstName = '" .  $firstName  . "', " .
					"department = '" . $department . "', " .
					"position = '" .   $position   . "', " .
					"salary = '" .     $salary      . "' WHERE empId = '" . $id . "';";

					echo($sql);

	mysql_query($sql) or die (mysql_error());
	mysql_close($conn);

	echo("<br>" . $lastName . " updated successfully.");
	echo("<br>Go back to <a href='index.php'>main page.</a>");

?>