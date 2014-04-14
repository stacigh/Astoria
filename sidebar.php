<div id="wrapper-primary-sidebar" class="grid_4 omega">  

	<?php
		// RADIO SCHEDULES! These will toggle a button that tells the user that the show is online. 
		// There are additional paramaters in the 'timer.php' file.
		// Variables
		$h = date('G');
		$m = date('i');
		$d = date('l');
		
		// The first broadcast starts at 45 past the hour. 
		// This variable returns the difference in minutes until broadcast time
		$startMinute = 45 - $m;
		
		//Display the CTA Bar, Sunday's 7pm to 9pm EST		
		//(Uncomment the next line and delete this one when you're done with development)
		//if ($d == 'Saturday' && $h >= 0 && $h <= 23) {
		if ($d == 'Sunday' && $h >= 19 && $h <= 21) {
			$ctaSideToggle = 'radio-online';	
		} else {
			$ctaSideToggle = 'radio-offline';	
		}	
		
		//UCR Schedule - Displays Sundays between 7:30pm and 7:45pm EST 
		//(Uncomment the next line and delete this one when you're done with development)
		//if ($d == 'Saturday' && $h >= 0 && $h <= 23) {
		if ($d == 'Sunday' && $h == 19 && $m >= 43 && $m <= 59) {
			$ucrSideTimeToggle = 'radio-online';
		} else {
			$ucrSideTimeToggle = 'radio-offline';
		}
		
		//WLSG Schedule 
		//(Uncomment the next line and delete this one when you're done with development)
		//if ($d == 'Sunday' && $h >= 20 && $m >=00 && $m <= 20) {
		if ($d == 'Sunday' && $h >= 20 && $m >=00 && $m <= 20) {
			$wlsgSideTimeToggle = 'radio-online';	
		} else {
			$wlsgSideTimeToggle = 'radio-offline';	
		}
		
		//Removes "In" from "Streaming Live In" on the CTA Countdown 
		//(Uncomment the next line and delete this one when you're done with development)
		//if ( $d == 'Sunday' && $h == 19 && $m < 45 ) {
		if ( $d == 'Sunday' && $h == 19 && $m < 45 ) {
			$streamingSide = 'radio-online';
		} else {
			$streamingSide = 'radio-offline';
		}
		
		//Removes "Next Sunday" from "Streaming Live Next Sunday" on the CTA Bar after the broadcast 
		//The next line is for development purposes. Comment the live code and uncomment the development code to test.
		//if ( $d == 'Sunday' && $h == 15 && $m > 20  ) {
		if ( $d == 'Sunday' && $h == 20 && $m > 20 ) {
			$streamingSideOffline = 'radio-online';
		} else {
			$streamingSideOffline = 'radio-offline';
		}			
	?>
    
	<div id="sidebar-search">
    	<?php get_search_form(); ?>
    </div><!-- end div#sidebar-search -->    

	<div id="sidebar-feature-box" class="<?php echo $ctaSideToggle ?>">
        <p>Streaming Live <span class="<?php echo $streamingSide; ?>">In</span><span class="<?php echo $streamingSideOffline; ?>">Next Sunday</span></p>
        <h6><?php include('timer.php'); ?><span><?php echo date('F j, Y'); ?></span></h6>

        <a class="<?php echo $wlsgSideTimeToggle; ?> buttonSidebar" href="http://www.live365.com/cgi-bin/mini.cgi?station_name=homecominggospel&site=pro&tm=8280" title="Listen Live on WLSG - Click to Launch Player" target="_blank">Launch Player</a>
        
        <a class="<?php echo $ucrSideTimeToggle; ?> buttonSidebar" href="http://www.live365.com/cgi-bin/mini.cgi?station_name=ucr&site=pro&tm=5622" title="Listen Live on UCR - Click to Launch Player" target="_blank">Launch Player</a>
    </div><!-- end div#sidebar-feature-box -->
    
    <div id="sidebar-current-category">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        
    <?php endif; ?>
	</div><!-- end div#sidebar-current-category -->  
    	     

    
    <div id="sidebar-popular-articles">
        <h1>Featured Articles</h1>
        <?php wp_nav_menu(array('menu' => 'Featured Articles')); ?>
    </div><!-- end div#sidebar-current-category -->     
</div><!-- end div#wrapper-primary-sidebar -->