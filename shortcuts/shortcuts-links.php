<?php
/**
 *
 * Shortcuts Links.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Shortcuts Links.
 */
function mah_sc() {

	$sc = array();

	// Go to Dashboard.
	if ( carbon_get_theme_option( 'mah_goto_dashboard' ) ) {
		$sc['dashboard'] = '<li><a href="' . admin_url() . '">Dashboard</a></li>';
	} else {
		$sc['dashboard'] = '';
	}

	// Go to All Posts.
	if ( carbon_get_theme_option( 'mah_goto_all_posts' ) ) {
		$sc['all_posts'] = '<li><a href="' . admin_url( 'edit.php' ) . '">All Posts</a></li>';
	} else {
		$sc['all_posts'] = '';
	}

	// Go to Add New Post.
	if ( carbon_get_theme_option( 'mah_goto_add_new_post' ) ) {
		$sc['add_new_post'] = '<li><a href="' . admin_url( 'post-new.php' ) . '">Add New Post</a></li>';
	} else {
		$sc['add_new_post'] = '';
	}

	// Go to Edit Post.
	if ( carbon_get_theme_option( 'mah_goto_edit_post' ) ) {
		$sc['edit_post'] = '<li><a href="' . admin_url( 'post.php?post=' . get_the_ID() . '&action=edit' ) . '">Edit Post</a></li>';
	} else {
		$sc['edit_post'] = '';
	}

	// Go to All Categories.
	if ( carbon_get_theme_option( 'mah_goto_all_categories' ) ) {
		$sc['all_categories'] = '<li><a href="' . admin_url( 'edit-tags.php?taxonomy=category' ) . '">All Categories</a></li>';
	} else {
		$sc['all_categories'] = '';
	}

	// Go to Add New Category.
	if ( carbon_get_theme_option( 'mah_goto_add_new_category' ) ) {
		$sc['add_new_category'] = '<li><a href="' . admin_url( 'edit-tags.php?taxonomy=category' ) . '">Add New Category</a></li>';
	} else {
		$sc['add_new_category'] = '';
	}

	// Go to All Tags.
	if ( carbon_get_theme_option( 'mah_goto_all_tags' ) ) {
		$sc['all_tags'] = '<li><a href="' . admin_url( 'edit-tags.php?taxonomy=post_tag' ) . '">All Tags</a></li>';
	} else {
		$sc['all_tags'] = '';
	}

	// Go to Add New Tag.
	if ( carbon_get_theme_option( 'mah_goto_add_new_tag' ) ) {
		$sc['add_new_tag'] = '<li><a href="' . admin_url( 'edit-tags.php?taxonomy=post_tag' ) . '">Add New Tag</a></li>';
	} else {
		$sc['add_new_tag'] = '';
	}

	// Go to All Pages.
	if ( carbon_get_theme_option( 'mah_goto_all_pages' ) ) {
		$sc['all_pages'] = '<li><a href="' . admin_url( 'edit.php?post_type=page' ) . '">All Pages</a></li>';
	} else {
		$sc['all_pages'] = '';
	}

	// Go to Add New Page.
	if ( carbon_get_theme_option( 'mah_goto_add_new_page' ) ) {
		$sc['add_new_page'] = '<li><a href="' . admin_url( 'post-new.php?post_type=page' ) . '">Add New Page</a></li>';
	} else {
		$sc['add_new_page'] = '';
	}

	// Go to Edit Page.
	if ( carbon_get_theme_option( 'mah_goto_edit_page' ) ) {
		$sc['edit_page'] = '<li><a href="' . admin_url( 'post.php?post=' . get_the_ID() . '&action=edit' ) . '">Edit Page</a></li>';
	} else {
		$sc['edit_page'] = '';
	}

	// Go to All Media.
	if ( carbon_get_theme_option( 'mah_goto_media' ) ) {
		$sc['media'] = '<li><a href="' . admin_url( 'upload.php' ) . '">Media</a></li>';
	} else {
		$sc['media'] = '';
	}

	// Go to Add Media.
	if ( carbon_get_theme_option( 'mah_goto_add_media' ) ) {
		$sc['add_media'] = '<li><a href="' . admin_url( 'media-new.php' ) . '">Add Media</a></li>';
	} else {
		$sc['add_media'] = '';
	}

	// Go to All Comments.
	if ( carbon_get_theme_option( 'mah_goto_comments' ) ) {
		$sc['comments'] = '<li><a href="' . admin_url( 'edit-comments.php' ) . '">Comments</a></li>';
	} else {
		$sc['comments'] = '';
	}

	// Go to All Plugins.
	if ( carbon_get_theme_option( 'mah_goto_plugins' ) ) {
		$sc['plugins'] = '<li><a href="' . admin_url( 'plugins.php' ) . '">Plugins</a></li>';
	} else {
		$sc['plugins'] = '';
	}

	// Go to Add Plugin.
	if ( carbon_get_theme_option( 'mah_goto_add_plugin' ) ) {
		$sc['add_plugin'] = '<li><a href="' . admin_url( 'plugin-install.php' ) . '">Add Plugin</a></li>';
	} else {
		$sc['add_plugin'] = '';
	}

	// Go to All Users.
	if ( carbon_get_theme_option( 'mah_goto_users' ) ) {
		$sc['users'] = '<li><a href="' . admin_url( 'users.php' ) . '">Users</a></li>';
	} else {
		$sc['users'] = '';
	}

	// Go to Add User.
	if ( carbon_get_theme_option( 'mah_goto_add_user' ) ) {
		$sc['add_user'] = '<li><a href="' . admin_url( 'user-new.php' ) . '">Add User</a></li>';
	} else {
		$sc['add_user'] = '';
	}

	// Go to All Tools.
	if ( carbon_get_theme_option( 'mah_goto_tools' ) ) {
		$sc['tools'] = '<li><a href="' . admin_url( 'tools.php' ) . '">Tools</a></li>';
	} else {
		$sc['tools'] = '';
	}

	// Go to All Settings.
	if ( carbon_get_theme_option( 'mah_goto_settings' ) ) {
		$sc['settings'] = '<li><a href="' . admin_url( 'options-general.php' ) . '">Settings</a></li>';
	} else {
		$sc['settings'] = '';
	}

	// Go to Setting Writing.
	if ( carbon_get_theme_option( 'mah_goto_settings_writing' ) ) {
		$sc['settings_writing'] = '<li><a href="' . admin_url( 'options-writing.php' ) . '">Settings Writing</a></li>';
	} else {
		$sc['settings_writing'] = '';
	}

	// Go to Setting Reading.
	if ( carbon_get_theme_option( 'mah_goto_settings_reading' ) ) {
		$sc['settings_reading'] = '<li><a href="' . admin_url( 'options-reading.php' ) . '">Settings Reading</a></li>';
	} else {
		$sc['settings_reading'] = '';
	}

	// Go to Setting Discussion.
	if ( carbon_get_theme_option( 'mah_goto_settings_discussion' ) ) {
		$sc['settings_discussion'] = '<li><a href="' . admin_url( 'options-discussion.php' ) . '">Settings Discussion</a></li>';
	} else {
		$sc['settings_discussion'] = '';
	}

	// Go to Setting Media.
	if ( carbon_get_theme_option( 'mah_goto_settings_media' ) ) {
		$sc['settings_media'] = '<li><a href="' . admin_url( 'options-media.php' ) . '">Settings Media</a></li>';
	} else {
		$sc['settings_media'] = '';
	}

	// Go to Setting Permalinks.
	if ( carbon_get_theme_option( 'mah_goto_settings_permalinks' ) ) {
		$sc['settings_permalinks'] = '<li><a href="' . admin_url( 'options-permalink.php' ) . '">Settings Permalinks</a></li>';
	} else {
		$sc['settings_permalinks'] = '';
	}

	// Go to Setting Privacy.
	if ( carbon_get_theme_option( 'mah_goto_settings_privacy' ) ) {
		$sc['settings_privacy'] = '<li><a href="' . admin_url( 'options-privacy.php' ) . '">Settings Privacy</a></li>';
	} else {
		$sc['settings_privacy'] = '';
	}

	// Go to appearance.
	if ( carbon_get_theme_option( 'mah_goto_appearance' ) ) {
		$sc['appearance'] = '<li><a href="' . admin_url( 'themes.php' ) . '">Appearance</a></li>';
	} else {
		$sc['appearance'] = '';
	}

	return $sc;
}
