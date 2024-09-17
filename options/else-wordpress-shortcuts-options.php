<?php
/**
 *
 * Else WordPress Shortcuts Options.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Else WordPress Shortcuts Options Fields.
 */
function mah_else_wordpress_shortcuts_options_fields() {
	return array(
		Field::make( 'separator', 'othergotomah', 'Else Shortcut Options' )
			->set_classes( 'mah-sep-child' ),

		// go to media.
		Field::make( 'checkbox', 'mah_goto_media', 'Shortcut to Media' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to media.' )
			->set_default_value( true ),

		// go to add media.
		Field::make( 'checkbox', 'mah_goto_add_media', 'Shortcut to Add Media' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add media.' )
			->set_default_value( true ),

		// go to comments.
		Field::make( 'checkbox', 'mah_goto_comments', 'Shortcut to Comments' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to comments.' )
			->set_default_value( false ),

		// got to plugins.
		Field::make( 'checkbox', 'mah_goto_plugins', 'Shortcut to Plugins' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to plugins.' )
			->set_default_value( false ),

		// go to add plugin.
		Field::make( 'checkbox', 'mah_goto_add_plugin', 'Shortcut to Add Plugin' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add plugin.' )
			->set_default_value( false ),

		// go to users.
		Field::make( 'checkbox', 'mah_goto_users', 'Shortcut to Users' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to users.' )
			->set_default_value( false ),

		// go to add user.
		Field::make( 'checkbox', 'mah_goto_add_user', 'Shortcut to Add User' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add user.' )
			->set_default_value( false ),

		// go to tools.
		Field::make( 'checkbox', 'mah_goto_tools', 'Shortcut to Tools' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to tools.' )
			->set_default_value( false ),

		// go to settings.
		Field::make( 'checkbox', 'mah_goto_settings', 'Shortcut to Settings' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings.' )
			->set_default_value( false ),

		// go to setting writing.
		Field::make( 'checkbox', 'mah_goto_settings_writing', 'Shortcut to Settings Writing' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings writing.' )
			->set_default_value( false ),

		// go to setting reading.
		Field::make( 'checkbox', 'mah_goto_settings_reading', 'Shortcut to Settings Reading' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings reading.' )
			->set_default_value( false ),

		// go to setting discussion.
		Field::make( 'checkbox', 'mah_goto_settings_discussion', 'Shortcut to Settings Discussion' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings discussion.' )
			->set_default_value( false ),

		// go to setting media.
		Field::make( 'checkbox', 'mah_goto_settings_media', 'Shortcut to Settings Media' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings media.' )
			->set_default_value( false ),

		// go to setting permalinks.
		Field::make( 'checkbox', 'mah_goto_settings_permalinks', 'Shortcut to Settings Permalinks' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings permalinks.' )
			->set_default_value( false ),

		// go to setting privacy.
		Field::make( 'checkbox', 'mah_goto_settings_privacy', 'Shortcut to Settings Privacy' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to settings privacy.' )
			->set_default_value( false ),

	);
}
