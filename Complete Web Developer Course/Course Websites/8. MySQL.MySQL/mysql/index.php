<?php
	setcookie("TESTCOOKIE", "12345", time()+3600);  // When running on localhost set domain to false
	echo $_COOKIE["TESTCOOKIE"];

	
	$link = mysqli_connect("localhost", "hans", "MASKED", "exampledb");

	if (mysqli_connect_error()) {
		die( "Could not connect to database"); // die echo's but kills the process as well
	}

	// $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Julian', 'julianinla@me.com', 'NEW_PASSWORD')";
	
	$query = "UPDATE `users` SET `email` = 'test@mac.com' WHERE `id`=2 LIMIT 1";
	mysqli_query($link, $query);

	// mysqli_real_escape_string($link, $query) // to search for names with punctuation characters like" '



	

	$query = "SELECT * FROM `users` WHERE `name`='Julian'";
	 if ($result = mysqli_query($link, $query)){
	 	while ($row = mysqli_fetch_array($result)) {
	 		print_r($row);
	 	}
	 	
	 	
	 } else {
	 	echo "Query failed!";
	 }
?>


<!--
Host	localhost
Port	8889
User	root
Password	root
Socket	/Applications/MAMP/tmp/mysql/mysql.sock
-->



<!-- 
$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
-->

