<?php	
$weather = "https://api.darksky.net/forecast/c46475d13426b8ee5157b7a7d801597b/47.9790,-122.193375";

$json = file_get_contents($weather);

$details = json_decode($json, TRUE);

$temp = round($details['currently']['temperature']);
$summary = $details['hourly']['summary']; 
		
echo "<h1>$temp&deg</h1><br>";		
echo "<h2>$summary</h2>";

?>
