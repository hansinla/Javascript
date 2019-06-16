<!DOCTYPE html>
<html>
<head>
	<title>Lab 6</title>
</head>
<body style="font-family: Helvetica;">
	<form action="myfunctions.php" method="POST">
		<table>
			<tr>
				<td>Enter temperature</td>
				<td><input type="text" name="inputTemp" value="100"></td>
			</tr>
			<tr>
				<td><input type="radio" name="conversion" value="FtoC" checked>F to C</td>
				<td><input type="radio" name="conversion" value="CtoF">C to F</td>
			</tr>
		</table>
		<input type="submit" value="submit"/>
	</form>

</body>
</html>