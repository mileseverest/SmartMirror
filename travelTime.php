<?php
		$travelDetails = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=1625+Orca+View+Lane+Everett,+WA&destinations=Seattle,+WA&departure_time=now&traffic_model=best_guess&key=AIzaSyDq-L2zCRa55AZDtCzGnIOj0cA23NAOj9M";

		$json = file_get_contents($travelDetails);

		$details = json_decode($json, TRUE);

		$time = $details['rows'][0]['elements'][0]['duration']['text']; 

		echo "<h2>Your current travel time to Seattle is $time</h2>";
?>
