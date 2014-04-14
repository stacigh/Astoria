<?php get_header(); ?>

<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
            <h1>Error 404</h1>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12 entry">
	<p>This page has been either been moved or deleted. Where would you like to go?</p>
    
    <?php wp_nav_menu(array('menu' => 'Footer Nav')); ?>

    </div><!-- end div#wrapper-article -->			

	<?php get_sidebar(); ?>
    <div class="clear"></div>
</div><!--end div#wrapper-body -->

<?php get_footer(); ?>