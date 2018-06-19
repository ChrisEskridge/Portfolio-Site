<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChrisEskridge.com
 */

?>

<div class="outter3">
    <div class="restrictor">
        <div class="inner">
        	
            <div class="art-wrap">
            
            
            	<?php $project_query = new WP_Query(array( 'post_type' => 'Project', 'posts_per_page' => 12, 'meta_key' => 'position', 'orderby' => 'meta_value_num', 'order' => 'asc' )); ?>
                     
            	<?php if( $project_query->have_posts() ) : 
					while( $project_query->have_posts() ) : 
					$project_query->the_post(); ?>              
                          
                 	<a  href="<?php the_permalink(); ?>">
                 		
                    	<div class="art-box" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/project-test.jpg); background-size:cover;">
                		<img src="<?php the_field('thumbnail'); ?>" style="width:100%; float:left; position:relative;">
                	</div>
                        
                    </a>    
                          
                 <?php endwhile; endif; wp_reset_query(); ?>
            
            
            </div>    
            
        	<div class="content2">
            	<a href="<?php echo get_permalink(9); ?>">
            		<div class="contact-bottom" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/con-pic.jpg); background-size:cover; background-position:center">
				<div class="color">

				</div>
				<div class="footer-contact-text">
				    contact me now!
				</div>
                	</div>
                </a>
                <div class="footer-text">
                	©2016 Chris Eskridge Design. <span style="white-space:nowrap">All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript">
<!--
    function toggle_visibility(id) 
{
    var e = document.getElementById(id);
	
	
    if (e.style.display == 'none' || e.style.display=='')
    {
        e.style.display = 'inline-block';
		
		
    }
    else 
    {
        e.style.display = 'none';
    }
	
	
    
}

jQuery("#slideToggle").click(function () {
   jQuery('.slideTogglebox').slideToggle();
});




 jQuery(document).ready(function(){
  var colors = ["#13DAEF","#FFB800"];                
  var rand = Math.floor(Math.random()*colors.length);           
  jQuery('.current-menu-item a').css("border-bottom-color", colors[rand]);
  jQuery('.current-menu-item').css("background-color", colors[rand]);
  jQuery('.slider').css("background-color", colors[rand]);
  jQuery('.color').css("background-color", colors[rand]);
  jQuery('.logo a').css("background-color", colors[rand]);
  jQuery('.color-bar').css("background-color", colors[rand]);
  jQuery('.color-bar-info').css("background-color", colors[rand]);
  jQuery('.project-main').css("background-color", colors[rand]);
  jQuery('.art-box').css("background-color", colors[rand]);
  jQuery('.project-thumb').css("background-color", colors[rand]);
  jQuery('.logo a').css("display", 'table');
  
  
});









//-->
<!--</script>  



<?php wp_footer(); ?>

</body>
</html>
