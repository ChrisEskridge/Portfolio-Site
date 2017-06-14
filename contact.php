<?php
/**
Template Name: Contact
**/

get_header(); ?>

	<div class="outter2">
        <div class="restrictor">
        	<div class="inner">
            	<div class="about">
                	<div class="dark">
                        <div class="contact-white">
                            <div class="headline">
                                THIS IS A HEADLINE
                            </div>
                            <div class="color-bar">
                            </div>
                            <div class="copy">
                                lorem ipsum dolor sit amet, consectetur adipiscing elit. donec consequat ultricies dictum. nam sit amet diam quis augue sodales bibendum. donec tempus ligula in tortor commodo posuere. nam interdum dictum urna et sagittis. duis turpis ipsum, imperdiet et sodales eget, malesuada ac arcu. donec sed mauris libero.
                            </div>
                        </div>
                        <div class="contact-clear">
                        	<?php echo do_shortcode('[ninja_forms id=1]'); ?>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
	
<?php
get_footer();
