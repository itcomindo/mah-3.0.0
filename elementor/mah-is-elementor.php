<?php
/**
 * Elementor Check
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Check Elementor
 */
function mm_mah_elementor_status() {
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	if ( is_plugin_active( 'elementor/elementor.php' ) ) {
		$status = true;
	} else {
		$status = false;
	}
	return $status;
}
