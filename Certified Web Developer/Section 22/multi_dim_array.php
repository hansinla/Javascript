<!DOCTYPE html>
<html>
<head>
	<title>Multi Dimensional Arrays</title>
</head>
	<body>

		<?php

			$teams =  array(
				"Netherlands" => array(
					"ADO Den Haag",
					"AFC Ajax",
					"AZ Alkmaar",
					"SC Cambuur",
					"De Graafschap",
					"SBV Excelsior",
					"Feyenoord",
					"FC Groningen",
					"SC Heerenveen",
					"Heracles",
					"N.E.C.",
					"PEC Zwolle",
					"PSV",
					"Roda JC",
					"FC Twente",
					"FC Utrecht",
					"Vitesse",
					"Willem II"
					),
				"England" => array(
					"Arsenal F.C.",
					"Aston Villa F.C.",
					"A.F.C. Bournemouth",
					"Chelsea F.C.",
					"Crystal Palace F.C.",
					"Everton F.C.",
					"Leicester City F.C.",
					"Liverpool F.C.",
					"Manchester City F.C.",
					"Manchester United F.C.",
					"Newcastle United F.C.",
					"Norwich City F.C.",
					"Southampton F.C.",
					"Stoke City F.C.",
					"Sunderland A.F.C.",
					"Swansea City A.F.C.",
					"Tottenham Hotspur F.C.",
					"Watford F.C.",
					"West Bromwich Albion F.C.",
					"West Ham United F.C."
					)
				);

			echo($teams["Netherlands"][6]);

		?>
	</body>
</html>