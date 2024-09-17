<?php
/**
 * Silence is golden
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );


use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'mah_elementor_options' );

/**
 * Elementor Options
 */
function mah_elementor_options() {
	$aktif = mm_mah_elementor_status();
	if ( $aktif ) {
		$parent = Container::make( 'theme_options', 'Elementor Custom Options' )
			->add_fields(
				array(

					// remove default header.
					Field::make( 'checkbox', 'mahel_disable_default_header', 'Remove Default Header' )
						->set_option_value( 'yes' )
						->set_default_value( true ),

					// hide default page title.
					Field::make( 'checkbox', 'mahel_disable_default_page_title', 'Hide Default Page Title' )
						->set_option_value( 'yes' )
						->set_default_value( true ),
				)
			);
	}
}


/**
 * Elementor Page Options
 */
function mah_elementor_page_options() {
	$aktif = mm_mah_elementor_status();
	if ( $aktif ) {
		Container::make( 'post_meta', 'Elementor Custom Options' )
			->where( 'post_type', '=', 'page' )
			->add_fields(
				array(
					Field::make( 'checkbox', 'mahel_disable_default_page_title', 'Hide Default Page Title' ),
				)
			);
	}
}
