<?php
	$post = $wp_query->post;
	if ( in_category( array( 18,19,28,33 ))) {
		include(TEMPLATEPATH . '/single-audio.php'); }  
		else {
		include(TEMPLATEPATH . '/single-articles.php');
	}
?>