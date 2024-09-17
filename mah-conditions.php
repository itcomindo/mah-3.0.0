<?php
/**
 * Conditions
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Check Index
 */
function mm_mah_enable_check_index() {
	$mah_check_index = carbon_get_theme_option( 'mah_check_index' );
	if ( true === $mah_check_index ) {
		echo '<div class="mah-check-index" data-element="' . esc_html( carbon_get_theme_option( 'mah_element_class_to_check' ) ) . '" style="display:none;"></div>';
	}
}
add_action( 'wp_footer', 'mm_mah_enable_check_index' );
