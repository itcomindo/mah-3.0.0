<?php
/**
 *
 * Container.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );


/**
 * Container
 */
function mm_admin_helper_container() {

	$pass = array( 'div', 'span', 'ul', 'li', 'a' );

	echo '<div class="mah-admin-shortcut">';
	echo '<div class="admin-shortcut-close">X</div>';
	echo '<ul class="mah-list-no-style">';

	echo '<li><a href="' . esc_url( admin_url( 'admin.php?page=crb_carbon_fields_container_mah_options.php' ) ) . '">Mah Options</a></li>';

	// to dashboard.
	echo wp_kses( mah_sc()['dashboard'], mah_mah( $pass ) );

	// all posts.
	echo wp_kses( mah_sc()['all_posts'], mah_mah( $pass ) );

	// add new post.
	echo wp_kses( mah_sc()['add_new_post'], mah_mah( $pass ) );

	// if is single post, show edit post.
	if ( is_single() ) {
		echo wp_kses( mah_sc()['edit_post'], mah_mah( $pass ) );
	}

	// all categories.
	echo wp_kses( mah_sc()['all_categories'], mah_mah( $pass ) );

	// add new category.
	echo wp_kses( mah_sc()['add_new_category'], mah_mah( $pass ) );

	// all tags.
	echo wp_kses( mah_sc()['all_tags'], mah_mah( $pass ) );

	// add new tag.
	echo wp_kses( mah_sc()['add_new_tag'], mah_mah( $pass ) );

	// all pages.
	echo wp_kses( mah_sc()['all_pages'], mah_mah( $pass ) );

	// add new page.
	echo wp_kses( mah_sc()['add_new_page'], mah_mah( $pass ) );

	// if is single page, show edit page.
	if ( is_page() ) {
		echo wp_kses( mah_sc()['edit_page'], mah_mah( $pass ) );
	}

	// go to appearance.
	echo wp_kses( mah_sc()['appearance'], mah_mah( $pass ) );

	// all plugins.
	echo wp_kses( mah_sc()['plugins'], mah_mah( $pass ) );

	// add new plugin.
	echo wp_kses( mah_sc()['add_plugin'], mah_mah( $pass ) );

	// all users.
	echo wp_kses( mah_sc()['users'], mah_mah( $pass ) );

	// add new user.
	echo wp_kses( mah_sc()['add_user'], mah_mah( $pass ) );

	// all tools.
	echo wp_kses( mah_sc()['tools'], mah_mah( $pass ) );

	// go to media.
	echo wp_kses( mah_sc()['media'], mah_mah( $pass ) );

	// go to add media.
	echo wp_kses( mah_sc()['add_media'], mah_mah( $pass ) );

	// go to all comments.
	echo wp_kses( mah_sc()['comments'], mah_mah( $pass ) );

	// all settings.
	echo wp_kses( mah_sc()['settings'], mah_mah( $pass ) );

	// setting writing.
	echo wp_kses( mah_sc()['settings_writing'], mah_mah( $pass ) );

	// setting reading.
	echo wp_kses( mah_sc()['settings_reading'], mah_mah( $pass ) );

	// setting discussion.
	echo wp_kses( mah_sc()['settings_discussion'], mah_mah( $pass ) );

	// setting media.
	echo wp_kses( mah_sc()['settings_media'], mah_mah( $pass ) );

	// setting permalinks.
	echo wp_kses( mah_sc()['settings_permalinks'], mah_mah( $pass ) );

	// setting privacy.
	echo wp_kses( mah_sc()['settings_privacy'], mah_mah( $pass ) );

	// logout.
	echo '<li><a href="' . esc_url( wp_logout_url() ) . '">Logout</a></li>';

	echo '</ul>';

	echo wp_kses( mm_mah_oxy_shortcut_frontend(), mah_mah( $pass ) );

	echo wp_kses( mm_mah_tools_shortcut(), mah_mah( $pass ) );

	?>
	<div class="mah-ref-trigger mah-toy mah-pointer">References</div>
	<?php

	echo wp_kses( mm_mah_seo_tools(), mah_mah( $pass ) );

	// logout.

	echo '</div>';
}
