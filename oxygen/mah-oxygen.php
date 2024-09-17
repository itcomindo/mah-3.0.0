<?php

/**
 * Mah Oxygen Shortcut
 *
 * @package mah
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Load Oxygen Builder
 */
function mm_mah_add_oxygen_shortcut_to_admin_bar()
{
	if (!is_user_logged_in()) {
		return;
	}

	// Cek apakah user memiliki role administrator.
	$user = wp_get_current_user();
	if (!in_array('administrator', (array) $user->roles, true)) {
		return;
	}

	// Cek apakah Oxygen Builder plugin aktif.
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	if (!is_plugin_active('oxygen/functions.php')) {
		return;
	}

	global $wp_admin_bar;

	// Menambahkan menu utama.
	$wp_admin_bar->add_menu(
		array(
			'id'    => 'mm_oxygen_shortcut',
			'title' => 'Oxygen',
			'href'  => admin_url('admin.php?page=ct_dashboard_page'),
		)
	);

	// Daftar shortcut Oxygen Builder yang akan ditambahkan ke admin bar.
	$oxygen_pages = array(
		array(
			'id'    => 'mm_oxygen_setting',
			'title' => 'Setting',
			'href'  => 'admin.php?page=oxygen_vsb_settings',
		),
		array(
			'id'    => 'mm_oxygen_template',
			'title' => 'Templates',
			'href'  => 'edit.php?post_type=ct_template',
		),
		array(
			'id'    => 'mm_oxygen_new_template',
			'title' => 'Add New Template',
			'href'  => 'post-new.php?post_type=ct_template',
		),
		array(
			'id'    => 'mm_oxygen_new_reusable_template',
			'title' => 'Add New Reusable Template',
			'href'  => 'post-new.php?post_type=ct_template&is_reusable=true',
		),
		array(
			'id'    => 'mm_oxygen_stylesheet',
			'title' => 'Stylesheet',
			'href'  => 'admin.php?page=ct_css_management',
		),
		array(
			'id'    => 'mm_oxygen_client_control',
			'title' => 'Client Control',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=client_control',
		),
		array(
			'id'    => 'mm_oxygen_security_manager',
			'title' => 'Security',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=security_manager',
		),
		array(
			'id'    => 'mm_oxygen_sign_shortcode',
			'title' => 'Sign Shortcode',
			'href'  => 'admin.php?page=oxygen_vsb_sign_shortcodes',
		),
		array(
			'id'    => 'mm_oxygen_svg_manager',
			'title' => 'SVG Manager',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=svg_manager',
		),
		array(
			'id'    => 'mm_oxygen_typekit_manager',
			'title' => 'Typekit Manager',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=typekit_manager',
		),
		array(
			'id'    => 'mm_oxygen_css_cache',
			'title' => 'CSS Cache',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=cache',
		),
		array(
			'id'    => 'mm_oxygen_bloat_eliminator',
			'title' => 'Bloat Eliminator',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=bloat',
		),
		array(
			'id'    => 'mm_oxygen_library',
			'title' => 'Library',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=library_manager',
		),
		array(
			'id'    => 'mm_oxygen_revision',
			'title' => 'Revision',
			'href'  => 'admin.php?page=oxygen_vsb_settings&tab=revisions',
		),
	);

	// Loop melalui setiap halaman dan tambahkan ke admin bar.
	foreach ($oxygen_pages as $page) {
		$wp_admin_bar->add_menu(
			array(
				'parent' => 'mm_oxygen_shortcut',
				'id'     => $page['id'],
				'title'  => $page['title'],
				'href'   => admin_url($page['href']),
			)
		);
	}
}

add_action('admin_bar_menu', 'mm_mah_add_oxygen_shortcut_to_admin_bar', 100);



/**
 *  Mah Oxygen Shortcut Frontend
 */
