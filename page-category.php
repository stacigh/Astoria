<?php 
	/*
		Template Name: Articles Landing Page
	*/
?>

<?php get_header(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
        
<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">        

                <h1><?php the_title(); ?></h1>
                <p>&nbsp;</p>
                
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->  

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">

		<ol>
			<?php wp_list_categories('orderby=name&include=4,8,9,11,12,13&title_li='); ?> 
        </ol> 

    </div><!-- end div#wrapper-article -->        

<?php get_sidebar(); ?>
<div class="clear"></div>
</div><!--end div#wrapper-body -->

<?php get_footer(); ?>