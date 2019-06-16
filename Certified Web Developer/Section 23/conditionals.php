<!DOCTYPE html>
<html>
<head>
	<title>Conditionals</title>

	<style type="text/css">
	body{
		font-family: Helvetica;
	}

	</style>
</head>
<body>

	<?php

		$age = 19;
		$citizen =  false;

		if ($age >= 18 && $citizen){
			echo("<strong>You're eligible to vote!</strong>");
		} else {
			echo("<em>You're NOT eligible to vote!</em>");
		}



	?>

</body>
</html>