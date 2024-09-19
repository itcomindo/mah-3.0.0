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
add_action('admin_enqueue_scripts', 'mah_wpcb_admin_scripts');
