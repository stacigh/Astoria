<?php get_header(); the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
            <h1><?php the_title(); ?></h1>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->
			

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12 entry">
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo(url); ?><?php echo get_post_meta($post->ID, 'featured-image-large', true); ?>" title="<?php echo get_post_meta($post->ID, 'featured-image-title', true); ?>" /></a>	
		<?php the_content(); ?>

        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
        
        <?php the_tags( 'Tags: ', ', ', ''); ?>

		<?php comments_template(); ?>
        
    </div><!-- end div#wrapper-article -->			

	<?php get_sidebar(); ?>
    <div class="clear"></div>
</div><!--end div#wrapper-body -->

<?php get_footer(); ?>