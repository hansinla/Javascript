<?php

	require_once("db_connect.php");

	$lastName 		= $_POST["last"];
	$firstName 		= $_POST["first"];
	$test1Grade 	= $_POST["test1Grade"];
	$test2Grade 	= $_POST["test2Grade"]; 
	$test3Grade 	= $_POST["test3Grade"];
	$test4Grade 	= $_POST["test4Grade"]; 
	$finalExamGrade = $_POST["finalExamGrade"];

	echo($finalExamGrade);



	// $sql = "UPDATE students SET " .
	// 				"lastName = '" .   $lastName   . "', " .
	// 				"firstName = '" .  $firstName  . "', " .
	// 				"test1Grade = '" . $test1Grade . "', " .
	// 				"test2Grade = '" . $test2Grade . "', " .
	// 				"test3Grade = '" . $test3Grade . "', " .
	// 				"test4Grade = '" . $test4Grade . "', " .
	// 				"finalExamGrade = '" . $finalExamGrade . "' WHERE lastName = '" . $lastName . "';";


	// mysql_query($sql) or die (mysql_error());
	// mysql_close($conn);

	echo("<br>Student ". $lastName . " was updated in database.");
	echo("<br>Return to <a href='grade_list.php'>main page.</a>");

?>