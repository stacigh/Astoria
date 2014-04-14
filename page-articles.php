<?php 
	/*
		Template Name: Article Agrigator
	*/
?>

<?php get_header(); ?>

<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
            <h1>Articles</h1>
            <p>&nbsp;</p>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">    
    
<!-- FIX ME PLEASE!!!!!! -->    <?php query_posts( 'posts_per_page=5' ); ?>
    
	<?php 
		if(function_exists('wp_paginate')) {
			wp_paginate();
		} 
    ?>  
        
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>     
        <div id="archives" <?php post_class() ?>>
        
            <h6 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
            <div class="postmetadata">
                <?php the_tags('Tags: ', ', ', '<br />'); ?>
                Posted in <?php the_category(', ') ?> by <?php the_author(); ?>| 
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </div>  <!-- end div.postmetadata -->                     
            
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo(url); ?><?php echo get_post_meta($post->ID, 'featured-image-large', true); ?>" title="<?php echo get_post_meta($post->ID, 'featured-image-title', true); ?>" /></a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button-blue"><span>Continue Reading</span></a>
            
        
        </div><!-- end div#archives -->

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
    
	<?php 
		if(function_exists('wp_paginate')) {
			wp_paginate();
		} 
    ?>    
    </div><!-- end div#wrapper-article -->
    
	<?php get_sidebar(); ?>
    <div class="clear"></div>
</div><!-- end div#wrapper-body -->

<?php get_footer(); ?>    