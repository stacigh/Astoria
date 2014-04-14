<?php get_header(); ?>

<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
            <h1>Search Results</h1>
            You searched for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e('. There are '); echo $count . ' '; _e('articles that match your search.'); wp_reset_query(); ?>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">
    
		<?php 
			if(function_exists('wp_paginate')) {
				wp_paginate();
			} 
		?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="archives">

				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                
                	    <?php if ( get_post_meta($post->ID, 'featured-image-large', true) ) : ?>
                        
                        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo(url); ?><?php echo get_post_meta($post->ID, 'featured-image-large', true); ?>" title="<?php echo get_post_meta($post->ID, 'featured-image-title', true); ?>" /></a>
                    
                       <?php endif; ?>
                    
					<?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button-blue"><span>Continue Reading</span></a>
				
			</div>

		<?php endwhile; ?>

		<?php 
			if(function_exists('wp_paginate')) {
				wp_paginate();
			} 
		?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
    
	</div><!-- end div#wrapper-article -->

	<?php get_sidebar(); ?>
    <div class="clear"></div>
</div><!--end div#wrapper-body -->    

<?php get_footer(); ?>