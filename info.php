<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>Magic Mirror</title>
	<meta name="description" content="The Magic Mirror">
	<meta http-equiv="refresh" content="1800" /> <!-- Updates the whole page every 30 minutes (each 1800 second) -->
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		
	<script>	
	setInterval(function() {
	$(document).ready(function(){
    $.ajax({
        url: 'message.php',                        
        type: 'get',                                  
        data: {},
        success: function(response){
            console.log("Success  Response",response);
            $('#message').html(response);
		}
    });

	
    $.ajax({
        url: 'weather.php',                        
        type: 'get',                                  
        data: {},
        success: function(response){
            console.log("Success  Response",response);
            $('#weather').html(response);
		}
    });


    $.ajax({
        url: 'travelTime.php',                        
        type: 'get',                                  
        data: {},
        success: function(response){
            console.log("Success  Response",response);
            $('#travel').html(response);
		}
    });
})

}, 120000);

	</script>
	<script language="JavaScript"> 
			setInterval(function() 
			{ 
				var currentTime = new Date ( );
				var currentHours = currentTime.getHours ( );   
				var timeOfDay = "am";
				
				if (currentHours > 12)
				{
					currentHours = currentHours - 12;
					timeOfDay = "pm";	
				}
	
				var currentMinutes = currentTime.getMinutes ( );
				var currentMinutesleadingzero = currentMinutes > 9 ? currentMinutes : '0' + currentMinutes;
				var currentDate = currentTime.getDate ( );
	
				var weekday = new Array(7);
				weekday[0] = "Sunday";
				weekday[1] = "Monday";
				weekday[2] = "Tuesday";
				weekday[3] = "Wednesday";
				weekday[4] = "Thursday";
				weekday[5] = "Friday";
				weekday[6] = "Saturday";
				var currentDay = weekday[currentTime.getDay()]; 
	
				var actualmonth = new Array(12);
				actualmonth[0] = "January";
				actualmonth[1] = "February";
				actualmonth[2] = "March";
				actualmonth[3] = "April";
				actualmonth[4] = "May";
				actualmonth[5] = "June";
				actualmonth[6] = "July";
				actualmonth[7] = "August";
				actualmonth[8] = "September";
				actualmonth[9] = "October";
				actualmonth[10] = "November";
				actualmonth[11] = "December";
				var currentMonth = actualmonth[currentTime.getMonth ()];
    
				var currentTimeString = "<h1>" + currentHours + ":" + currentMinutesleadingzero + "</h1><h11>" + timeOfDay + "</h11><h2>" + currentDay + " " + currentDate + " " + currentMonth + "</h2>";
    
				document.getElementById("clock").innerHTML = currentTimeString;
			}, 1000);
	
</script>
</head>

<body>
<div id="wrapper">
	<div id="upper-left">
		<div id="clock"></div> <!-- Including the date/time-script -->
	</div>	
	<div id = "travel">
		<h2><div id="travel"</div></h2>
	</div>
	<div id = "upper-right">
		<div id="weather"></div>
	</div>
	<div id="bottom">
		<h3>
			<div id = "message"></div>
		</h3>
	</div>
</body>
</html>
