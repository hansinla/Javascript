<!DOCTYPE html>
<html>
<head>
	<title>Mail Send</title>
</head>
<body>

<?php

	$to = "hansinla@mac.com";
	$from = "hansinla@mac.com";
	$subject = "Feedback fo you";
	$message = "Well done with following this course.";

	$headers = "From:" . $from;
	mail($to, $subject, $message, $headers); //server needs to be setup for this to work
	echo("Mail has been sent");

?>

</body>
</html>