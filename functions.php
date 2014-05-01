<?php
/**
 * TealSeagull functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 */

function tealseagull_boostrap_styles()
{
	wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, '1.0', 'all' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/carousel.css', false, '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'tealseagull_boostrap_styles' );