<?php
/**
 *
 * Assets
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Load style and scripts
 */
function mah_load_style_scripts() {
	wp_enqueue_style( 'mm-ah-style', MAH_URL . 'assets/css/mah.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'mm-ah-script', MAH_URL . 'assets/js/mah.js', array( 'jquery' ), '1.0.0', true );
}


/**
 * Load Admin style and scripts
 */
function mah_load_admin_style_scripts() {
	wp_enqueue_style( 'mah-admin-style', MAH_URL . 'assets/css/mah-admin.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'mah-jquery-ui-css', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'mah-jquery-ui-core', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js', array( 'jquery' ), '1.0.0', true );

	if ( true === carbon_get_theme_option( 'mah_enable_admin_tools' ) ) {
		wp_enqueue_script( 'mah-admin-script', MAH_URL . 'assets/js/mah-admin.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'mah-filter-script', MAH_URL . 'assets/js/mah-filter.js', array( 'mah-admin-script' ), '1.0.0', true );
	}
}
