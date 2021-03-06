<?php
/**
 * Custom template tags for Odin.
 *
 * @package Odin
 * @since 2.2.0
 */

if ( ! function_exists( 'odin_classes_page_full' ) ) {

	/**
	 * Classes page full.
	 *
	 * @since 2.2.0
	 *
	 * @return string Classes name.
	 */
	function odin_classes_page_full() {
		return 'col-md-12';
	}
}

if ( ! function_exists( 'odin_classes_page_sidebar' ) ) {

	/**
	 * Classes page with sidebar.
	 *
	 * @since 2.2.0
	 *
	 * @return string Classes name.
	 */
	function odin_classes_page_sidebar() {
		return 'col-md-8';
	}
}

if ( ! function_exists( 'odin_classes_page_sidebar_aside' ) ) {

	/**
	 * Classes aside of page with sidebar.
	 *
	 * @since 2.2.0
	 *
	 * @return string Classes name.
	 */
	function odin_classes_page_sidebar_aside() {
		return 'widget-area col-md-4 hidden-xs';
	}
}

if ( ! function_exists( 'odin_posted_on' ) ) {

	/**
	 * Print HTML with meta information for the current post-date/time and author.
	 *
	 * @since 2.2.0
	 *
	 * @return void
	 */
	function odin_posted_on() {
		if ( is_sticky() && is_home() && ! is_paged() ) {
			echo '<span class="featured-post">' . __( 'Sticky', 'odin' ) . ' </span>';
		}

		// Set up and print post meta information.
		printf( '<span class="entry-date">%s <time class="entry-date" datetime="%s">%s</time></span> <span class="byline">%s <span class="author vcard"><a class="url fn n" href="%s" rel="author">%s</a></span>.</span>',
			__( 'Posted in', 'odin' ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			__( 'by', 'odin' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}
}

if ( ! function_exists( 'odin_paging_nav' ) ) {

	/**
	 * Print HTML with meta information for the current post-date/time and author.
	 *
	 * @since 2.2.0
	 *
	 * @return void
	 */
	function odin_paging_nav() {
		$mid  = 2;     // Total of items that will show along with the current page.
		$end  = 1;     // Total of items displayed for the last few pages.
		$show = false; // Show all items.

		echo odin_pagination( $mid, $end, false );
	}
}
if ( ! function_exists( 'brasa_noticias_pagination' ) ) {

	/**
	 * Print HTML with meta information for the current post-date/time and author.
	 *
	 * @since 2.2.0
	 *
	 * @return void
	 */
	function brasa_noticias_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo '<div class="col-md-12 clear"></div>';
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_next'          => true,
			'prev_text'          => '<',
			'next_text'          => '>',
			)
		);
	}
}
if ( ! function_exists( 'brasa_download_link' ) ) {

	function brasa_download_link($id, $class, $text) {
		$download = new DLM_Download($id);
		echo sprintf('<a class="%s" href="%s">%s</a>',$class,$download->get_the_download_link(),$text);
	}
}
if ( ! function_exists( 'brasa_resumo' ) ) {

	function brasa_resumo($texto, $limite){
		$texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . ' [...]';
		return wp_strip_all_tags($texto,true);
	}

}
if ( ! function_exists( 'get_membros_query_args' ) ) {

	function get_membros_query_args( $is_map = false ){
		$args = array();
		if(isset($_GET['type_pin']) && !empty($_GET['type_pin'])){
			$args['type_pin'] = $_GET['type_pin'];
		}
		if(isset($_GET['filter_type']) && !empty($_GET['filter_type'])){
			$args['filter_type'] = $_GET['filter_type'];
		}
		if(isset($_GET['state']) && !empty($_GET['state'])){
			$args['state'] = $_GET['state'];
		}
		if(isset($_GET['user_category']) && !empty($_GET['user_category'])){
			$args['user_category'] = $_GET['user_category'];
		}
		if($is_map){
			if(isset($_GET['filter_type']) && !empty($_GET['filter_type'])){
				$args['filter_type'] = array($_GET['filter_type']);
			}
		}
		return $args;
	}

}
if ( ! function_exists( 'get_projetos_link' ) ) {

	function get_projetos_link(  ){
		$args = array();
		if(isset($_GET['state']) && !empty($_GET['state'])){
			$args['state'] = $_GET['state'];
		}
		if(isset($_GET['by_type']) && !empty($_GET['by_type'])){
			$args['by_type'] = $_GET['by_type'];
		}
		if(isset($_GET['projetos_category']) && !empty($_GET['projetos_category'])){
			$args['projetos_category'] = $_GET['projetos_category'];
		}

		return $args;
	}

}

function brasa_get_resumo($text, $max){
	$text = apply_filters('the_content', $text);
	$text = wp_strip_all_tags( $text, true);
    $text = substr($text, 0, strrpos(substr($text, 0, $max), ' ')) . '...';
    return $texto;
}

