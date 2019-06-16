<?php
	// start session
	session_start();

	if($_GET["logout"] == 1 AND $_SESSION['id']) {


		session_destroy();
		$message = "You have been logged out. Have a nice day!";
	}

	include("connection.php");

	if ($_POST['submit'] == "Sign Up") {
		
		// check email & password present and valid
		if (!$_POST["email"]) {
				$error.="Please enter your email address.";
		} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$error.="Please enter a valid email address.";
		} 

		if (!$_POST['password']) {
				$error.="<br />Please enter your password.";
			} else {
				if (strlen($_POST['password']) < 8 ) {
					$error.="<br />Please enter a password with at least 8 characters.";
				}
				if (!preg_match('/[A_Z]/', $_POST['password']))  {
					$error.="<br />Please include at least one capital letter in your password.";
				}
			}	

		if ($error) {
			$error = "There were errors in your sign-up details: ".$error;
			//$result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
		} else {

			/// all entries okay, check if email already exists in database
			$query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result =  mysqli_query($link, $query);
			$results = mysqli_num_rows($result);
			if ($results) {
				$error = "That email address is already registered. Do you want to log in?";
				// copy email and password to log in here
			} else {
				// email is unique, add new user to database -----------   protect against code insertion attacks ------------------  salt and double hash password for security
				$query= "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo "You have been signed up";

				// create a session variable based on the id of the user
				$_SESSION['id'] = mysqli_insert_id($link);
				// Redirect to logged in page
				header("Location:mainpage.php");
			}
		}
	}

	if ($_POST['submit'] == "Log In") {

		// check if email already exists in database
		$query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND `password` = '".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."'";
		$result =  mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		if ($row) {
			$_SESSION['id']= $row['id'];
			// Redirect to logged in page
			header("Location:mainpage.php");
		} else {
			$error = "We could not find the user with that email and password. Please try again.";
		}

	}
?>