<?php

	// connect to databse
	$link = mysqli_connect("localhost", "hans", "QUe4AFeJTT6tNpx9", "exampledb");
	if (mysqli_connect_error()) {
		die("Could not connect to database");
	}

?>