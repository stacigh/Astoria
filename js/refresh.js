function refreshAt(hours, minutes, seconds, day) {
    var now = new Date();
    var then = new Date();
	var dayUTC = new Date();

	if(dayUTC.getUTCDay() == day) {
		
		if(now.getUTCHours() > hours ||
		   (now.getUTCHours() == hours && now.getUTCMinutes() > minutes) ||
			now.getUTCHours() == hours && now.getUTCMinutes() == minutes && now.getUTCSeconds() >= seconds) {
			then.setUTCDate(now.getUTCDate() + 1);
		}

	then.setUTCHours(hours);
	then.setUTCMinutes(minutes);
	then.setUTCSeconds(seconds);


    var timeout = (then.getTime() - now.getTime());
    setTimeout(function() { window.location.reload(true); }, timeout);
	}
}