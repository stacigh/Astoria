<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<?php
	//The next line is the development code. Uncomment to develop and comment out the live code.
	//date_default_timezone_set("America/Los_Angeles");
	date_default_timezone_set("America/Los_Angeles");
    ?>

	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" media="print">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" media="screen">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!-- GOOGLE FONT API -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
    <!-- END GOOGLE FONT API --> 
    
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie.css" />
	<![endif]-->
	
    <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie8.css" />
	<![endif]-->	
    
    <!--[if gte IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie9plus.css" />
	<![endif]-->  
    
    <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" />
	<![endif]-->      

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
    
    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    
    <!--[if lt IE 7]>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/unitpngfix.js"></script>
    <![endif]-->
    
    <script src="<?php bloginfo('template_url'); ?>/js/credits.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/input-toggle.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/list-spans.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/refresh.js"></script>
    <!-- Include the Nivo Slider JS file -->
	<script src="<?php bloginfo("template_url"); ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <!-- Set up the Nivo Slider -->
    <script type="text/javascript">
		jQuery(window).load(function() {
			jQuery('#slider').nivoSlider({
				effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
				animSpeed: 1000, // Slide transition speed
				pauseTime: 5000, // How long each slide will show
				controlNav: false, // 1,2,3... navigation
				pauseOnHover: true, // Stop animation while hovering
				directionNav: false // Next & Prev navigation
			});
		});
	
    	//Javascript Refreshing
		refreshAt(0,00,15,1); //Will begin refreshing the page at 7pm EST Sunday (in code, that's Midnight UTC Monday)
		refreshAt(0,05,15,1); // 7:05:15 pm on Sunday, 12:05:15 am Monday
		refreshAt(0,10,15,1); // 7:10:15 pm on Sunday, 12:10:15 am Monday
		refreshAt(0,15,15,1); // 7:15:15 pm on Sunday, 12:15:15 am Monday
		refreshAt(0,20,15,1); // 7:20:15 pm on Sunday, 12:20:15 am Monday
		refreshAt(0,25,15,1); // 7:25:15 pm on Sunday, 12:25:15 am Monday
		refreshAt(0,30,15,1); // 7:30:15 pm on Sunday, 12:30:15 am Monday
		refreshAt(0,35,15,1); // 7:35:15 pm on Sunday, 12:35:15 am Monday
		refreshAt(0,40,15,1); // 7:40:15 pm on Sunday, 12:40:15 am Monday
		refreshAt(0,41,15,1); // 7:41:15 pm on Sunday, 12:41:15 am Monday
		refreshAt(0,42,15,1); // 7:42:15 pm on Sunday, 12:42:15 am Monday
		refreshAt(0,43,15,1); // 7:43:15 pm on Sunday, 12:43:15 am Monday
		refreshAt(0,44,15,1); // 7:44:15 pm on Sunday, 12:41:15 am Monday
		refreshAt(0,45,15,1); // 7:45:15 pm on Sunday, 12:45:15 am Monday
		//refreshAt(1,00,15,1);
		//refreshAt(1,21,15,1);
		//refreshAt(1,59,15,1);
	</script>
    
    <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-9678779-12']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

    </script>
    
</head>

<body <?php body_class(); ?>>

<div id="wrapper-header-100">
	<div id="wrapper-header" class="container_16">
    
		<div id="container-logo" class="grid_4">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div><!-- end div#container-logo -->
        
        <div id="radio-online" class="grid_4">
            <p>&nbsp;</p>
        </div><!-- end Radio Online --> 
        
        <div id="nav" class="grid_8">
        <?php wp_nav_menu(array('menu' => 'Global Nav')); ?>
        </div><!-- end div#nav -->
        <div class="clear"></div>
        
	</div><!-- end div#wrapper-header -->
</div><!-- end div#wrapper-header-100 -->         