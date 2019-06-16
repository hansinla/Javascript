<?php
	require_once('db_connect.php');

	$lastName = $_REQUEST['id'];
	$sql = "SELECT * FROM students WHERE lastName = '" . $lastName . "';";
	$result = mysql_query($sql) or die (mysql_error());

	$row = mysql_fetch_array($result) or die(mysql_error());

?>

<html>
	<head>
		<title>Update grades</title>

		<style>

			th {
				text-align: left;
				font-size: .7em;
			}

			body {
				font-family: Helvetica;
				background-color: #377BB5;
			}

			#lower-button {
				width: 205px;
			}
			
		</style>
	</head>
	<body >
		<form action="process_grades.php" method="POST">
			<table>
				<tr><th>Last Name</th><td><input type="text" name="last" value="<?php print($row['lastName']); ?>"/></td></tr>
				<tr><th>First Name</th><td><input type="text" name="first" value="<?php print($row['firstName']); ?>"/></td></tr>
				<tr><th>Test 1</th><td><input type='text' name='test1Grade' value="<?php print($row['test1Grade']); ?>"/></td></tr>
				<tr><th>Test 2</th><td><input type='text' name='test2Grade' value="<?php print($row['test2Grade']); ?>"/></td></tr>
				<tr><th>Test 4</th><td><input type='text' name='test3Grade' value="<?php print($row['test3Grade']); ?>"/></td></tr>
				<tr><th>Test 5</th><td><input type='text' name='test4Grade' value="<?php print($row['test4Grade']); ?>"/></td></tr>
				<tr><th>Final Exam</th><td><input type='text' name='finalExamGrade' value="<?php print($row['finalExamGrade']); ?>"/></td></tr>
			</table>
			<input id='lower-button' type="submit" name="submit" value="Update"/>
		</form>
	</body>
</html>