<?php

	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$phoneNumber = $_POST["phone"];

	$filename = "rolodex.txt";
	$fp = fopen($filename, 'a') or die ("Can't open file"); //append
	fwrite($fp, $lastName . "," . $firstName . "," . $phoneNumber . "\n");
	fclose($fp);

	header( 'Location: readrolo.php' ) ;

?>