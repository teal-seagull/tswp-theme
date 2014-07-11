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

// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'tealseagull', TEMPLATEPATH . '/languages' );
	
	add_theme_support( 'menus' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable($locale_file) )
	    require_once($locale_file);

	// Get the page number
	function get_page_number() {
	    if ( get_query_var('paged') ) {
	        print ' | ' . __( 'Page ' , 'tealseagull') . get_query_var('paged');
	    }
	} // end get_page_number

	// Custom callback to list comments in the tealseagull style
	function custom_comments($comment, $args, $depth) {
	  $GLOBALS['comment'] = $comment;
	    $GLOBALS['comment_depth'] = $depth;
	  ?>
	    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	        <div class="comment-author vcard"><?php commenter_link() ?></div>
	        <div class="comment-meta"><?php printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'tealseagull'),
	                    get_comment_date(),
	                    get_comment_time(),
	                    '#comment-' . get_comment_ID() );
	                    edit_comment_link(__('Edit', 'tealseagull'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
	  <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'tealseagull') ?>
	          <div class="comment-content">
	            <?php comment_text() ?>
	        </div>
	        <?php // echo the comment reply link
	            if($args['type'] == 'all' || get_comment_type() == 'comment') :
	                comment_reply_link(array_merge($args, array(
	                    'reply_text' => __('Reply','tealseagull'),
	                    'login_text' => __('Log in to reply.','tealseagull'),
	                    'depth' => $depth,
	                    'before' => '<div class="comment-reply-link">',
	                    'after' => '</div>'
	                )));
	            endif;
	        ?>
	<?php } // end custom_comments
	
	// Custom callback to list pings
	function custom_pings($comment, $args, $depth) {
	       $GLOBALS['comment'] = $comment;
	        ?>
	            <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	                <div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'tealseagull'),
	                        get_comment_author_link(),
	                        get_comment_date(),
	                        get_comment_time() );
	                        edit_comment_link(__('Edit', 'tealseagull'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
	    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'tealseagull') ?>
	            <div class="comment-content">
	                <?php comment_text() ?>
	            </div>
	<?php } // end custom_pings
	
	
	// For category lists on category archives: Returns other categories except the current one (redundant)
	function cats_meow($glue) {
	    $current_cat = single_cat_title( '', false );
	    $separator = "\n";
	    $cats = explode( $separator, get_the_category_list($separator) );
	    foreach ( $cats as $i => $str ) {
	        if ( strstr( $str, ">$current_cat<" ) ) {
	            unset($cats[$i]);
	            break;
	        }
	    }
	    if ( empty($cats) )
	        return false;

	    return trim(join( $glue, $cats ));
	} // end cats_meow
	
	// For tag lists on tag archives: Returns other tags except the current one (redundant)
	function tag_ur_it($glue) {
	    $current_tag = single_tag_title( '', '',  false );
	    $separator = "\n";
	    $tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
	    foreach ( $tags as $i => $str ) {
	        if ( strstr( $str, ">$current_tag<" ) ) {
	            unset($tags[$i]);
	            break;
	        }
	    }
	    if ( empty($tags) )
	        return false;

	    return trim(join( $glue, $tags ));
	} // end tag_ur_it
	
	// Register widgetized areas
	function theme_widgets_init() {
	    // Area 1
	    register_sidebar( array (
	    'name' => 'Primary Widget Area',
	    'id' => 'primary_widget_area',
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => "</li>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );

	    // Area 2
	    register_sidebar( array (
	    'name' => 'Secondary Widget Area',
	    'id' => 'secondary_widget_area',
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => "</li>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );
	} // end theme_widgets_init

	add_action( 'init', 'theme_widgets_init' );
	
	$preset_widgets = array (
	    'primary_widget_area'  => array( 'search', 'pages', 'categories', 'archives' ),
	    'secondary_widget_area'  => array( 'links', 'meta' )
	);
	if ( isset( $_GET['activated'] ) ) {
	    update_option( 'sidebars_widgets', $preset_widgets );
	}
	// update_option( 'sidebars_widgets', NULL );
	
	// Check for static widgets in widget-ready areas
	function is_sidebar_active( $index ){
	  global $wp_registered_sidebars;

	  $widgetcolums = wp_get_sidebars_widgets();

	  if ($widgetcolums[$index]) return true;

	    return false;
	} // end is_sidebar_active