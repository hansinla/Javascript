<?php
	$username = $_COOKIE['username'];
	echo("Retrieving username cookie: " . $username);
	echo("<br>");
	echo(date("l F, Y"));
	echo("<br>");
	$message = "You have reached the end of PHP for Beginners.";
	echo("<br>");
	echo(strlen($message));
	echo("<br>");
	echo($message);
	echo("<br>");
	$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$message = str_replace($vowels, "X", $message);
	echo($message);
	$arr1 = str_split($message);
	$b = array_map("output", $arr1);

	function output($str)
	{
		echo("<br>" . $str);
	}
?>