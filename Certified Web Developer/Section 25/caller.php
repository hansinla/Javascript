<!DOCTYPE html>
<html>
<head>
	<title>Caller</title>

	<?php require_once("functions.php"); ?>
</head>
<body style="font-family: Helvetica;">

<?php

	greetings();

	repeatMyself();

	$age = 3;
	Print("<br>A dog of " . $age . " is " . dogAgeCalc($age) . " in dog years." );

?>

</body>
</html>