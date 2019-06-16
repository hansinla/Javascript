<!-- lab 2 -->

<!DOCTYPE html>
<html>
<head>
	<title>Lab 2</title>
</head>
<body>

<?php

	$Operand1 = 15.55;
	$Operand2 = 2.94;

	echo($Operand1 . " + " . $Operand2 . " = " . ($Operand1 + $Operand2));
	echo("<br>");
	echo($Operand1 . " - " . $Operand2 . " = " . ($Operand1 - $Operand2));
	echo("<br>");
	echo($Operand1 . " * " . $Operand2 . " = " . ($Operand1 * $Operand2));
	echo("<br>");
	echo($Operand1 . " / " . $Operand2 . " = " . ($Operand1 / $Operand2));
	echo("<br>");
	echo($Operand1 . " modulus " . $Operand2 . " = " . ($Operand1 % $Operand2));
	echo("<br>");

	$phrase = "If you are strong enough, there are no precedents.";

	echo($phrase);
	echo("<br>");

	$phrase .= "-Unknown";

	echo($phrase);
	echo("<br>");



?>

</body>
</html>