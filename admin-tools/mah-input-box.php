<?php
/**
 *
 * Mah Input Boc
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Input Box
 */
function mah_input_box() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div class="mahad-item">
		<label for="mibox">Input Box</label>
		<textarea class="mah-textarea" name="mibox" id="mibox" cols="" rows="3"></textarea>
		<div id="mahad-extra-wr" class="mahad-hide">
			<div class="mahad-extra">
				<label for="data-left" class="filter-help-text">String</label>
				<input id="mahad-data-left" type="text" name="data-left">
				<small class="filter-help-text">Remove Line Contain OR Not Contain</small>
			</div>
		</div>
	</div>
		<?php
	}
}