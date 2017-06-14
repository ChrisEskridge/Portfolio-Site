
<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ChrisEskridge.com
 */

get_header(); ?>
	<div class="outter2">
        <div class="restrictor">
        	<div class="inner">
            	<div class="project-main">
                	<div id="info" class="project-main-info">
                    	<div class="info-restrictor">
                    		<div class="headline-info">
                                THIS IS A HEADLINE
                            </div>
                            <div class="color-bar-info">
                            </div>
                            <div class="copy-info">
                                lorem ipsum dolor sit amet, consectetur adipiscing elit. donec consequat ultricies dictum. nam sit amet diam quis augue sodales bibendum. donec tempus ligula in tortor commodo posuere. nam interdum dictum urna et sagittis. duis turpis ipsum, imperdiet et sodales eget, malesuada ac arcu. donec sed mauris libero.
                            </div>
                        </div>
                    </div>
                    <div id="toggle" class="project-main-info-toggle" >
                    	<div class="project-main-info-toggle-triangle">
                        </div>
                        <div class="info-box">
                        	info
                        </div>
                    </div>
                    <?php if( have_rows('gallery') ): ?>
					<?php while( have_rows('gallery') ): the_row(); 
                    // vars
                    $thumb = get_sub_field('thumb');
                    $image = get_sub_field('image');
                    $number_b = 1;
                    ?>
                    <div class="project-image b<?php echo ++$nuber_b; ?>" style=" background-image:url(<?php echo $image; ?>); background-size:cover; background-position:center;">
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
                <?php if( have_rows ('gallery') ):
				// vars
                    $rows = get_field('gallery');
					$count = count($rows);
				?>
				<?php if( $count <=1): ?>
                
                <?php else: ?>
                <div class="scroller-color">
                </div>
                <div class="scroller">
                    <div class="project-gallery">
                        <?php while( have_rows('gallery') ): the_row(); 
                        // vars
                        $thumb = get_sub_field('thumb');
                        $image = get_sub_field('image');
                        $number = 1;
                        ?>
                        <div class="project-thumb a<?php echo ++$nuber; ?>" style=" background-image:url(<?php echo $image; ?>); background-size:cover; background-position:center;">
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php  endif; ?>
                <?php endif; ?>
            </div>
    	</div>
    </div>


<script type="text/javascript">


jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).one('mouseout', function(e){
						jQuery('.project-main-info-toggle').on("mouseenter", function (e){
							if(jQuery(this).hasClass('clickactive')){
								jQuery(this).removeClass('clickactive');
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
								jQuery(this).parent().find('.project-main-info', this).stop(true).slideDown();
								
							}
							else{
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
								jQuery(this).parent().find('.project-main-info', this).stop(true).slideDown();
							}
							
						});
						jQuery('.project-main-info-toggle').on("mouseleave", function (e){
							
								jQuery(this).removeClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideUp();
								jQuery(this).parent().find('.project-main-info', this).stop(true).slideUp();
								//jQuery(this).off('mouseout');
						});
								
						
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('mouseenter');
				jQuery(this).off('mouseleave');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseout');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});

		jQuery('.project-main-info-toggle').on("mouseenter", function (e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
				jQuery(this).parent().find('.project-main-info', this).stop(true).slideDown();
				
			}
			else{
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
				jQuery(this).parent().find('.project-main-info', this).stop(true).slideDown();
			}
			
		});
		jQuery('.project-main-info-toggle').on("mouseleave", function (e){
			
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).parent().find('.project-main-info', this).stop(true).slideUp();
			
		});
});

</script>
<!--
slide down on leave sometimes



jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).on('mouseout', function(e){
						jQuery('.project-main-info-toggle').on("hover", function (e){
								if(jQuery(this).hasClass('hoveractive')){
									jQuery(this).removeClass('hoveractive');
									jQuery(this).parent().find('.project-main-info').slideUp();
								} 
								else {
									jQuery(this).addClass('hoveractive');
									jQuery(this).parent().find('.project-main-info').slideDown();
								}
								jQuery(this).off('mouseout');
						});
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('hover');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseout');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});
});

	
jQuery(document).ready(function handle(){
		jQuery('.project-main-info-toggle').on("hover", function (e){
			if(jQuery(this).hasClass('hoveractive')){
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
			} 
			else {
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});
});






=========================
** closest ( mouseleave doesnt shut off sometimes)**



jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).on('mouseout', function(e){
						jQuery('.project-main-info-toggle').on("mouseenter", function (e){
			
							jQuery(this).addClass('hoveractive');
							jQuery(this).parent().find('.project-main-info').slideDown();
					
						});
						jQuery('.project-main-info-toggle').on("mouseleave", function (e){
							
								jQuery(this).removeClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideUp();
								jQuery(this).off('mouseout');
						});
								
						
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('mouseenter');
				jQuery(this).off('mouseleave');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseout');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});
});

	
jQuery(document).ready(function handle(){
		jQuery('.project-main-info-toggle').on("mouseenter", function (e){
			
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			
		});
		jQuery('.project-main-info-toggle').on("mouseleave", function (e){
			
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
			
		});
});





=======================

** tweak









jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).on('mouseout', function(e){
						jQuery('.project-main-info-toggle').on("mouseenter", function (e){
							if(jQuery(this).hasClass('clickactive')){
								jQuery(this).removeClass('clickactive');
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
								
							}
							else{
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
							}
							
						});
						jQuery('.project-main-info-toggle').on("mouseleave", function (e){
							
								jQuery(this).removeClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideUp();
								jQuery(this).off('mouseout');
						});
								
						
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('mouseenter');
				jQuery(this).off('mouseleave');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseout');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});

		
		jQuery('.project-main-info-toggle').on("mouseenter", function (e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
				
			}
			else{
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			
		});
		jQuery('.project-main-info-toggle').on("mouseleave", function (e){
			
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
			
		});
});



=======================

*****works?





jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).one('mouseout', function(e){
						jQuery('.project-main-info-toggle').on("mouseenter", function (e){
							if(jQuery(this).hasClass('clickactive')){
								jQuery(this).removeClass('clickactive');
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
								
							}
							else{
								jQuery(this).addClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideDown();
							}
							
						});
						jQuery('.project-main-info-toggle').on("mouseleave", function (e){
							
								jQuery(this).removeClass('hoveractive');
								jQuery(this).parent().find('.project-main-info').slideUp();
								jQuery(this).off('mouseout');
						});
								
						
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('mouseenter');
				jQuery(this).off('mouseleave');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseout');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});

		
		jQuery('.project-main-info-toggle').on("mouseenter", function (e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
				
			}
			else{
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			
		});
		jQuery('.project-main-info-toggle').on("mouseleave", function (e){
			
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
			
		});
});






=======================

hover doesnt work on mouse leave




jQuery(document).ready(function(){
		jQuery('.project-main-info-toggle').on("click", function(e){
			if(jQuery(this).hasClass('clickactive')){
				jQuery(this).removeClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideUp();
				jQuery(this).on('mouseleave', function(e){
						jQuery('.project-main-info-toggle').on("hover", function (e){
								if(jQuery(this).hasClass('hoveractive')){
									jQuery(this).removeClass('hoveractive');
									jQuery(this).parent().find('.project-main-info').slideUp();
								} 
								else {
									jQuery(this).addClass('hoveractive');
									jQuery(this).parent().find('.project-main-info').slideDown();
									jQuery(this).on('mouseleave', function(e){
										jQuery(this).removeClass('hoveractive');
										jQuery(this).parent().find('.project-main-info').slideUp();
									});
								}
								jQuery(this).off('mouseleave');
						});
				});
					
			} else if(jQuery(this).hasClass('hoveractive')) {
				jQuery(this).removeClass('hoveractive');
				jQuery(this).addClass('clickactive');
				jQuery(this).off('hover');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
			else {
				jQuery(this).off('mouseleave');
				jQuery(this).addClass('clickactive');
				jQuery(this).parent().find('.project-main-info').slideDown();
			}
		});
});

	
jQuery(document).ready(function handle(){
		jQuery('.project-main-info-toggle').on("hover", function (e){
			if(jQuery(this).hasClass('hoveractive')){
				jQuery(this).removeClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideUp();
			} 
			else {
				jQuery(this).addClass('hoveractive');
				jQuery(this).parent().find('.project-main-info').slideDown();
				jQuery(this).on('mouseleave', function(e){
					jQuery(this).removeClass('hoveractive');
					jQuery(this).parent().find('.project-main-info').slideUp();
				});
			}
		});
});

-->


<script type="text/javascript">

	jQuery(document).ready(function handle(){
		jQuery('.a1').on("click", function (e){
			jQuery(this).parent().parent().parent().find('.project-image').hide();
			jQuery(this).parent().find('.active2').removeClass('active2');
			jQuery(this).addClass('active2');
			jQuery(this).parent().parent().parent().find('.b1').show();
		});
	});
	
	jQuery(document).ready(function handle(){
		jQuery('.a2').on("click", function (e){
			jQuery(this).parent().parent().parent().find('.project-image').hide();
			jQuery(this).parent().find('.active2').removeClass('active2');
			jQuery(this).addClass('active2');
			jQuery(this).parent().parent().parent().find('.b2').show();
		});
	});
	
	jQuery(document).ready(function handle(){
		jQuery('.a3').on("click", function (e){
			jQuery(this).parent().parent().parent().find('.project-image').hide();
			jQuery(this).parent().find('.active2').removeClass('active2');
			jQuery(this).addClass('active2');
			jQuery(this).parent().parent().parent().find('.b3').show();
		});
	});
	
	jQuery(document).ready(function handle(){
		jQuery('.a4').on("click", function (e){
			jQuery(this).parent().parent().parent().find('.project-image').hide();
			jQuery(this).parent().find('.active2').removeClass('active2');
			jQuery(this).addClass('active2');
			jQuery(this).parent().parent().parent().find('.b4').show();
		});
	});

	jQuery(document).ready(function handle(){
		jQuery('.a5').on("click", function (e){
			jQuery(this).parent().parent().parent().find('.project-image').hide();
			jQuery(this).parent().find('.active2').removeClass('active2');
			jQuery(this).addClass('active2');
			jQuery(this).parent().parent().parent().find('.b5').show();
		});
	});

</script>


<?php
get_footer();







