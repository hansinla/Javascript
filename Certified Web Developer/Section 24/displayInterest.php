<?php

	$principal = $_POST[principal];
	$interest = $_POST[interest];
	$term = $_POST[term];

	$monthlyIntRate = $interest / 12;
	
	
	echo("<table cellspacing='10'>");
	echo("<tr><th>Month</th><th>Balance</th><th>Interest</th></tr>");
	for ($i=1; $i <= $term ; $i++) { 
		$monthlyInterest = $principal * ($monthlyIntRate / 100);
		$principal = $principal + $monthlyInterest;
		echo("<tr><td>" . $i . "</td><td>$" . number_format($principal,2) . "</td><td>$" . number_format($monthlyInterest,2) . "</td></tr>");
	}

	echo("</table>");

?>