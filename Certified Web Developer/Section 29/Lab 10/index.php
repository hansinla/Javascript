<?php
	session_start();
	if (isset($_POST['username'])) {
  		$_SESSION['username'] = $_POST['username'];
  		echo("<br>User name stored.");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab 10</title>
</head>
<body>
	<form action="#" method="POST">
		<table>
			<tr><th>username</th><td><input type="text" name="username"></td></tr>
		</table>
		<input type="submit" value="Enter"/>
	</form>
	<p>Go to <a href='get_session.php'>retrieve session value.</a></p>

</body>
</html>