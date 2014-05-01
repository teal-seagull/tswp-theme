<?php
/*
Template Name: Blog Template
*/
get_header(); ?>
		
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
		
<?php get_footer(); ?>
