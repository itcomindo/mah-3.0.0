<?php
/**
 *
 * Prism Commands
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Prism Commands
 */
function mah_text_casing_commands() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div id="text-casing-commands" class="mahad-command-box mahad-hide">
		<ul class="mah-list-no-style mahad-formater-list">
			<!-- space -->
			<li class="change-text-casing space-to-dash">Space to Dash</li>
			<li class="change-text-casing space-to-underscore">Space to Underscore</li>
			<li class="change-text-casing space-to-plus">Space to Plus</li>
			<li class="change-text-casing space-to-20">Space to %20</li>

			<!-- dash -->
			<li class="change-text-casing dash-to-space">Dash to Space</li>
			<li class="change-text-casing dash-to-underscore">Dash to Underscore</li>
			<li class="change-text-casing dash-to-plus">Dash to Plus</li>
			<li class="change-text-casing dash-to-20">Dash to %20</li>

			<!-- underscore -->
			<li class="change-text-casing underscore-to-space">Underscore to Space</li>
			<li class="change-text-casing underscore-to-dash">Underscore to Dash</li>
			<li class="change-text-casing underscore-to-plus">Underscore to Plus</li>
			<li class="change-text-casing underscore-to-20">Underscore to %20</li>

			<!-- plus -->
			<li class="change-text-casing plus-to-space">Plus to Space</li>
			<li class="change-text-casing plus-to-dash">Plus to Dash</li>
			<li class="change-text-casing plus-to-underscore">Plus to Underscore</li>
			<li class="change-text-casing plus-to-20">Plus to %20</li>

			<!-- %20 -->
			<li class="change-text-casing 20-to-space">%20 to Space</li>
			<li class="change-text-casing 20-to-underscore">%20 to underscore</li>
			<li class="change-text-casing 20-to-plus">%20 to Plus</li>
			<li class="change-text-casing 20-to-dash">%20 to Dash</li>

			<!-- text case -->
			<li class="change-text-casing uppercase">Uppercase</li>
			<li class="change-text-casing lowercase">Lowercase</li>
			<li class="change-text-casing capitalize">Capitalize</li>
			<li class="change-text-casing newline-to-comma">New Line to Comma</li>
			<li class="change-text-casing comma-to-newline">Comma to Newlie</li>

			<!-- sorting -->
			<!-- alphabetically -->
			<li class="change-text-casing sort-alphabetically">Sort Alphabetically</li>
			<li class="change-text-casing sort-reverse-alphabetically">Sort Reverse Alphabetically</li>
			<!-- length -->
			<li class="change-text-casing sort-by-length">Sort by Length</li>
			<li class="change-text-casing sort-reverse-by-length">Sort Reverse by Length</li>
			<!-- random -->
			<li class="change-text-casing sort-random">Sort Random</li>


		</ul>
	</div>
		<?php
	}
}
