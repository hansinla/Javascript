<?php

	function greetings(){
		print("Hello, how are you?");
	}

	function repeatMyself(){
		for ($i=1; $i < 11; $i++) { 
			echo("<br>Hi, this is repeat number: " . $i);
		}
	}

	function dogAgeCalc($age){
		return ($age*7);
	}

?>