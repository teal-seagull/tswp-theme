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
	<header class="entry-header">
		<div class="entry-meta entry-time">
			<span class="entry-time-day"><?php the_time('j') ?></span>
			<span class="entry-time-month"><?php the_time('M') ?></span>
			<span class="entry-format-icon"></span>
		</div>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tealseagull' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>		
	</header><!-- .entry-header -->

	<?php if ( is_home() || is_search() || is_archive() ) : // Only display Excerpts for Homepage and Search ?>

		<div class="entry-summary">
			
			<?php if ( get_post_format() ) : ?>

				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tealseagull' ) ); ?>
						
  			<?php else : ?>
  			
  				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<?php tealseagull_excerpt(40); ?>
				
			<?php endif; // End if get_post_format() ?>

		</div><!-- .entry-summary -->

	<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tealseagull' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'tealseagull' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'tealseagull' ) );
				 if ( $categories_list && tealseagull_categorized_blog() ) :
			?>
			<span class="cat-links">
				<span class="icon-font icon-category-alt"></span>
				<?php printf( __( '%1$s', 'tealseagull' ), $categories_list ); ?>
			</span>
			<?php  endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'tealseagull' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"></span>
			<span class="tags-links">
				<span class="icon-font icon-tag-alt"></span>
				<?php printf( __( '%1$s', 'tealseagull' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"></span>
		<span class="comments-link">
			<?php comments_popup_link( __( '<span class="icon-font icon-comment-alt"></span> Leave a comment', 'tealseagull' ), __( '<span class="icon-font icon-comment"></span> 1 Comment', 'tealseagull' ), __( '<span class="icon-font icon-comments-alt"></span> % Comments', 'tealseagull' ) ); ?>
		</span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'tealseagull' ), '<span class="sep"></span><span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->



