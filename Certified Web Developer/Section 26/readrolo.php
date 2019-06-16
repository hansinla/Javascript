<!DOCTYPE html>
<html>
<head>
	<title>Read Rolodex</title>


	<style type="text/css">

		body{
			font-family: Helvetica;
		}

	</style>
</head>
<body>
	<FORM METHOD="LINK" ACTION="lab7.php">
		<INPUT TYPE="submit" VALUE="Insert more names">
	</FORM>

<?php
	
	$file = "rolodex.txt";
	$fp = fopen($file, "r") or die ("Can't open file");
	$output = "";

	while (!feof($fp)) {
		$address = fgetcsv($fp, 1024);
		$line = "";
		$line .= "<tr>";

		for ($i = 0; $i < sizeof($address); $i++) {
			$line .= "<td>" . $address[$i] . "</td>";
		}
		$line .= "</tr>";
		$output .= $line;
	}

	fclose($fp);

	echo("<table>");
	echo($output);
	echo("</table>");


?>

</body>
</html>