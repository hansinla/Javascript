<!DOCTYPE html>
<html>
	<head>
		<title>WebPage</title>
	</head>
	<body>
		<div>

		

		<?php

		$names = array("Hans", "Julian", "Daniela");
		$knowyou = false;

		if ($_POST["submit"]) {

			if ($_POST["name"]){

					foreach ($names as $key=>$value) { 

						if ($value == $_POST["name"]) {
							echo "Hello ".$value;
							$knowyou = true;

						}

					}

					if (!$knowyou)  {

						echo "I don't know you.";
					}
			} else {

				echo "Please enter your name.";
			}
		}

			
			
		?>

			<form method="post">
				<label for="name">Name</label>
				<input name="name" type="text"/>
				<input type="submit" name="submit" value="Submit your name"/>
			</form>

		</div>

	</body>
</html>

