<?php
/**
 * Plugin Name: MM Admin Helper
 * Plugin URI: https://budiharyono.id/
 * Description: A simple plugin to help admin manage their website
 * Author: Budi Haryono
 * Author URI: https://budiharyono.id/
 * Domain Path: /languages
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Tested up to: 5.8
 * Requires PHP: 7.0
 * WC requires at least: 3.0
 * Version: 3.0.0
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

// Define Plugin Path.
define( 'MAH_PATH', plugin_dir_path( __FILE__ ) );

// Define Plugin URL.
define( 'MAH_URL', plugin_dir_url( __FILE__ ) );





/**
 * MasmonsThemeFunction
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 * @param array $html_tags_allowed Array of allowed HTML tags.
 */
function mah_mah( $html_tags_allowed = array() ) {
	if ( ! is_array( $html_tags_allowed ) ) {
		return array(); // Kembalikan array kosong jika input tidak valid.
	}
	$pass = array();

	// Definisikan atribut untuk SVG.
	$svg_args = array(
		'class'             => true,
		'aria-hidden'       => true,
		'aria-labelledby'   => true,
		'role'              => true,
		'xmlns'             => true,
		'width'             => true,
		'height'            => true,
		'viewBox'           => true,
		'version'           => true,
		'xmlns:xlink'       => true,
		'x'                 => true,
		'y'                 => true,
		'enable-background' => true,
		'xml:space'         => true,
		'metadata'          => true,
		'style'             => true,
		'viewbox'           => true,
		'path'              => true,
		'fill'              => true,
		'fill-rule'         => true,
		'clip-rule'         => true,
		'd'                 => true,
	);

	foreach ( $html_tags_allowed as $tag ) {
		$attributes = array(
			'class' => array(),
			'id'    => array(), // Tambahkan atribut id.
		);

		// Tambahkan atribut tambahan untuk tag spesifik.
		if ( 'img' === $tag ) {
			$attributes['src']    = array();
			$attributes['alt']    = array();
			$attributes['title']  = array();
			$attributes['width']  = array();
			$attributes['height'] = array();
		}

		if ( 'a' === $tag ) {
			$attributes['href']   = array();
			$attributes['target'] = array();
			$attributes['rel']    = array();
			$attributes['style']  = array();
			$attributes['class']  = array();
		}

		// Jika tag adalah SVG, gunakan atribut yang telah didefinisikan dalam $svg_args.
		if ( 'svg' === $tag ) {
			$attributes = $svg_args;
		}

		// iframe.
		if ( 'iframe' === $tag ) {
			$attributes['src']             = true;
			$attributes['width']           = true;
			$attributes['height']          = true;
			$attributes['frameborder']     = true;
			$attributes['allowfullscreen'] = true;
		}

		// Jika tag adalah div, tambahkan atribut data-xxxx dengan validasi nilai hex.
		if ( 'div' === $tag ) {
			$attributes = array_merge(
				$attributes,
				array(
					'/^data-[a-zA-Z0-9\-]*$/' => array(
						'pattern' => '/^#[a-fA-F0-9]{6}$/',
					),
				)
			);
		}

		$pass[ $tag ] = $attributes;
	}

	// Tambahkan elemen lain yang diperlukan untuk SVG.
	$pass['g']     = array( 'fill' => true );
	$pass['title'] = array( 'title' => true );
	$pass['path']  = array(
		'd'    => true,
		'fill' => true,
	);

	return $pass;
}


/**
 * Mah URL
 */
function mm_mah_url() {
	if ( ! is_user_logged_in() ) {
		return;
	}

	$user = wp_get_current_user();
	if ( ! in_array( 'administrator', (array) $user->roles, true ) ) {
		return;
	}

	$ssl      = ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] );
	$sp       = isset( $_SERVER['SERVER_PROTOCOL'] ) ? sanitize_text_field( wp_unslash( $_SERVER['SERVER_PROTOCOL'] ) ) : '';
	$protocol = '';
	if ( ! empty( $sp ) ) {
		$lower_sp = strtolower( $sp );
		$protocol = substr( $lower_sp, 0, strpos( $lower_sp, '/' ) ) . ( $ssl ? 's' : '' );
	}

	$port        = isset( $_SERVER['SERVER_PORT'] ) ? sanitize_text_field( wp_unslash( $_SERVER['SERVER_PORT'] ) ) : '';
	$port        = ( ! $ssl && '80' === $port ) || ( $ssl && '443' === $port ) ? '' : ':' . $port;
	$host        = isset( $_SERVER['HTTP_HOST'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_HOST'] ) ) : ( isset( $_SERVER['SERVER_NAME'] ) ? sanitize_text_field( wp_unslash( $_SERVER['SERVER_NAME'] ) ) : '' );
	$uri         = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
	$current_url = $protocol . '://' . $host . $port . $uri;
	$encoded_url = rawurlencode( $current_url );

	$url            = array();
	$url['current'] = $encoded_url;
	$url['global']  = $host;

	return $url;
}






/**
 * Check CF Loaded
 */
function mm_mah_load_cb_fields() {
	if ( ! class_exists( '\Carbon_Fields\Carbon_Fields' ) ) {
		require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
		\Carbon_Fields\Carbon_Fields::boot();
	} else {
		return;
	}
}

/**
 * MCS CF Loaded
 */
function mm_need_cb_fields() {
	if ( ! function_exists( 'carbon_fields_boot_plugin' ) ) {
		mm_mah_load_cb_fields();
	} else {
		return;
	}
}
add_action( 'plugins_loaded', 'mm_need_cb_fields' );

/**
 * Trigger
 */
function mm_ah_trigger() {
	echo '<div class="admin-shortcut-trigger"><span>M</span></div>';
}






/**
 * Main function
 */
function mm_ah() {
	if ( current_user_can( 'manage_options' ) && is_user_logged_in() ) {
		add_action( 'wp_body_open', 'mm_ah_trigger', 1000 );
		add_action( 'wp_body_open', 'mm_admin_helper_container', 1000 );
		add_action( 'wp_enqueue_scripts', 'mah_load_style_scripts', 1000 );
		add_action( 'wp_body_open', 'mm_mah_references', 10 );
		add_action( 'admin_enqueue_scripts', 'mah_load_admin_style_scripts', 1000 );
	}
}
add_action( 'init', 'mm_ah' );


/**
 * Visit new tab
 */
function mm_admin_bar_visit_site_new_tab() {
	if ( current_user_can( 'manage_options' ) ) {
		?>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#wp-admin-bar-site-name a').attr('target', '_blank');
			});
		</script>
		<?php
	}
}


