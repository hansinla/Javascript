<!DOCTYPE html>
<html>
<head>
	<title>Reading CSV</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

	<style type="text/css">

		body{
			font-family: Helvetica;
			font-size: .5em;
		}

	</style>
</head>
<body>

<?php
	
	$file = "filename.csv";
	$fp = fopen($file, "r") or die ("Can't open file");
	$output = "";
	$counter = 0;

	while (!feof($fp)) {
		$flightlog = fgetcsv($fp, 1024);
		$line = "";
		if ($counter == 0) $line .= "<thead>";
		$line .= "<tr>";

		for ($i = 0; $i < sizeof($flightlog); $i++) {
			if ($counter == 0){
				$line .= "<th>" . $flightlog[$i] . "</th>";
			} else {
				$line .= "<td>" . $flightlog[$i] . "</td>";
			}
		}
		$line .= "</tr>";
		if ($counter == 0) $line .= "</thead>";
		$output .= $line;
		$counter++;
	}

	fclose($fp);

	echo("<table class='pure-table'>");
	echo($output);
	echo("</table>");


?>

</body>
</html>