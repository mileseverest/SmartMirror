<?php // Depending on the hour of the day a different message is displayed.	
	date_default_timezone_set('US/Pacific');
	$now = date('H');
		if (($now > 06) and ($now < 10)) echo 'Good morning!';
		else if (($now >= 10) and ($now < 12)) echo 'Have a nice day!';
		else if (($now >= 12) and ($now < 14)) echo 'Time for lunch!';
		else if (($now >= 14) and ($now < 17)) echo 'Time for an afternoon nap...';
		else if (($now >= 17) and ($now < 20)) echo 'Time to start thinking about dinner?';
		else if (($now >= 20) and ($now < 22)) echo 'Have a nice evening!';
		else if (($now >= 22) and ($now < 23)) echo 'Sleep tight, see you tomorrow!';
		else if (($now >= 00) and ($now < 06)) echo 'Shh, sleeping...';
?>
