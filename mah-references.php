<?php
/**
 * References
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * References
 */
function mm_mah_references() {
	if ( ! is_user_logged_in() ) {
		return;
	}

	// Cek apakah user memiliki role administrator.
	$user = wp_get_current_user();
	if ( ! in_array( 'administrator', (array) $user->roles, true ) ) {
		return;
	}
	?>
	<div id="mah-ref" class="mah-hide">
		<div class="mah-ref-wr">
			<div class="mah-ref-close">X</div>
			<mah class="mah-ref-form">
				<label for="mah-search">Cari Referensi</label>
				<input type="text" id="mah-search">
				<button id="mah-button"><a href="site:https://developer.wordpress.org/reference/" target="_blank">Search</a></button>
			</mah>
		</div>
	</div>
	<?php
}