function mm_mah_oxy_shortcut_frontend()
{
	if (! is_user_logged_in()) {
		return;
	}

	// Cek apakah user memiliki role administrator.
	$user = wp_get_current_user();
	if (! in_array('administrator', (array) $user->roles, true)) {
		return;
	}

	// Cek apakah Oxygen Builder plugin aktif.
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	if (! is_plugin_active('oxygen/functions.php')) {
		return;
	}

	$admin_url = admin_url();
?>
	<div id="mah-oxy-fp-pr" class="mah-toy">
		<div id="mah-oxy-fp-wr" class="mah-wr">
			<span class="mah-oxy-trigger">Oxygen Builder</span>
			<div id="mah-oxy-fp-inner" class="mah-oxy-sc mah-hide mah-list-wr">
				<ul class="mah-list-no-style mah-list">
					<?php
					// dashboard.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=ct_dashboard_page')) . '">Dashboard</a></li>';

					// setting.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings')) . '">Setting</a></li>';

					// template.
					echo '<li><a href="' . esc_url(admin_url('edit.php?post_type=ct_template')) . '">Templates</a></li>';

					?>
					<li class="mah-edit-oxy-template">
						<span>Edit Template</span>
						<?php
						mm_list_oxygen_templates();
						?>
					</li>
					<?php

					// new template.
					echo '<li><a href="' . esc_url(admin_url('post-new.php?post_type=ct_template')) . '">Add New Template</a></li>';

					// new reusable template.
					echo '<li><a href="' . esc_url(admin_url('post-new.php?post_type=ct_template&is_reusable=true')) . '">Add New Reusable Template</a></li>';

					// stylesheet.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=ct_css_management')) . '">Stylesheet</a></li>';

					// client control.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=client_control')) . '">Client Control</a></li>';

					// security manager.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=security_manager')) . '">Security</a></li>';

					// sign shortcode.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_sign_shortcodes')) . '">Sign Shortcode</a></li>';

					// svg manager.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=svg_manager')) . '">SVG Manager</a></li>';

					// typekit manager.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=typekit_manager')) . '">Typekit Manager</a></li>';

					// css cache.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=cache')) . '">CSS Cache</a></li>';

					// bloat eliminator.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=bloat')) . '">Bloat Eliminator</a></li>';

					// library.
					echo '<li><a href="' . esc_url(admin_url('admin.php?page=oxygen_vsb_settings&tab=library_manager')) . '">Library</a></li>';

					?>
				</ul>
			</div>
		</div>
	</div>
<?php
}


/**
 * What? list all oxygen templates
 */
function mm_list_oxygen_templates()
{
	if (! is_user_logged_in()) {
		return;
	}

	// Cek apakah user memiliki role administrator.
	$user = wp_get_current_user();
	if (! in_array('administrator', (array) $user->roles, true)) {
		return;
	}

	// Cek apakah Oxygen Builder plugin aktif.
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	if (! is_plugin_active('oxygen/functions.php')) {
		return;
	}

	// Query untuk mendapatkan semua template Oxygen.
	$args = array(
		'post_type'      => 'ct_template',
		'posts_per_page' => -1,  // Mengambil semua template.
	);

	$templates = new WP_Query($args);

	if ($templates->have_posts()) {
		echo '<div class="mah-oxy-edit-template-wr mah-hide">';
		echo '<ul class="mah-list-no-style mah-oxy-edit-template-list">';
		while ($templates->have_posts()) {
			$templates->the_post();
			// Tampilkan link ke template.
			echo '<li><a href="' . esc_url(get_permalink()) . '&ct_builder=true" target="_blank">Edit ' . esc_html(get_the_title()) . '</a></li>';
		}
		echo '</ul>';
		echo '</div>';
		wp_reset_postdata();
	} else {
		echo '<p>Tidak ada template yang ditemukan.</p>';
	}
}

/**
 * Load Oxygen Builder Templates into Admin Bar
 */
function oxb_load_oxygen_templates_into_admin_bar()
{
	if (!is_user_logged_in()) {
		return;
	}

	// Cek apakah user memiliki role administrator.
	$user = wp_get_current_user();
	if (!in_array('administrator', (array) $user->roles, true)) {
		return;
	}

	// Cek apakah Oxygen Builder plugin aktif.
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
	if (!is_plugin_active('oxygen/functions.php')) {
		return;
	}

	global $wp_admin_bar, $post;

	// Simpan data post awal
	$original_post = $post;

	// Menambahkan menu utama.
	$wp_admin_bar->add_menu(
		array(
			'id'    => 'oxb_edit_templates',
			'title' => 'Edit Oxygen Templatesss',
			'href'  => '#',
		)
	);

	// Query untuk mendapatkan semua template Oxygen.
	$args = array(
		'post_type'      => 'ct_template',
		'posts_per_page' => -1,  // Mengambil semua template.
	);
	$templates_query = new WP_Query($args);

	if ($templates_query->have_posts()) {
		while ($templates_query->have_posts()) {
			$templates_query->the_post();
			// Tampilkan link ke template-template yang sudah dibuat.
			//get the ID.
			$template_id = get_the_ID();


			$wp_admin_bar->add_menu(
				array(
					'parent' => 'oxb_edit_templates',
					'id'     => 'oxb_edit_template_' . get_the_ID(),
					'title'  => 'Edit ' . esc_html(get_the_title()) . '' . ' (' . get_the_ID() . ')',
					'href'   => esc_url(get_permalink()) . '&ct_builder=true',
					'meta'   => array('target' => '_blank'),  // Membuka di tab baru
				)
			);
		}
		wp_reset_postdata();  // Kembalikan data post global
	} else {
		// Tampilkan keterangan jika tidak ada template untuk di edit.
		$wp_admin_bar->add_menu(
			array(
				'parent' => 'oxb_edit_templates',
				'id'     => 'oxb_no_templates_found',
				'title'  => 'Tidak ada template untuk di edit',
			)
		);
	}

	// Kembalikan post ke aslinya
	$post = $original_post;
}

add_action('admin_bar_menu', 'oxb_load_oxygen_templates_into_admin_bar', 100);
