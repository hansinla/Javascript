<!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
	<style type="text/css">

	#headerRow{
		border-width: 2px;
		padding: 8px;
		border-style: solid;
		border-color: #666666;
		background-color: #dedede;'
	}


	</style>
</head>
<body style="font-family: Helvetica;">

<?php
	$TestOne = array(
		"Smith" => 98,
		"Johnson" => 67,
		"Fields" => 71,
		"Laurel" => 68,
		"Gold" => 91,
		"Braverman" => 88,
		"Stone" => 84,
		"Kiel" => 84
		);
	$TestTwo = array(
		"Smith" => 75,
		"Johnson" => 88,
		"Fields" => 81,
		"Laurel" => 63,
		"Gold" => 67,
		"Braverman" => 82,
		"Stone" => 77,
		"Kiel" => 81
		);
	$TestThree = array(
		"Smith" => 100,
		"Johnson" => 85,
		"Fields" => 76,
		"Laurel" => 71,
		"Gold" => 63,
		"Braverman" => 55,
		"Stone" => 81,
		"Kiel" => 79
		);
	$TestFour = array(
		"Smith" => 91,
		"Johnson" => 81,
		"Fields" => 77,
		"Laurel" => 70,
		"Gold" => 90,
		"Braverman" => 82,
		"Stone" => 90,
		"Kiel" => 100
		);

	$allTests = array($TestOne, $TestTwo, $TestThree, $TestFour);
	$studentScores = array(
		"Smith" => [],
		"Johnson" => [],
		"Fields" => [],
		"Laurel" => [],
		"Gold" => [],
		"Braverman" => [],
		"Stone" => [],
		"Kiel" => []

		);
	$averages = array(0, 0, 0, 0);

	// Loop through all tests
	for ($i = 0; $i < sizeof($allTests); $i++){
		//get average grade per test collect all scores
		$testTotal = 0;
		foreach ($allTests[$i] as $key => $value) {
			$testTotal += $value;
			// push value in student score array
			array_push($studentScores[$key], $value);
		}
		//display average grade per test
		$size = sizeof($allTests[$i]);
		$average = $testTotal / $size;
		$averages[$i] = $average;
	}

	// display table
	echo("<table>");
	echo("<tr id='headerRow'><th>Name</th><th>Test 1</th><th>Test 2</th><th>Test 3</th><th>Test 4</th></tr>");
	foreach ($studentScores as $key => $value) {
		echo("<tr>");
		echo("<td>" . $key . "</td>");
		for ($j = 0; $j < sizeof($value); $j++){
			echo("<td>" . $value[$j] . "</td>");
		}
		echo("</tr>");
	}
	echo("<tr id='headerRow'><td>Average</td>");
	for ($k = 0; $k < sizeof($averages); $k++) {
		echo("<td>" . $averages[$k] . "</td>");
	}
	echo("</tr></table>");

?>

</body>
</html>