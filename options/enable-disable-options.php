<?php
/**
 *
 * Enable Disable Options.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 *  Enable Disable Options.
 */
function mah_enable_disable_fields() {
	return array(

		Field::make( 'separator', 'endis_mah_sep', 'Enable and Disable Options' )
			->set_classes( 'mah-sep endismah-p' ),

		// Disable auto update for core.
		Field::make( 'checkbox', 'mah_disable_auto_update_core', 'Disable Auto Update Core' )
		->set_classes( 'endismah-c' )
		->set_width( 25 )
		->set_option_value( 'yes' )
		->set_help_text( 'Check this box to disable auto update for core.' )
		->set_default_value( false ),

		// Enable Disable Admin Bar.
		Field::make( 'checkbox', 'mah_disable_admin_bar', 'Disable Admin Bar' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to disable admin bar in front end.' )
			->set_default_value( true ),

		// checkbox disable gutenberg.
		Field::make( 'checkbox', 'mah_disable_gutenberg', 'Disable Gutenberg' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to disable gutenberg editor.' )
			->set_default_value( true ),

		// Enable button to clear all spam comments.
		Field::make( 'checkbox', 'mah_enable_clear_spam_comments', 'Enable Clear Spam Comments' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable button to clear all spam comments.' )
			->set_default_value( false ),

		// Enable Admin Tools.
		Field::make( 'checkbox', 'mah_enable_admin_tools', 'Enable Admin Tools' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable admin tools.' )
			->set_default_value( true ),

		// checkbox enable visit site open new tab.
		Field::make( 'checkbox', 'mah_visit_site_new_tab', 'Enable Visit Site Open New Tab' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to open visit site link in new tab.' )
			->set_default_value( true ),

		// checkbox enable post id in admin.
		Field::make( 'checkbox', 'mah_show_id_admin', 'Enable Show ID' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to show id in post, page, category and tag.' )
			->set_default_value( false ),

		// checkbox to enable check index.
		Field::make( 'checkbox', 'mah_check_index', 'Enable Button Google Check Index' )
			->set_width( 100 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to check index  Google indexed or not indexed of your url.' )
			->set_default_value( false ),

		// element class contain url to post to check index.
		Field::make( 'text', 'mah_element_class_to_check', 'Element Class to Check' )
			->set_width( 100 )
			->set_help_text( 'class element yang berisi url untuk di cek index.' )
			->set_conditional_logic(
				array(
					array(
						'field' => 'mah_check_index',
						'value' => true,
					),
				)
			),

	);
}
