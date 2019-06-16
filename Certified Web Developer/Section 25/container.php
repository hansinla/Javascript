<!DOCTYPE html>
<html>
<head>
	<title>Display included data</title>
</head>
<body>

<?php

	print("Printed from container.php");
	print("<br>");
	include("includeMe.php"); // will run code as many times as we write this
	include_once("includeMe.php");
	require("includeMe.php");



?>

</body>
</html>