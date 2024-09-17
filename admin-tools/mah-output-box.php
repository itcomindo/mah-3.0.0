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
function mah_output_box() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div class="mahad-item">
		<label for="mobox">Output Box</label>
		<textarea class="mah-textarea" name="mobox" id="mobox" cols="" rows="3"></textarea>
		<small>output already copied in clipboard</small>
		<div id="mahad-button-wr">
			<button class="mahad-html-entity mahad-button">Run Entity Maker</button>
			<button class="mahad-copy mahad-button">Copy</button>
			<button class="mahad-reset mahad-button">Reset</button>
		</div>
	</div>
		<?php
	}
}