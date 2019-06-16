<?php
	session_start();
	$username = $_SESSION['username'];
	session_destroy();

	$date_of_expiry = time() + (60*30);
	setcookie("username", $username, $date_of_expiry);
	
	echo("<br>Go to <a href='retrieve.php'>retrieve cookie</a>");
?>