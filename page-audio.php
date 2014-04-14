<?php 
	/*
		Template Name: Audio Files
	*/
?>

<div id="wrapper-page-title-100">
	<div id="wrapper-page-title" class="container_16">
    	<div id="page-title" class="grid_16">
            <h1>Radio Broadcasts</h1>
            <p>Bring forth the truth without compromise</p>
        </div><!-- end div#page-title -->
    </div><!-- end div#wrapper-page-title -->
</div><!-- end div#wrapper-page-title-100 -->
<!-- END PAGE TITLE -->

<div id="wrapper-body" class="container_16">
	<div id="wrapper-article" class="grid_12">
        <div id="audio-current">
            <p>Latest Sermon</p>
            <h6><?php print "$title"; ?></h6>
            <p><?php print "$date"; ?> | <?php print "$scripture"; ?></p>
            
            <span class="audio-icons">
                <img src="img/icon-play.png" title="Listen" />
                <img src="img/icon-mp3.png" title="Save MP3" />
                <img src="img/icon-download.png" title="Save Transcript" />
                <img src="img/icon-success.png" title="Save the Complete Message" />
            </span><!-- end span.audio-icons -->
        </div><!-- end div#audio-current -->
        <div class="clear"></div>
    </div><!-- end div#wrapper-article -->