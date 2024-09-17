<?php
/**
 * Silence is golden
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );


require_once 'mah-is-elementor.php';
require_once 'mah-elementor-options.php';


/**
 * Hide Page Title
 *
 * @param string $post_title Post Title.
 * @return string
 */
function mm_hide_title_all_pages( $post_title ) {
	if ( ( is_front_page() || is_home() || is_archive() || is_page() || is_singular() ) && in_the_loop() ) {
		return '';
	}
	return $post_title;
}

/**
 * Elementor Condition
 */
function mah_elementor_condition() {
	if ( carbon_get_theme_option( 'mahel_disable_default_page_title' ) ) {
		add_filter( 'the_title', 'mm_hide_title_all_pages' );
	}
}
add_action( 'wp', 'mah_elementor_condition' );


/**
 * Disable Default Header
 */
function mahel_disable_default_header() {
	if ( carbon_get_theme_option( 'mahel_disable_default_header' ) ) {
		add_action( 'wp_head', 'mahel_add_custom_css' );
	}
}

/**
 * Add Custom CSS
 */
function mahel_add_custom_css() {
	$custom_css = '#site-header { display: none !important; }';
	wp_add_inline_style( 'hello-elementor', $custom_css );
}
add_action( 'init', 'mahel_disable_default_header' );
