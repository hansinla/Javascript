<?php
	$temp = $_POST["inputTemp"];
	$conversion = $_POST["conversion"];
	if ($conversion == "CtoF"){
		$tempInC = $temp;
		echo("<br>" . $tempInC . " degrees Celsius equals " . number_format(CtoF($tempInC), 2) . " degrees Fahrenheit.");
	} else {
		$tempInF = $temp;
		echo("<br>" . $tempInF . " degrees Fahrenheit equals " . number_format(FtoC($tempInF), 2) . " degrees Celsius.");
	}

	function FtoC($grad){
		return ((5/9) * ($grad - 32));
	}

	function CtoF($grad){
		return ((9/5) * $grad  + 32);
	}



?>