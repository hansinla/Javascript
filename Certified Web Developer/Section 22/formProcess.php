<?php

	$name = $_POST[dogName];
	$age = $_POST[dogAge];
	$dogYears = $age * 7;

	echo("Your dog " . $name . " is " . $age . " years old.<br>");
	echo("That's " . $dogYears . " years in dog years.");

?>