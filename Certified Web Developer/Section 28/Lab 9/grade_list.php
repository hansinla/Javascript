<?php
	require_once("db_connect.php");

	$sql = "SELECT * FROM students";
	$result = mysql_query($sql) or die (mysql_error());

	echo("<table style='text-align: left; font-family: Helvetica;'>");
	echo("<header><th>Last Name</th><th>First Name</th>
		<th>Test 1</th><th>Test 2</th><th>Test 3</th><th>Test 4</th><th>Final Test</th>
		<th>Average</th><th>Letter Grade</th></header>");
	
	while ($row = mysql_fetch_array($result)) {
		$average = ($row['test1Grade'] + $row['test2Grade'] + $row['test3Grade'] + $row['test4Grade'] + $row['finalExamGrade'])/5;
		$letterGrade = getLetterGrade($average);

		echo("<tr>");
		echo("<td>" . $row['lastName'] . "</td>");
		echo("<td>" . $row['firstName'] . "</td>");
		echo("<td>" . $row['test1Grade'] . "</td>");
		echo("<td>" . $row['test2Grade'] . "</td>");
		echo("<td>" . $row['test3Grade'] . "</td>");
		echo("<td>" . $row['test4Grade'] . "</td>");
		echo("<td>" . $row['finalExamGrade'] . "</td>");
		echo("<td>" . $average . "</td>");
		echo("<td>" . $letterGrade . "</td>");
		echo("<td><a href='grades_delete.php?id=" . $row['lastName'] . "'>Delete</a></td>");
		echo("<td><a href='grades_update.php?id=" . $row['lastName'] . "'>Update</a></td>");
		echo("</tr>");
	}
	echo("</table>");

	mysql_close($conn);

	function getLetterGrade($avg){
		if ($avg >= 90 ) {
			return "A";
		} else if ($avg >= 80 ) {
			return "B";
		} else if ($avg >= 70 ) {
			return "C";
		} else if ($avg >= 60 ) {
			return "D";
		} else return "F";
	}
?>