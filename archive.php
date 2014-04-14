<?php get_header(); ?>
<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
        
        <?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>
                <p>Articles and Teachings</p>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1>Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>
			
			<?php } ?>
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

			<?php while (have_posts()) : the_post(); ?>
			
				<div id="archives" <?php post_class() ?>>
				
					<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo(url); ?><?php echo get_post_meta($post->ID, 'featured-image-large', true); ?>" title="<?php echo get_post_meta($post->ID, 'featured-image-title', true); ?>" /></a>
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

		<h2>Well this is embarrassing...</h2>
        <p>Nothing has been posted in <?php single_cat_title(); ?> yet.</p>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->    

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">
    	<p>Seems like we've misplaced this page. Please choose another page from the navigation menu.</p>    

	<?php endif; ?>
    </div><!-- end div#wrapper-article -->
    
    <?php get_sidebar(); ?>
    
    <div class="clear"></div>
</div><!-- end div#wrapper-body -->

<?php get_footer(); ?>