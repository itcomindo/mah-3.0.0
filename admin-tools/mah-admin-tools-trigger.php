<?php
/**
 *
 * Mah Admin Tools Trigger
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Trigger Box
 */
function mah_admin_trigger_box() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
		<div id="mahad-trigger-box">
			<ul class="mah-list-no-style mahad-trigger-box-list">
				<li class="mahad-trigger-list mahad-show-box">Show Box</li>
				<li class="mahad-trigger-list mahad-run-formater">Formater</li>
				<li class="mahad-trigger-list mahad-run-text-casing">Text</li>
				<li class="mahad-trigger-list mahad-run-entity">HTML Entity</li>
				<li class="mahad-trigger-list mahad-run-prism">Prism</li>
				<li class="mahad-trigger-list mahad-run-filter">Filter</li>
				<li class="mahad-trigger-list">Append</li>
				<li class="mahad-trigger-list">Generator</li>
			</ul>
		</div>
		<?php
	}
}
add_action( 'admin_footer', 'mah_admin_trigger_box' );
