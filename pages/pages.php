<?php

/**
 *
 * Pages Shortcut
 * @package mah
 */

defined('ABSPATH') || die('No script kiddies please!');


// Create shortcut into admin_bar_menu containing pages
function mm_show_pages($admin_bar)
{
    // Tambahkan menu induk untuk pages
    $admin_bar->add_menu(array(
        'id'    => 'mm_pages_parent',
        'title' => 'Pages',
        'href'  => '#',
        'meta'  => array(
            'title' => 'Pages'
        ),
    ));

    // Ambil semua halaman
    $get_pages = get_pages();

    // Looping halaman dan tambahkan ke menu induk sebagai child
    foreach ($get_pages as $page) {
        // Tambahkan item parent untuk halaman
        $admin_bar->add_menu(array(
            'id'    => 'mm_page_' . $page->ID,
            'parent' => 'mm_pages_parent',
            'title' => $page->post_title,
            'href'  => false, // Parent menu tidak memerlukan href
            'meta'  => array(
                'title' => $page->post_title
            ),
        ));

        // Tambahkan submenu untuk "Edit Page"
        $admin_bar->add_menu(array(
            'id'    => 'mm_page_edit_' . $page->ID,
            'parent' => 'mm_page_' . $page->ID,
            'title' => 'Edit Page',
            'href'  => get_edit_post_link($page->ID),
            'meta'  => array(
                'title' => 'Edit ' . $page->post_title
            ),
        ));

        // Tambahkan submenu untuk "View Page"
        $admin_bar->add_menu(array(
            'id'    => 'mm_page_view_' . $page->ID,
            'parent' => 'mm_page_' . $page->ID,
            'title' => 'View Page',
            'href'  => get_permalink($page->ID),
            'meta'  => array(
                'title' => 'View ' . $page->post_title
            ),
        ));
    }
}

// Hook untuk menambahkan ke admin bar
add_action('admin_bar_menu', 'mm_show_pages', 100);
