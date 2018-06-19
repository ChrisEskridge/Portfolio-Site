<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChrisEskridge.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body class="body">
<div class="outter1">
    <div class="restrictor">
        <div class="inner">
        	<div class="content">
            	<div class="header">
                	<div class="logo">
                    	<a href="<?php echo get_permalink(4); ?>">
                    	    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" style="width:100%; float:left; position:relative;">
                    	</a>
                    </div>
                    
                    <div id='slideToggle' class="nav" style="cursor:pointer">
                        <img src="<?php bloginfo('template_directory'); ?>/images/nav-small.png" style="width:100%; float:right; position:relative; padding:5px 0px 7px 12px;">
                    </div>
                    
                    
                </div>
                <div id="hidden" class="hidden slideTogglebox">
                	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
                <div id="hidden" class="hidden2">
                	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
            </div>
        </div>
    </div>
</div>







