<?php
	require_once('db_connect.php');

	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM employee WHERE empId = '" . $id . "';";

	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result) or die(mysql_error());

?>

<html>
<head>
	<title>Update Employee</title>
</head>
<body>
<form action="update_process.php" method="POST">
	<input type="hidden" name="id" value="<?php print($id); ?>"/>
	<table>
		<tr>
			<td>Last Name</td><td><input type="text" name="last" value="<?php print($row['lastName']); ?>"/></td>
		</tr>
		<tr>
			<td>First Name</td><td><input type="text" name="first" value="<?php print($row['firstName']); ?>"/></td>
		</tr>
		<tr>
			<td>Department</td><td><select name="department">
			<option <?php if($row['department'] == 1){print('selected');} ?> value="1">Accounting</option>
			<option <?php if($row['department'] == 2){print('selected');} ?> value="2">Sales</option>
			<option <?php if($row['department'] == 3){print('selected');} ?> value="3">Information Technology</option>
			<option <?php if($row['department'] == 4){print('selected');} ?> value="4">Management</option></td>
		</tr>
		<tr>
			<td>Position</td><td><input type="text" name="position" value="<?php print($row['position']); ?>"/></td>
		</tr>
		<tr>
			<td>Salary</td><td><input type="text" name="salary" value="<?php print($row['salary']); ?>"/></td>
		</tr>

	</table>
	<input type="submit" name="submit" value="Update"/>
	


</form>

</body>
</html>