<!DOCTYPE html>
<html>
<head>
	<title>Lab 5</title>
</head>
<body>

<?php
	// output a pyramid
	for ($i = 1; $i < 13; $i++) { 
		$j = 0;
		do{ 
			echo("*");
			$j++;
		} while ($j < $i);
		echo("<br>");
	}

?>

</body>

</html>