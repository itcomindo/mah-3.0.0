<?php
/**
 *
 * Other Options.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

use Carbon_Fields\Container;
use Carbon_Fields\Field;
/**
 *  Other Options.
 */
function mah_other_options_fields() {
	return array(

		Field::make( 'separator', 'mah_other_options', 'Other Options' )
			->set_classes( 'mah-sep' ),

		// Change WP Login Logo.
		Field::make( 'image', 'mah_wp_login_logo', 'Change WP Login Logo' )
			->set_width( 100 )
			->set_value_type( 'url' )
			->set_help_text( 'Upload your custom logo for WP Login.' ),

		// Remove shortlink.
		Field::make( 'checkbox', 'mah_remove_shortlink', 'Remove Shortlink' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove shortlink.' )
			->set_default_value( false ),

		// Remove wlwmanifest.
		Field::make( 'checkbox', 'mah_remove_wlwmanifest', 'Remove wlwmanifest' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove wlwmanifest.' )
			->set_default_value( false ),

		// Remove RSD Link.
		Field::make( 'checkbox', 'mah_remove_rsd_link', 'Remove RSD Link' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove RSD Link.' )
			->set_default_value( false ),

		// Remove WP Generator.
		Field::make( 'checkbox', 'mah_remove_wp_generator', 'Remove WP Generator' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove WP Generator.' )
			->set_default_value( false ),

		// Remove WP Emoji.
		Field::make( 'checkbox', 'mah_remove_wp_emoji', 'Remove WP Emoji' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove WP Emoji.' )
			->set_default_value( false ),

		// Remove WP Embed.
		Field::make( 'checkbox', 'mah_remove_wp_embed', 'Remove WP Embed' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove WP Embed.' )
			->set_default_value( false ),

		// Remove Welcome Panel.
		Field::make( 'checkbox', 'mah_remove_welcome_panel', 'Remove Welcome Panel' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove Welcome Panel.' )
			->set_default_value( false ),

		// Remove Site Health.
		Field::make( 'checkbox', 'mah_remove_site_health', 'Remove Site Health' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove Site Health.' )
			->set_default_value( false ),

		// Remove at a Glance.
		Field::make( 'checkbox', 'mah_remove_at_a_glance', 'Remove At a Glance' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove At a Glance.' )
			->set_default_value( false ),

		// Remove Activity.
		Field::make( 'checkbox', 'mah_remove_activity', 'Remove Activity' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove Activity.' )
			->set_default_value( false ),

		// Remove forgot password.
		Field::make( 'checkbox', 'mah_remove_forgot_password', 'Remove Forgot Password' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to remove forgot password.' )
			->set_default_value( false ),

		// Disable XML-RPC.
		Field::make( 'checkbox', 'mah_disable_xml_rpc', 'Disable XML-RPC' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to disable XML-RPC.' )
			->set_default_value( false ),

		// Header Scripts.
		Field::make( 'header_scripts', 'mah_header_scripts', 'Header Scripts' )
			->set_width( 100 )
			->set_help_text( 'Add your custom header scripts. e.g for Google analytics, GTM, Facebook Pixels, Google Adsense. Code will place at your head. Tracking code will placed at head.' ),

		// Footer Scripts.
		Field::make( 'footer_scripts', 'mah_footer_scripts', 'Footer Scripts' )
			->set_width( 100 )
			->set_help_text( 'Add your custom footer scripts. e.g for Google analytics, GTM, Facebook Pixels, Google Adsense. Code will place at your footer. Tracking code will placed at very bottom your body open.' ),

	);
}
