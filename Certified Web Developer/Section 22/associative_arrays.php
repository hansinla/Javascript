<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

<?php

$gpas = array(
			"Hans" => 3.25,
			"Daniela" => 4.0, 
			"Julian" => 4.5
			);


foreach ($gpas as $key => $value) {
	echo($key . " has an gpa of " . $gpas[$key]);
	echo("<br>");

}

?>

</body>
</html>