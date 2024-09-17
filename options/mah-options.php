<?php
/**
 * MAH Options
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'mm_mah_options' );

/**
 * MAH Options
 */
function mm_mah_options() {
	Container::make( 'theme_options', 'Mah Options' )
		->add_fields(
			array(

				...mah_enable_disable_fields(),
				...mah_wordpress_shortcuts_fields(),
				...mah_appearance_option_field(),
				...mah_else_wordpress_shortcuts_options_fields(),
				...mah_tools_shortcuts_options_fields(),
				...mah_other_options_fields(),

			)
		);
}
