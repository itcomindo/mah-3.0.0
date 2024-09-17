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
function mah_prism_commands() {
	$is_true = carbon_get_theme_option( 'mah_enable_admin_tools' );
	if ( $is_true ) {
		?>
	<div id="prism-commands" class="mahad-command-box">
		<ul class="mah-list-no-style mahad-formater-list">
			<li class="mahad-lang-list" data-mah="html">HTML</li>
			<li class="mahad-lang-list" data-mah="css">CSS</li>
			<li class="mahad-lang-list" data-mah="js">JS</li>
			<li class="mahad-lang-list" data-mah="php">PHP</li>
			<li class="mahad-lang-list" data-mah="sql">SQL</li>
			<li class="mahad-lang-list" data-mah="json">JSON</li>
			<li class="mahad-lang-list" data-mah="bash">BASH</li>
			<li class="mahad-lang-list" data-mah="markdown">MARKDOWN</li>
			<li class="mahad-lang-list" data-mah="less">LESS</li>
			<li class="mahad-lang-list" data-mah="scss">SCSS</li>
			<li class="mahad-lang-list" data-mah="sass">SASS</li>
			<li class="mahad-lang-list" data-mah="phython">Phython</li>
		</ul>
	</div>
		<?php
	}
}
