<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
</head>
<body>

<?php

	$gpas = array(
		'Fred' => 3.62,
		'Mary' => 2.75,
		'Jen' => 4.00,
		'Jason' => 2.1,
		'Mark' => 2.87
		 );

	$totalGPA = 0;

	foreach ($gpas as $key => $value) {
		# code...
		echo("Name: " . $key . " GPA " . $value . "<br>");
		$totalGPA += $value;
	}

	echo("<br>Average GPA: " . ($totalGPA/sizeof($gpas)) . "<br>");




?>

</body>
</html>