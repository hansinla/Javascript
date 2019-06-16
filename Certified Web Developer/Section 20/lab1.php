<!-- php chapter 1 lab
 -->


<!DOCTYPE html>
<html>
<head>
	<title>Chapter 1 Lab</title>
</head>
<body>


<?php

$cars = ["DAF", "Ford", "Opel", "Saab", "Jeep", "Mercury", "BMW", "Audi"];

foreach ($cars as &$value) {
	print($value);
	print("<br>");
}

print("<br>");

$numbers = [12.99, 5.85, 100.25, 765.25, 78.15];

foreach ($numbers as &$value) {
	printf("%06.2f\n", $value);
	print("<br>");
}


?>

</body>
</html>