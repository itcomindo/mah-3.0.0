<?php
/**
 *
 * Systems.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );


/**
 * Load Mah systems.
 */
function mah_load_wp_core_systems() {
	// Remove Shortlink.
	mah_rem_shortlink();

	// Remove wlwmanifest.
	mah_rem_wlwmanifest();

	// Remove RSD Link.
	mah_rem_rsd_link();

	// Remove WP Generator.
	mah_rem_wp_generator();

	// Remove WP Emoji.
	mah_rem_wp_emoji();

	// Remove WP Embed.
	mah_rem_wp_embed();

	// Remove Welcome Panel.
	mah_rem_welcome_panel();

	// Remove Site Health.
	mah_rem_site_health();

	// Remove At a Glance.
	mah_rem_at_a_glance();

	// Remove Activity.
	mah_rem_activity();

	// Disable XML-RPC.
	mah_disable_xml_rpc();
}
add_action( 'init', 'mah_load_wp_core_systems' );


/**
 *  Remove Shortlink.
 */
function mah_rem_shortlink() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_shortlink' ) ) {
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
	}
}

/**
 *  Remove wlwmanifest.
 */
function mah_rem_wlwmanifest() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_wlwmanifest' ) ) {
		remove_action( 'wp_head', 'wlwmanifest_link' );
	}
}


/**
 *  Remove RSD Link.
 */
function mah_rem_rsd_link() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_rsd_link' ) ) {
		remove_action( 'wp_head', 'rsd_link' );
	}
}

/**
 *  Remove WP Generator.
 */
function mah_rem_wp_generator() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_wp_generator' ) ) {
		remove_action( 'wp_head', 'wp_generator' );
	}
}

/**
 *  Remove WP Emoji.
 */
function mah_rem_wp_emoji() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_wp_emoji' ) ) {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}

/**
 *  Remove WP Embed.
 */
function mah_rem_wp_embed() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_wp_embed' ) ) {
		remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	}
}

/**
 *  Remove Welcome Panel.
 */
function mah_rem_welcome_panel() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_welcome_panel' ) ) {
		remove_action( 'welcome_panel', 'wp_welcome_panel' );
	}
}


/**
 *  Remove Site Health.
 */
function mah_rem_site_health() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_site_health' ) ) {
		remove_action( 'admin_menu', 'wp_site_health_menu' );
	}
}

/**
 *  Remove At a Glance.
 */
function mah_rem_at_a_glance() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_at_a_glance' ) ) {
		remove_action( 'dashboard_glance_items', 'wp_dashboard_right_now' );
	}
}

/**
 * Remove Activity.
 */
function mah_rem_activity() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_remove_activity' ) ) {
		remove_action( 'admin_menu', 'wp_activity_menu' );
	}
}


/**
 * Mah_disable_xml_rpc.
 */
function mah_disable_xml_rpc() {
	if ( function_exists( 'carbon_get_theme_option' ) && carbon_get_theme_option( 'mah_disable_xml_rpc' ) ) {
		add_filter( 'xmlrpc_enabled', '__return_false' );
	}
}
