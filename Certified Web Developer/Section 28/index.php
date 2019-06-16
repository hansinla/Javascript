<?php
	require_once("db_connect.php");

	$sql = "SELECT empId, lastName, firstName, departmentName, position, salary FROM employee, departments WHERE department = deptId ";
	$result = mysql_query($sql) or die (mysql_error());

	echo("<table style='text-align: left'>");
	echo("<header><th>ID</th><th>Last Name</th><th>First Name</th><th>Department</th><th>Position</th><th>Salary</th></header>");
	while ($row = mysql_fetch_array($result)) {
		echo("<tr>");
		echo("<td>" . $row['empId'] . "</td>");
		echo("<td>" . $row['lastName'] . "</td>");
		echo("<td>" . $row['firstName'] . "</td>");
		echo("<td>" . $row['departmentName'] . "</td>");
		echo("<td>" . $row['position'] . "</td>");
		echo("<td>" . $row['salary'] . "</td>");
		echo("<td><a href='delete.php?id=" . $row['empId'] . "'>Delete</a></td>");
		echo("<td><a href='update.php?id=" . $row['empId'] . "'>Update</a></td>");
		echo("</tr>");
	}
	echo("</table>");
?>