<?php
/**
 *
 * WordPress Shortcuts Options.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * WordPress Shortcuts Options Fields.
 */
function mah_wordpress_shortcuts_fields() {

	$check_menus = mah_check_menus();

	return array(
		Field::make( 'separator', 'wpscmah', 'Wordpress Shortcuts Options' )
		->set_classes( 'mah-sep' ),

		// go to dashboard.
		Field::make( 'checkbox', 'mah_goto_dashboard', 'Shortcut to Dashboard' )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to dashboard.' )
			->set_default_value( true ),

		Field::make( 'separator', 'posgotomah', 'Post and Page shortcuts' )
			->set_classes( 'mah-sep-child' ),

		// go to all posts.
		Field::make( 'checkbox', 'mah_goto_all_posts', 'Shortcut to All Posts' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all posts.' )
			->set_default_value( true ),

		// go to add new post.
		Field::make( 'checkbox', 'mah_goto_add_new_post', 'Shortcut to Add New Post' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add new post.' )
			->set_default_value( true ),

		// go to all categories.
		Field::make( 'checkbox', 'mah_goto_all_categories', 'Shortcut to All Categories' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all categories.' )
			->set_default_value( true ),

		// go to all tags.
		Field::make( 'checkbox', 'mah_goto_all_tags', 'Shortcut to All Tags' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all tags.' )
			->set_default_value( true ),

		// go to pages.
		Field::make( 'checkbox', 'mah_goto_all_pages', 'Shortcut to All Pages' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all pages.' )
			->set_default_value( true ),

		// go to add new page.
		Field::make( 'checkbox', 'mah_goto_add_new_page', 'Shortcut to Add New Page' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add new page.' )
			->set_default_value( true ),

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
			->set_default_value( true ),

		// go to appearance.
		Field::make( 'checkbox', 'mah_goto_appearance', 'Shortcut to Appearance' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to appearance.' )
			->set_default_value( true ),

	);
}



/**
 *  Check wheater add_support menus loaded or not.
 */
function mah_check_menus() {
	if ( ! function_exists( 'add_theme_support' ) ) {
		return false;
	}
	return true;
}
