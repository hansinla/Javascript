<?php
	session_start();
	$name = $_SESSION['name'];
	$password = $_SESSION['password'];
	print("Session name: $name and password $password");

	session_destroy();
	print("Session destroyed.");

?>