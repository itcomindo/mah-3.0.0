<?php
/**
 *
 * Short Commands
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Sort Commands
 */
function mah_filter_commands() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div id="filter-commands" class="mahad-command-box">
		<ul class="mah-list-no-style mahad-formater-list">
			<li class="remove-dup-line">Rem Dup Line</li>
			<li class="remove-empty-line">Rem Empty Line</li>
			<li class="remove-line-contain">Rem Line Contain</li>
		</ul>
	</div>
		<?php
	}
}
