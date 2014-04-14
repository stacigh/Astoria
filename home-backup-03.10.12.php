<?php get_header(); ?>

<!-- BEGIN PAGE TITLE -->
<div id="wrapper-slider-100">
	<div id="wrapper-slider" class="container_16">
    	<div id="slider" class="grid_16">
            <ul class="slideshow">
                <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/slider/sound-an-alarm-bugle.png" width="960" height="360" title="Sound An Alarm!" alt='Our purpose is to help clear up confusion and error that has taken hold of the church. We pray the Lord will use this Website as we are faithful to exhort, edify, and comfort the true church to walk in true Biblical love and Holiness so that the "gates of hell shall not prevail against the church of Jesus Christ." Mt 16:18'/></a></li>
                <li class="show"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/slider/christian-faith-assembly-location-map.png" width="960" height="360" title="Christian Faith Assembly" alt="We are located at the Old Brick Church on Route 2 in Williston, Vermont."/></a></li>                
                <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/slider/worship-schedule.png" width="960" height="360" title="Worship Schedule" alt="Christian Faith Assembly meets Sundays from 10:00am to 12:00pm at Old Brick Church on Route 2 in Williston, Vermont."/></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/slider/radio-schedule.png" width="960" height="360" title="Broadcasting Globally" alt="Sound An Alarm broadcasts globally through Universal Christian Radio and WLSG 1340AM out of Wilmington, North Carolina every Sunday!" /></a></li>
            </ul>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->


<!-- TIME TRIGGERED BROADCAST BUTTONS -->
<?php
	// RADIO SCHEDULES! These will toggle a button that tells the user that the show is online. 
	// There are additional paramaters in the 'timer.php' file.
		// Variables
		$h = date('G');
		$m = date('i');
		$d = date('l');
		
		// The first broadcast starts at 45 past the hour. 
		// This variable returns the difference in minutes until broadcast time
		//$startMinute = 02 - $m;
		$startMinute = 45 - $m;
		
		//Display the CTA Bar, Sunday's 7pm to 9pm EST		
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Sunday' && $h >= 14 && $h <= 16) {
		if ($d == 'Sunday' && $h >= 19 && $h <= 21) {
			$ctaBarToggle = 'radio-online';	
		} else {
			$ctaBarToggle = 'radio-offline';	
		}	
		
		//UCR Schedule - Displays Sundays between 7:30pm and 7:45pm EST 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Sunday' && $h == 14 && $m >= 43 && $m <= 59) {
		if ($d == 'Sunday' && $h == 19 && $m >= 43 && $m <= 59) {
			$ucrTimeToggle = 'radio-online';
		} else {
			$ucrTimeToggle = 'radio-offline';
		}
		
		//WLSG Schedule 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Sunday' && $h >= 15 && $m >=00 && $m <= 20) {
		if ($d == 'Sunday' && $h >= 20 && $m >=00 && $m <= 20) {
			$wlsgTimeToggle = 'radio-online';	
		} else {
			$wlsgTimeToggle = 'radio-offline';	
		}
		
		//Removes "In" from "Streaming Live In" on the CTA Countdown 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ( $d == 'Sunday' && $h == 14 && $m < 45  ) {
		if ( $d == 'Sunday' && $h == 19 && $m < 45 ) {
			$streaming = 'radio-online';
		} else {
			$streaming = 'radio-offline';
		}
		
		//Removes "Next Sunday" from "Streaming Live Next Sunday" on the CTA Bar after the broadcast 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ( $d == 'Sunday' && $h == 15 && $m > 20  ) {
		if ( $d == 'Sunday' && $h == 20 && $m > 20 ) {
			$streamingOffline = 'radio-online';
		} else {
			$streamingOffline = 'radio-offline';
		}		
?>
<div id="wrapper-cta-100" class="<?php echo $ctaBarToggle ?>">
	<div id="wrapper-cta" class="container_16">
    	<div id="cta-play-current" class="grid_8">          
			<p>Streaming Live <span class="<?php echo $streaming; ?>">In</span><span class="<?php echo $streamingOffline; ?>">Next Sunday</span></p>
            <h6><?php include('timer.php'); ?><span><?php echo date('F j, Y'); ?></span></h6>
        </div><!-- end div#cta-play-current -->
        
        <div id="cta-view-more" class="grid_8">
            
            <p><a class="<?php echo $wlsgTimeToggle; ?> right" href="http://www.live365.com/cgi-bin/mini.cgi?station_name=homecominggospel&amp;site=pro&amp;tm=8280" title="Listen Live on WLSG - Click to Launch Player" target="_blank">Launch Player</a></p>
            
            <p><a class="<?php echo $ucrTimeToggle; ?> right" href="http://www.live365.com/cgi-bin/mini.cgi?station_name=ucr&amp;site=pro&amp;tm=5622" title="Listen Live on UCR - Click to Launch Player" target="_blank">Launch Player</a></p>
        </div><!-- div#cta-view-more -->
        
    </div><!-- end div#wrapper-cta -->
</div><!-- end div#wrapper-cta-100 -->

