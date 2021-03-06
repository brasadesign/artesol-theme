<?php
/**
 * Odin optimize functions.
 */

/**
 * Generates the title of the site optimized for SEO.
 */
function odin_wp_title( $title, $sep ) {
	global $page, $paged, $wp_query;

	if ( is_feed() ) {
		return $title;
	}

	// Add the blog name.
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= ' ' . $sep . ' ' . $site_description;
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= ' ' . $sep . ' ' . sprintf( __( 'Page %s', 'odin' ), max( $paged, $page ) );
	}

	if( isset($wp_query->query_vars['membros']) && !empty($wp_query->query_vars['membros'])){
		$title .= ' ' . $sep . ' ' . $wp_query->query_vars['membros'];
    }

	return $title;
}

add_filter( 'wp_title', 'odin_wp_title', 10, 2 );

/**
 * Cleanup wp_head().
 */
function odin_head_cleanup() {
	// Category feeds.
	// remove_action( 'wp_head', 'feed_links_extra', 3 );

	// Post and comment feeds.
	// remove_action( 'wp_head', 'feed_links', 2 );

	// EditURI link.
	remove_action( 'wp_head', 'rsd_link' );

	// Windows live writer.
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// Index link.
	remove_action( 'wp_head', 'index_rel_link' );

	// Previous link.
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

	// Start link.
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

	// Links for adjacent posts.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

	// WP version.
	remove_action( 'wp_head', 'wp_generator' );
}

add_action( 'init', 'odin_head_cleanup' );

/**
 * Remove WP version from RSS.
 */
add_filter( 'the_generator', '__return_false' );

/**
 * Remove injected CSS for recent comments widget.
 */
function odin_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

add_filter( 'wp_head', 'odin_remove_wp_widget_recent_comments_style', 1);

/**
 * Remove injected CSS from recent comments widget.
 */
function odin_remove_recent_comments_style() {
	global $wp_widget_factory;

	if ( isset( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	}
}

add_action( 'wp_head', 'odin_remove_recent_comments_style', 1 );

/**
 * Remove injected CSS from gallery.
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Add rel="nofollow" and remove rel="category".
 */
function odin_modify_category_rel( $text ) {
	$search = array( 'rel="category"', 'rel="category tag"' );
	$text = str_replace( $search, 'rel="nofollow"', $text );

	return $text;
}

add_filter( 'wp_list_categories', 'odin_modify_category_rel' );
add_filter( 'the_category', 'odin_modify_category_rel' );

/**
 * Add rel="nofollow" and remove rel="tag".
 */
function odin_modify_tag_rel( $taglink ) {
	return str_replace( 'rel="tag">', 'rel="nofollow">', $taglink );
}

add_filter( 'wp_tag_cloud', 'odin_modify_tag_rel' );
add_filter( 'the_tags', 'odin_modify_tag_rel' );

/**
 * Add body class
 */

function odin_new_body_class($classes) {
	global $wp_query;

	if( isset($wp_query->query_vars['membros']) ){
		$classes[] = 'single-membros';
    }

    return $classes;
}
add_filter('body_class', 'odin_new_body_class');

/**
 * Pre Get Posts
 */

function brasa_pre_get_posts($query) {
	if( is_post_type_archive('projetos') && $query->is_main_query() ) {
		if ( isset( $_GET['state'] ) && !empty( $_GET['state'] ) ) {
			$query->set( 'membros_state', $_GET['state'] );
		}
		if ( isset( $_GET['by_type'] ) && !empty( $_GET['by_type'] ) ) {
			$query->set( 'tipos', $_GET['by_type'] );
		}
		if ( isset( $_GET['projetos_category'] ) && !empty( $_GET['projetos_category'] ) ) {
			$query->set( 'membros_category', $_GET['projetos_category'] );
		}
    }
}
add_action( 'pre_get_posts', 'brasa_pre_get_posts' );
