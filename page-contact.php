<?php 
	/*
		Template Name: Contact Page
	*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
        
<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">        

                <h1><?php the_title(); ?></h1>
                <p>Send your questions, comments or requests below.</p>
                
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->  

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

    </div><!-- end div#wrapper-article -->        

<?php get_sidebar(); ?>
<div class="clear"></div>
</div><!--end div#wrapper-body -->

<?php get_footer(); ?>