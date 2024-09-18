<?php

/**
 *
 * WPCODEBOX
 * @package mah
 */

defined('ABSPATH') || die('No script kiddies please!');

// Load wpcb.js and wpcb.css in admin area.
function mah_wpcb_admin_scripts()
{
    wp_enqueue_script('wpcb-js', MAH_URL . 'wpcb/wpcb.js', array('jquery'), '1.0', true);
    wp_enqueue_style('wpcb-css', MAH_URL . 'wpcb/wpcb.css', array(), '1.0', 'all');
}




function mm_mah_load_button()
{
    global $pagenow;

    // Cek jika berada di admin.php dan di halaman wpcodebox2
    if ($pagenow == 'admin.php' && isset($_GET['page']) && $_GET['page'] == 'wpcodebox2') {
?>
        <div id="wpcb-tfs">L</div>
<?php
    }
}





// Check WP CB
function mm_mah_check_wpcb()
{
    $wpcb_ws = '/admin.php?page=wpcodebox2';
    $wpcb_url = admin_url($wpcb_ws);

    if (is_plugin_active('wpcodebox2/wpcodebox2.php')) {
        add_action('admin_enqueue_scripts', 'mah_wpcb_admin_scripts');
        add_action('admin_footer', 'mm_mah_load_button');
    }
}

// add_action('admin_notices', 'wpcb_test');
add_action('init', 'mm_mah_check_wpcb');
