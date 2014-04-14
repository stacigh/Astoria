<?php get_header(); ?>

<!-- TIME TRIGGERED BROADCAST BUTTONS -->
<?php
	// RADIO SCHEDULES! These will toggle a button that tells the user that the show is online. 
	// There are additional paramaters in the 'timer.php' file.
		// Variables
		$h = date('G');
		$m = date('i');
		$d = date('l');
		
		//Display the CTA Bar on Saturdays and is TIME SPECIFIC!!
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Monday' ){
		if ($d == 'Saturday' && $h == 01 && $m <=20 || $h == 05 || $h == 09 || $h == 13 || $h == 17 || $h == 21) {
			$ctaBarToggle = 'radio-online';	
		} else {
			$ctaBarToggle = 'radio-offline';	
		}	
		
		//Radio Pan Am Schedule - Displays Saturdays and doesn't need time params because it's hidden when the CTA bar is hidden. 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Saturday') {
		if ($d == 'Saturday') {
			$radioTimeToggle = 'radio-online';
		} else {
			$radioTimeToggle = 'radio-offline';
		}	
		
		//Radio Schedule Button Text - Displays Saturdays and is time specific (this is because it also controls the bottom radio schedule button as well as the url for the launch player button)
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ($d == 'Saturday' && $h == 01 && $m <=20 || $h == 05 || $h == 09 || $h == 13 || $h == 17 || $h == 21) {
		if ($d == 'Saturday' && $h == 01 && $m <=20 || $h == 05 || $h == 09 || $h == 13 || $h == 17 || $h == 21) {
			$radioScheduleText = 'Listen Now!';
			$radioScheduleLink = 'http://www.radiopanam.com/listen.html';
			$radioScheduleTarget = '_blank';
		} else {
			$radioScheduleText = 'Browse the Archives';
			$radioScheduleLink = get_bloginfo('url').'/category/audio/';
			$radioScheduleTarget = '_self';
		}					
?>


<!-- BEGIN PAGE TITLE -->
<div id="wrapper-slider-100">
	<div id="wrapper-slider" class="container_16">
    	<div id="slider" class="grid_16 nivoSlider">
    	
    	<a href="http://www.soundanalarm.com/2013/articles/useful-information/a-preacher-on-the-fence/" title="A Preacher on the Fence">
    	<img src="<?php bloginfo("template_url"); ?>/img/slider/slider-preacher-on-the-fence.png" alt="A poem that describes many of todays luke warm pastors/teachers. Click to read." title="A Preacher on the Fence" />

		<a href="http://www.soundanalarm.com/2012/audio/hazardous-times-in-the-church/" title="Listen Now">
		<img src="<?php bloginfo("template_url"); ?>/img/slider/slider-wolf-in-sheeps-clothes.png" alt="Hazardous Times in the Church explores 2 Timothy 3 and covers imposters and frauds who invade the church! Paul sends Timothy a letter telling him to expect this kind of warfare. Friends, it happens still. And it’s not going to get easier, it’s going to get worse!" title="Hazardous Times" />
		</a>

        	<a href="http://www.soundanalarm.com/2012/audio/christian-ethics/" title="Listen Now">
        	<img src="<?php bloginfo("template_url"); ?>/img/slider/slider-new-teaching.png" alt="Historically there's a difference between ethics and morality. The two words in our culture are used simultaneously. You may even have thought of them as the same. But they're not the same. There is a sharp distinction between ethics and morality and we, as the church, need to keep that distinction." title="Christian Ethics" />
            </a>
            <img src="<?php bloginfo("template_url"); ?>/img/slider/slider-bugle.png" alt='Our purpose is to help clear up confusion and error that has taken hold of the church. We pray the Lord will use this Website as we are faithful to exhort, edify, and comfort the true church to walk in true Biblical love and Holiness so that the "gates of hell shall not prevail against the church of Jesus Christ." Mt 16:18' title="Sound An Alarm!" />
            <img src="<?php bloginfo("template_url"); ?>/img/slider/slider-old-brick-church-summer.png" alt="We are located at the Old Brick Church on Route 2 in Williston, Vermont." title="Christian Faith Assembly"/>
            <img src="<?php bloginfo("template_url"); ?>/img/slider/slider-worship-schedule.png" alt="Christian Faith Assembly meets Sundays from 10:00am to 12:00pm at Old Brick Church on Route 2 in Williston, Vermont." title="Worship Schedule" />
            <img src="<?php bloginfo("template_url"); ?>/img/slider/slider-broadcast.png" alt="Sound An Alarm broadcasts globally through Radio Pan Am every Sunday!" title="Broadcasting Globally" />
        </div><!-- end div#slider -->
    </div><!-- end div#wrapper-slider -->
</div><!-- end div#wrapper-slider-100 -->
<!-- END PAGE TITLE -->

<div id="wrapper-cta-100" class="<?php echo $ctaBarToggle ?>">
	<div id="wrapper-cta" class="container_16">
    	<div id="cta-play-current" class="grid_8">          
			<p>Live Stream is</p>
            <h6>Online! Listen Now! <span><?php echo date('F j, Y'); ?></span></h6>
        </div><!-- end div#cta-play-current -->
        
        <div id="cta-view-more" class="grid_8">          
            
            <p><a class="<?php echo $radioTimeToggle; ?> right" href="<?php echo($radioScheduleLink); ?>" title="Listen Live on Radio Pan Am - Click to Launch Player" target="_blank">Launch Player</a></p>
            
        </div><!-- div#cta-view-more -->
        
    </div><!-- end div#wrapper-cta -->
</div><!-- end div#wrapper-cta-100 -->

<div id="wrapper-body-home" class="container_16">
    <div id="wrapper-article" class="grid_16">
	<h3 class="center">We are a reformed full gospel church committed to Biblical purity, love of the brethren, and endeavoring to minister to the lost.</h3>
    </div><!-- end div#wrapper-article -->   
    
    <a href="<?php echo bloginfo('url'); ?>/category/articles/useful-information/" alt="Useful information all Christians should know." class="button-large-banner grid_8">
    	<img src="<?php bloginfo('template_url'); ?>/img/icon-banner-new.png" alt="New Content!" class="icon-button-large-banner" />
    	<h4>Useful Information</h4>
    	<p>Information that all Christians should know.</p>
    </a><!-- /button-large-banner -->
    
        
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
    
    
    <div class="container_12">
	    <div class="wrapper-schedule grid_4 church">
	    	<img src="<?php bloginfo('template_url'); ?>/img/icon-schedule-church.png" alt="Church Schedule" />
	    	<h4>Church Schedule</h4>
	    	<div class="expand-schedule church">
	    		<p>&nbsp;</p>
	    		<p>Sundays, 10am - 12pm</p>
	    		<p>&nbsp;</p>
	    		<p>Route 2, Williston, VT <a class="icon-link" href="http://maps.google.com/maps?um=1&ie=UTF-8&q=Williston+Congregational+Church&fb=1&gl=us&hq=Williston+Congregational+Church&hnear=Williston+Congregational+Church&cid=0,0,15605877856818265930&ei=IoSHToGSLMPiiAL4teHSDA&sa=X&oi=local_result&ct=image&ved=0CAQQ_BI" target="_blank" alt="View our location using Google Maps."><img src="<?php bloginfo('template_url'); ?>/img/icon-map-pin.png" /></a></p>
	    		<a class="radio-toggle-button" href="http://maps.google.com/maps?um=1&ie=UTF-8&q=Williston+Congregational+Church&fb=1&gl=us&hq=Williston+Congregational+Church&hnear=Williston+Congregational+Church&cid=0,0,15605877856818265930&ei=IoSHToGSLMPiiAL4teHSDA&sa=X&oi=local_result&ct=image&ved=0CAQQ_BI" target="_blank" alt="View our location using Google Maps.">View Us on Google Maps</a>
	    	</div>
	    </div>
	    
	    <div class="wrapper-schedule grid_4 television">
	    	<img src="<?php bloginfo('template_url'); ?>/img/icon-schedule-television.png" alt="Television Schedule" />
	    	<h4>Television Schedule</h4>
	    	<div class="expand-schedule television">
	    		<h5>LCATV <a class="icon-link" href="http://www.lcatv.org/program/sound-alarm-0046" target="_blank" alt="Visit the LCATV website for Sound An Alarm"><img src="<?php bloginfo('template_url'); ?>/img/icon-link.png" /></a></h5>
	    		<p>Colchester, Milton, Georgia & Fairfax</p>
	    		<p>&nbsp;</p>
	    		<p>Tuesdays: 12pm and 5pm</p>
	    		<p>Wednesdays: 12am, 7am, 4pm and 8pm</p>
	    		<p>Thursdays: 6am</p>
	    		
	    		<h5>VCAM <a class="icon-link" href="http://www.vermontcam.org/vcam%20schedule.htm" target="_blank" alt="View the VCAM schedule."><img src="<?php bloginfo('template_url'); ?>/img/icon-link.png" /></a></h5>
	    		<p>Burlington, South Burlington, Hinesburg, Shelburne, Charlotte & Vergennes</p>
	    		<p>&nbsp;</p>
	    		<p>Tuesdays: 12pm</p>
	    		<p>Fridays: 11:3am</p>
	    		<a class="radio-toggle-button" href="http://www.lcatv.org/program/sound-alarm-0046" target="_blank" alt="Visit the LCATV website for Sound An Alarm">Watch Our Program on LCATV</a>
	    	</div>
	    </div>
	    
	    <div class="wrapper-schedule grid_4 globalradio">
	    	<img src="<?php bloginfo('template_url'); ?>/img/icon-schedule-radio.png" alt="Radio Schedule" />
	    	<h4>Radio Schedule</h4>
	    	<div class="expand-schedule globalradio">
	    		<p>&nbsp;</p>
	    		<p>Broadcasting globally through Radio Pan Am <a class="icon-link" href="http://www.radiopanam.com/listen.html" target="_blank" alt="Listen on Radio Pan Am"><img src="<?php bloginfo('template_url'); ?>/img/icon-link.png" /></a></p>
	    		<p>&nbsp;</p>
	    		<p>Saturdays: 4am, 8am, 12pm, 4pm, 8pm and 12am EST</p>
	    		<a class="radio-toggle-button" href="<?php echo($radioScheduleLink); ?>" alt="<?php echo($radioScheduleText); ?>" target="<?php echo($radioScheduleTarget); ?>"><?php echo($radioScheduleText); ?></a>
	    	</div>
	    </div>
    </div> 
    <div class="clear"></div>
   </div><!--end div#wrapper-body -->
<div class="clear"></div>  

<?php get_footer(); ?>