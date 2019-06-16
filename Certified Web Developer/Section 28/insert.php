<!DOCTYPE html>
<html>
<head>
	<title>Insert Employee</title>
</head>
<body>
<form action="insert_process.php" method="POST">

	<table>
		<tr>
			<td>Last Name</td><td><input type="text" name="last"/></td>
		</tr>
		<tr>
			<td>First Name</td><td><input type="text" name="first"/></td>
		</tr>
		<tr>
			<td>Department</td><td><select name="department">
			<option value="1">Accounting</option>
			<option value="2">Sales</option>
			<option value="3">Information Technology</option>
			<option value="4">Management</option></td>
		</tr>
		<tr>
			<td>Position</td><td><input type="text" name="position"/></td>
		</tr>
		<tr>
			<td>Salary</td><td><input type="text" name="salary"/></td>
		</tr>

	</table>
	<input type="submit" name="submit" value="Save"/>
	


</form>

</body>
</html>