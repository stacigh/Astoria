<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"), false);
	   wp_enqueue_script('jquery');

	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h1>',
    		'after_title'   => '</h1>'
    	));
    }
	
	// Declare footer Nav
	
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array(
				'main_nav' => 'Main Navigation Menu'
		));
	}

	// Open Comment Author URL in new tab
	
	function comment_author_add_blank() {
		global $comment;
		//get url
		$url    = get_comment_author_url();
		//get author
		$author = get_comment_author();
		// check if user added a url or not
		// if no url, return author
		if ( empty( $url ) || 'http://' == $url )
			$return = $author;
		// if has url, return url with new format and _blank
		else
			$return = "<a href='$url' rel='external nofollow' target='_blank'>$author</a>";
		return $return;
	}
	// now run the filter on our new function
	add_filter('get_comment_author_link', 'comment_author_add_blank');	


	// Astoria Custom Comments
	
	function astoria_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='35',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a> · <span><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span></div>
      
      
      <?php comment_text() ?>

     </div>
<?php
        }	
?>