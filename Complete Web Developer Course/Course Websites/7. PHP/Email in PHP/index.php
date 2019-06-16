<!DOCTYPE html>
<html>
	<head>
		<title>WebPage</title>
	</head>
	<body>
		<div>


		<?php

		$emailTo="hansinla@mac.com";
		$subject="I hope this works!";
		$body="Lovely";
		$headers="From: tvdirector@mac.com";

		if (mail($emailTo, $subject, $body, $headers)) {

			echo "Succesful";
		}


		?>
	

		</div>

	</body>
</html>

