<!DOCTYPE html>
<html>
	<head>
	<title>WebPage</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<style type="text/css">

			.emailForm {
				border: 1px solid gray;
				border-radius: 10px;
				margin-top: 20px;
				margin-bottom: 20px;
			}

			textarea {

				height: 180px;
				margin-bottom: 15px;
			}

			form {
				
				padding-bottom: 20px;

			}	
			
		</style>
	</head>
	<body>


		

<?php

		if ($_POST["submit"]) {
			$result="";

			if (!$_POST["name"]) {
				 $error="<br />Please enter your name";
			}
			if (!$_POST["email"]) {
				 $error.="<br />Please enter your email address";
			}
			if (!$_POST["message"]) {
				 $error.="<br />Please enter a message";
			}
			if ($_POST["email"] != "" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$error.="<br />Please enter a valid email address";
			} 
			if ($error) {
				$result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
			} else {

				$emailTo = "tvdirector@mac.com";
				$subject = $_POST["subject"];
				$message = $_POST["message"];
				$headers = "From: ".$_POST["email"];

				if (mail($emailTo, $subject, $message, $headers)) {
					$result='<div class="alert alert-success">Message sent! Thank you, I\'ll be in touch.</div>';
				} else {
					$result='<div class="alert alert-danger"><strong>Sorry there was an error sending your message. Please try again later.</strong></div>';
				}

			}
	
		}

			
			
		?>
		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailForm">
				<h1>Email Form</h1>

				<?php echo $result ?>

				<p class="lead">Please get in touch. I'll get back to you as soon as possible.</p>	


				<form method="post">

					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" class="form-control" placeholder"Your Name" value="<?php echo $_POST['name']; ?>"/>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" type="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>"/>
					</div>
					<div class="form-group">
						<label for="subject">Subject:</label>
						<input name="subject" type="text" class="form-control" value="<?php echo $_POST['subject']; ?>"/>
					</div>
					<div class="form-group">
						<label for="message">Your Message:</label><br />
						<textarea class="form-control" name="message" type="text"><?php echo $_POST['message']; ?></textarea>
					</div>
					<input name="submit" type="submit" value="Submit" class="btn btn-success btn-lg"/>

				</form>

			
			</div>	
		</div>
	</div>	



				

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	</body>
</html>

