<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage tealseagull
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	Title: <?php the_title(); ?>
	Content:
	the_excerpt: <?php the_excerpt(); ?>
	Continue: <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tealseagull' ) ); ?>
	Author: <?php the_author(); ?>
</article><!-- #post -->
