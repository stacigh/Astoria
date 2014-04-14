<?php  
	//Display this timer only on Saturday between 7pm and 7:45pm EST		
	//(Uncomment the next line and delete this one when you're done with development)
	if ( $d == 'Sunday' && $h == 14 && $m < 45 && $startMinute > 1 ) {
	//if ($d == 'Saturday' && $h == 19 && $m < 45 && $startMinute > 1) {
		echo "$startMinute Minutes! Stay Tuned!";
	//} elseif ( $d == 'Sunday' && $h == 15 && $m > 20 ) {
	} elseif ( $d == 'Sunday' && $h == 20 && $m > 20 ) {
		echo "Offline. Thanks for listening!";
	} else {
		echo "Online! Listen now!";
	}
?> 