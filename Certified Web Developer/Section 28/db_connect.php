<?php


	$db_name = "employees";
	$username = "root";
	$password = "root";
	$host = "localhost";

	$conn = mysql_connect($host, $username, $password) or die (mysql_error());
	//echo("Connected to SQL database<br>");

	mysql_select_db($db_name) or die(mysql_error());
	//echo("Connected to " . $db_name . " database<br>");



?>