<div id="wrapper-body-home" class="container_16">
    <div id="wrapper-article" class="grid_16">
	<h3 class="center">We are a reformed full gospel church committed to Biblical purity, love of the brethren, and endeavoring to minister to the lost.</h3>
    </div><!-- end div#wrapper-article -->    
    
    <div id="wrapper-newsletter" class="grid_8">
    <h4>Receive Updates</h4>
    <p>To receive notifications when our site is updated, enter your email address and name below!</p>
    
    <form action="http://soundanalarm.us4.list-manage.com/subscribe/post" method="post">
    <input type="hidden" name="u" value="796fc13cf430b95c39415f902">
    <input type="hidden" name="id" value="a55df03c36">
        
        <label for="newsletter-name" class="label-first">Name</label>
        <label for="newsletter-surname"  class="label-second">Surname</label>
        <label for="newsletter-email"  class="label-third">Email</label>
        
        <input type="text" id="newsletter-name" class="newsletter-resting-state" name="MERGE1" placeholder="Name" required="required" onblur="if (this.value == '') {this.value = 'Name';}" onfocus="if (this.value == 'Name') {this.value = '';}" />
        <input type="text" id="newsletter-surname" class="newsletter-resting-state" name="MERGE2" placeholder="Surname" required="required" onblur="if (this.value == '') {this.value = 'Surname';}" onfocus="if (this.value == 'Surname') {this.value = '';}" />
        <input type="text" id="newsletter-email" class="newsletter-resting-state" name="MERGE0" placeholder="Email" required="required" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="if (this.value == 'Email') {this.value = '';}" />
        <input type="submit" value="" style="height:0;overflow:auto;position:absolute;left:-9999px;" /> 
        <input type="submit" class="button-submit" name="newsletter-sumbit" value="Subscribe" />
    </form>
    
</div><!-- div#wrapper-newsletter -->
        
    <div id="wrapper-prayer-request" class="grid_8">
    	<h4>Prayer Request</h4>
        <p>If you would like us to pray for you, send us your name and email (both are optional) along with your prayer request.</p>
        <form name="prayer-request" action="<?php bloginfo('template_url'); ?>/prayer-request-engine.php" method="post">
        
            <label for="prayer-request-name" class="label-first">Name</label>
            <label for="prayer-request-email" class="label-second">Email</label>
            <label for="prayer-request-request" class="label-third">Request</label>
            
            <input type="text" class="prayer-request-resting-state" id="prayer-request-name" name="prayer-request-name" placeholder="Name"  onblur="if (this.value == '') {this.value = 'Name';}" onfocus="if (this.value == 'Name') {this.value = '';}" />
            <input type="text" class="prayer-request-resting-state" id="prayer-request-email" name="prayer-request-email" placeholder="Email" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="if (this.value == 'Email') {this.value = '';}" />
            <input type="text" class="prayer-request-resting-state" id="prayer-request-request" name="prayer-request-request" placeholder="Request" required="required" onblur="if (this.value == '') {this.value = 'Request';}" onfocus="if (this.value == 'Request') {this.value = '';}" />
            <input type="submit" value="" style="height:0;overflow:auto;position:absolute;left:-9999px;" />
            <input type="submit" class="button-submit" id="prayer-request-submit" name="prayer-request-sumbit" value="Submit" />
        </form>
    </div><!-- end div#wrapper-prayer-request -->
    <div class="clear"></div>
    
	<div class="grid_4">
    	<h6>Church Schedule</h6>
        <p>Sun: 10am - 12pm</p>
        <p><a href="http://maps.google.com/maps?um=1&amp;ie=UTF-8&amp;q=Williston+Congregational+Church&amp;fb=1&amp;gl=us&amp;hq=Williston+Congregational+Church&amp;hnear=Williston+Congregational+Church&amp;cid=0,0,15605877856818265930&amp;ei=IoSHToGSLMPiiAL4teHSDA&amp;sa=X&amp;oi=local_result&amp;ct=image&amp;ved=0CAQQ_BI" title="View Location on Google Maps" target="_blank">Location:</a> Rte 2, Williston, VT</p>
    </div><!-- end Church Schedule -->
    
	<div class="grid_4">
    	<h6>LCATV Schedule</h6>
        <p>Colchester, Milton, Georgia and Fairfax, VT</p>
        <p>Tues: 12pm and 5pm</p>
        <p>Wed: 12am, 7am, 4pm and 8pm</p>
        <p>Thurs: 6am</p>
        <p><a href="http://www.lcatv.org/program/sound-alarm-0046" title="LCATV Show Page" target="_blank">LCATV Schedule</a></p>
     </div><!-- end TV Schedule 1 -->
     
     <div class="grid_4">
     	<h6>VCAM Schedule</h6>
        <p>Burlington, Shelburne, South Burlington, Charlotte, Hinseburg and Vergennes, VT</p>
        <p>Tues: 12pm</p>
        <p>Fri: 11:30am</p>
        <p><a href="http://www.vermontcam.org/vcam%20schedule.htm" title="VCAM Schedule Page" target="_blank">VCAM Schedule</a></p>
    </div><!-- end TV Schedule 2 -->
    
	<div class="grid_4">
    	<h6>Radio Schedules</h6>
        <p><a href="http://www.universalchristianradio.com/index.php?option=com_content&amp;task=view&amp;id=82&amp;Itemid=99" title="Sound an Alarm on Universal Christian Radio" target="_blank">Universal Christian Radio:</a> Available throughout the world!</p>
        <p>Sun: 7:45pm (EST)</p>
        <p>&nbsp;</p>
        <p><a href="http://www.homecominggospel.com" title="WLSG 1340AM - Wilmington, NC" target="_blank">WLSG 1340AM - Wilmington, NC:</a> Available throughout the world!</p>
        <p>Sun: 8pm (EST)</p>
    </div><!-- end Radio Schedule -->    
 
    <div class="clear"></div>
</div><!--end div#wrapper-body -->
<div class="clear"></div>  

<?php get_footer(); ?>