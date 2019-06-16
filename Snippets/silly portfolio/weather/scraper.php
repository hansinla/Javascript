<?php

	// weather-forecast.com
	// need to take out spaces from city names.

	$location = $_GET['location'];
	$location = str_replace(" ", "", $location);
	$destination = "http://weather-forecast.com/locations/".$location."/forecasts/latest";
	$contents = file_get_contents($destination);
 	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
	echo $matches[1];
	
?>