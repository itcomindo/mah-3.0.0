<?php
/**
 *
 * Formater Commands
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Formater Commands
 */
function mah_formater_commands() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div id="formater-commands" class="mahad-command-box">
		<ul class="mah-list-no-style mahad-formater-list">
			<li class="pmaker">P</li>
			<li class="h2maker">H2</li>
			<li class="h3maker">H3</li>
			<li class="h4maker">H4</li>
			<li class="h5maker">H5</li>
			<li class="h6maker">H6</li>
			<li class="blockqmaker">Quote</li>
			<li class="ulmaker">UL</li>
			<li class="olmaker">OL</li>
		</ul>
	</div>
		<?php
	}
}
