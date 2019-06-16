<!DOCTYPE html>
<html>
<head>
	<title>Lab 4</title>
</head>
<body>

	<?php

	function getLetterGrade($avg){
		if ($avg >= 97) {return "A+";}
		else if ($avg >= 92) {return "A";}
		else if ($avg >= 90) {return "A-";}
		else if ($avg >= 87) {return "B+";}
		else if ($avg >= 83) {return "B";}
		else if ($avg >= 80) {return "B-";}
		else if ($avg >= 70) {return "C";}
		else if ($avg >= 60) {return "A";}
		else return "F";
	}

	$age = 56;

	if ($age > 60){
		echo("What’s life’s next adventure?");
	} else if ($age >= 50){
		echo("Time to get ready for retirement.");
	} else if ($age >= 40){
		echo("These might be your prime earning years.");
	} else if ($age >= 30){
		echo("This is the time to focus on your career!");
	} else if ($age >= 18){
		echo("This is the prime of your life-- Enjoy it!");
	} else echo("You’re Still a Pup! Stay in School.");

	echo("<br>");


	$Mary = array(89, 99, 63, 85);
	$Bob = array(73, 80, 81, 82);
	$Mark = array(90, 95, 91, 70);

	$maryAvg = array_sum($Mary) / 4;
	$maryLetter = getLetterGrade($maryAvg);

	echo("Mary has an grade average of " . $maryAvg . " and the letter grade " . $maryLetter . "<br>");

	$bobAvg = array_sum($Bob) / 4;
	$bobLetter = getLetterGrade($bobAvg);

	echo("Bob has an grade average of " . $bobAvg . " and the letter grade " . $bobLetter  . "<br>");

	$markAvg = array_sum($Mark) / 4;
	$markLetter = getLetterGrade($markAvg);

	echo("Mark has an grade average of " . $markAvg . " and the letter grade " . $markLetter  . "<br>");


	

	?>

</body>
</html>