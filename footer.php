<div id="wrapper-footer-100">
	<div id="wrapper-footer" class="container_16">
    	
        <div id="footer-col-1" class="grid_4">
        	<h1>Navigation</h1>
			<?php wp_nav_menu(array('menu' => 'Footer Nav')); ?>
        </div><!-- end div#footer-col-1 -->
        
        <div id="footer-col-2" class="grid_4">
            <h1>Featured Articles</h1>
            <?php wp_nav_menu(array('menu' => 'Featured Articles')); ?>       
        </div><!-- end div#footer-col-2 -->
        
        <div id="footer-col-3" class="grid_4">
            <h1>Read More About</h1>
            <?php wp_nav_menu(array('menu' => 'Categories')); ?>       
        </div><!-- end div#footer-col-3 -->
        
        <div id="footer-col-4" class="grid_4">
        <h1>About The Pastor</h1>
        <img src="<?php bloginfo('url'); ?>/wp-content/themes/Astoria/img/pastor-john-and-wife-judy.png" alt="Pastor John and Wife Judy" title="Pastor John and Wife Judy" />
        
        <p>Pastor John Fresia is pastor of Christian Faith Assembly. The main mandate of this ministry is to teach a sound word to help clear up confusion and error that has taken hold of the church.</p>
        </div><!-- end div#footer-col-4 -->
        <div class="clear"></div>
            
    	<div id="footer-row-1" class="grid_12">
        <h2>We thank Jesus Christ, our Lord, for making this site to be beneficial for both Christians and non-Christians alike.</h2>
        </div><!-- end div#footer-row-1 -->
    
    </div><!-- end div#wrapper-footer -->
</div><!-- end div#wrapper-footer-100 -->

<div id="wrapper-footer2-100">
	<div id="wrapper-footer2" class="container_16">
        <div id="copyright-info" class="grid_12">
            <p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> - Site designed and hosted by <a href="http://www.stacigh.com" target="_blank" title="stacigh studios">stacigh studios</a> | <a href="#" title="Credits" id="credits">Credits</a></p>
        </div><!-- end div#copyright-info -->
        
        <div id="validation" class="grid_4">
        	<p>
				<a href="http://validator.w3.org/check?uri=referer" target_"blank" title="This site validates!"><img src="<?php bloginfo('template_url'); ?>/img/valid-html5.png" width="26" height="27" alt="This site validates!" class="right" /></a>
            </p>
        </div>
        
    </div><!-- end div#wrapper-footer2 -->
</div><!-- end div#wrapper-footer2-100 -->

<?php wp_footer(); ?>
	
</body>
</html>
