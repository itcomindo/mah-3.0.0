<?php
/**
 *
 * Mah Admin Tools Container
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Admin Tools Container
 */
function mah_admin_tools_container() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div id="mahad-admin-tools-box" class="mahad-container mahad-hide">
		<div class="mahad-header">Dragsss</div>
		<div class="mahad-close">X</div>
		<div class="mahad-inner">
			<?php
			mah_input_box();
			mah_formater_commands();
			mah_prism_commands();
			mah_text_casing_commands();
			mah_filter_commands();
			mah_output_box();
			?>
		</div>
	</div>



		<?php
	}
}

add_action( 'admin_footer', 'mah_admin_tools_container' );