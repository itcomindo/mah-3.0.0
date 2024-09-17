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

	$fields = array(

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

		// go to edit post.
		Field::make( 'checkbox', 'mah_goto_edit_post', 'Shortcut to Edit Post or Page' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to edit post or Page.' )
			->set_default_value( true ),

		// go to all categories.
		Field::make( 'checkbox', 'mah_goto_all_categories', 'Shortcut to All Categories' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all categories.' )
			->set_default_value( true ),

		// go to add new category.
		Field::make( 'checkbox', 'mah_goto_add_new_category', 'Shortcut to Add New Category' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add new category.' )
			->set_default_value( true ),

		// go to all tags.
		Field::make( 'checkbox', 'mah_goto_all_tags', 'Shortcut to All Tags' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to all tags.' )
			->set_default_value( true ),

		// go to add new tag.
		Field::make( 'checkbox', 'mah_goto_add_new_tag', 'Shortcut to Add New Tag' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to add new tag.' )
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

		// go to edit page.
		Field::make( 'checkbox', 'mah_goto_edit_page', 'Shortcut to Edit Page or Post' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to edit page or post.' )
			->set_default_value( true ),

	);

	return $fields;
}

/**
 * Check whether menus are supported by the theme.
 */
function mah_check_menus() {
	if ( ! function_exists( 'add_theme_support' ) ) {
		return false;
	}
	if ( ! current_theme_supports( 'menus' ) ) {
		return false;
	}
	return true;
}



/**
 *  Appearence Options.
 */
function mah_appearance_option_field() {
	$check_menus = mah_check_menus();
	$fields      = array(

		Field::make( 'separator', 'appearancesepmah', 'Wordpress Appearance  Options' )
		->set_classes( 'mah-sep-child' ),

		// go to appearance.
		Field::make( 'checkbox', 'mah_goto_appearance', 'Shortcut to Appearance' )
			->set_width( 25 )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to enable shortcut to appearance.' )
			->set_default_value( true ),

	);

	if ( $check_menus ) {
		$fields[] = Field::make( 'checkbox', 'mah_go_to_menus', 'Shortcut to Menus' )
		->set_width( 25 )
		->set_option_value( 'yes' )
		->set_help_text( 'Check this box to enable menus.' )
		->set_default_value( true );
	}

	return $fields;
}
