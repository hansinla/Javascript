<!DOCTYPE html>
<html>
<head>
	<title>File IO</title>
</head>
<body>

<?php
	$filename = "names.txt";
	$fp = fopen($filename, "w") or die ("Can't open the file");

	$names = array("Hans", "Daniela", "Julian");
	for ($i = 0; $i < sizeof($names); $i++) { 
		fwrite($fp, $names[$i] . "\n");
	}
	fclose($fp);


	$fp = fopen($filename, 'a') or die ("Can't open file"); //append
	$name1 = "Christa";
	$name2 = "Rachel";
	fwrite($fp, $name1 . "\n");
	fwrite($fp, $name2 . "\n");
	fclose($fp);


	// three different ways to read
	$fp = fopen($filename, "r");
	// read a certain amount of bytes at a time
	// $string = fread($fp, 20);
	// fclose($fp);
	
	// read entire file
	// $string = file_get_contents($filename, true);
	// echo($string);


	// read line by line
	$string = "";
	while (!feof($fp)) {
		$string .= fgets($fp, 256);
		$string .= "<br>";
	}
	fclose($fp);
	echo($string);

?>


</body>
</html>