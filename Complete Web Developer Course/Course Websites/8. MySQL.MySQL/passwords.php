<?php

	// use a hash to encode passwords
	//echo md5("password"); 	// fairly good encoding but retrievable with rainbow tables
							// if they are commingly used passwords

	// use a hash with a salt
	$salt = "fkjhhrweiufdsnvseiut";
	//echo md5($salt, "password");	// protects people with strong and weak passwords

	// level 4 passwords protection
	// change the salt per user
	echo md5(md5($row['id'])."password");
?>