/**
 * Show post id in admin
 *
 * @param array $columns Columns.
 */
function mm_add_id_column( $columns ) {
	$columns['mm_id'] = 'ID';
	return $columns;
}

/**
 * Fill Column
 *
 * @param string $column Column name.
 * @param int    $id ID.
 */
function mm_fill_id_column( $column, $id ) {
	if ( 'mm_id' === $column ) {
		echo esc_html( $id );
	}
}

/**
 * Fill Taxonomy ID Column
 *
 * @param string $deprecated Deprecated.
 * @param string $column_name Column name.
 * @param int    $term_id Term ID.
 *
 * @return void
 */
function mm_fill_taxonomy_id_column( $deprecated, $column_name, $term_id ) {
	if ( 'mm_id' === $column_name ) {
		echo esc_html( $term_id );
	}
}

/**
 * Make ID Column Sortable
 *
 * @param array $columns Columns.
 */
function mm_make_id_column_sortable( $columns ) {
	$columns['mm_id'] = 'mm_id';
	return $columns;
}

/**
 * Load Options
 */
function mm_mah_load_options() {
	if ( carbon_get_theme_option( 'mah_disable_admin_bar' ) ) {
		add_filter( 'show_admin_bar', '__return_false' );
	}

	if ( carbon_get_theme_option( 'mah_visit_site_new_tab' ) ) {
		add_action( 'admin_footer', 'mm_admin_bar_visit_site_new_tab' );
	}

	// mah_disable_gutenberg.
	if ( carbon_get_theme_option( 'mah_disable_gutenberg' ) ) {
		add_filter( 'use_block_editor_for_post', '__return_false' );
	}

	// mah_post_id_admin.
	if ( carbon_get_theme_option( 'mah_show_id_admin' ) ) {
		// Untuk pos dan halaman.
		add_filter( 'manage_posts_columns', 'mm_add_id_column' );
		add_action( 'manage_posts_custom_column', 'mm_fill_id_column', 10, 2 );
		add_filter( 'manage_edit-post_sortable_columns', 'mm_make_id_column_sortable' );

		add_filter( 'manage_pages_columns', 'mm_add_id_column' );
		add_action( 'manage_pages_custom_column', 'mm_fill_id_column', 10, 2 );
		add_filter( 'manage_edit-page_sortable_columns', 'mm_make_id_column_sortable' );

		// Untuk kategori dan tag.
		add_filter( 'manage_edit-category_columns', 'mm_add_id_column' );
		add_action( 'manage_category_custom_column', 'mm_fill_taxonomy_id_column', 10, 3 );
		add_filter( 'manage_edit-category_sortable_columns', 'mm_make_id_column_sortable' );

		add_filter( 'manage_edit-post_tag_columns', 'mm_add_id_column' );
		add_action( 'manage_post_tag_custom_column', 'mm_fill_taxonomy_id_column', 10, 3 );
		add_filter( 'manage_edit-post_tag_sortable_columns', 'mm_make_id_column_sortable' );
	}
}
add_action( 'init', 'mm_mah_load_options' );

require_once MAH_PATH . 'oxygen/mah-oxygen.php';
require_once MAH_PATH . 'elementor/mah-elementor.php';
require_once MAH_PATH . 'admin-tools/mah-admin-tools.php';
require_once MAH_PATH . 'assets/assets.php';
require_once MAH_PATH . 'options/options.php';
require_once MAH_PATH . 'shortcuts/shortcuts.php';
require_once MAH_PATH . 'components/components.php';
require_once MAH_PATH . 'systems/systems.php';
require_once 'mah-tools.php';
require_once 'mah-references.php';
require_once 'mah-seo-tools.php';
require_once 'mah-conditions.php';