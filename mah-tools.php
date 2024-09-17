<?php
/**
 * Silence is golden
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * SEO Tools Shortcuts
 */
function mm_mah_tools_shortcut() {
	?>
	<div id="mah-tools-fp-pr" class="mah-toy">
		<div id="mah-tools-fp-wr" class="mah-wr">
			<span class="mah-tools-trigger">Tools Shortcuts</span>
			<div id="mah-tools-fp-inner" class="mah-tools-sc mah-hide mah-list-wr">
				<ul class="mah-list-no-style mah-list">
					<?php mm_mah_get_tools_shortcuts(); ?>
				</ul>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Get SEO Tools
 */
function mm_mah_get_tools_shortcuts() {
	$pass = mah_mah( array( 'span' ) );
	if ( carbon_get_theme_option( 'mah_tools_shortcuts_enable' ) ) {
		$shortcuts = carbon_get_theme_option( 'mah_tools_shortcuts' );
		if ( $shortcuts ) {

			foreach ( $shortcuts as $sc ) {
				$sc_name = $sc['tool_name'];
				$sc_url  = $sc['tool_url'];
				$sc_desc = $sc['tool_description'];
				if ( $sc_desc ) {
					$desc_icon = '<span class="mah-question-mark">&quest;</span>';
					$desc      = '<span class="mah-tool-description mah-hide">' . $sc_desc . '</span>';
				} else {
					$desc_icon = '';
					$desc      = '';
				}
				?>
				<li>
					<a href="<?php echo esc_html( $sc_url ); ?>"><?php echo esc_html( $sc_name ); ?></a>
					<?php echo wp_kses( $desc_icon, mah_mah( $pass ) ); ?>
					<?php echo wp_kses( $desc, mah_mah( $pass ) ); ?>
				</li>
				<?php

			}
		} else {
			?>
			<li>You dont create any shortcut yet bastard!!!</li>
			<?php
		}
	} else {
		mm_mah_get_default_tools_shortcuts();
	}
}



/**
 * Get Default Tools Shortcuts
 */
function mm_mah_get_default_tools_shortcuts() {
	?>
	<!-- tools bhy -->
	<li>
		<a href="//tools.budiharyono.id" target="_blank">Tools BHY</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">My created tool</span>
	</li>

	<!-- chat.open.ai -->
	<li>
		<a href="//chat.openai.com" target="_blank">Open AI</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Go to Chat GPT OpenAI</span>
	</li>

	<!-- https://gemini.google.com/app -->
	<li>
		<a href="//gemini.google.com/app" target="_blank">Gemini</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Go Google Gemini</span>
	</li>

	<!-- https://www.shapedivider.app/ -->
	<li>
		<a href="//www.shapedivider.app/" target="_blank">Shape Divider 1</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat shape divider pembatas antar section</span>
	</li>

	<!-- https://omatsuri.app/page-dividers -->
	<li><a href="//omatsuri.app/page-dividers" target="_blank">Shape Divider 2</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat shape divider pembatas antar section</span>
	</li>

	<!-- https://omatsuri.app/color-shades-generator -->
	<li><a href="//omatsuri.app/color-shades-generator" target="_blank">Color Shades</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat generate warna dari yang paling light ke paling dark</span>
	</li>

	<!-- https://omatsuri.app/gradient-generator -->
	<li><a href="//omatsuri.app/gradient-generator" target="_blank">Gradient Generator</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat generate gradient warna</span>
	</li>


	<!-- https://omatsuri.app/lorem-ipsum -->
	<li><a href="//omatsuri.app/lorem-ipsum" target="_blank">Lorem Ipsum</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat generate text dummy</span>
	</li>

	<!-- https://omatsuri.app/html-symbols -->
	<li><a href="//omatsuri.app/html-symbols" target="_blank">HTML Symbols</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat generate symbol html</span>
	</li>

	<!-- https://omatsuri.app/triangle-generator -->
	<li><a href="//omatsuri.app/triangle-generator" target="_blank">Triangle Generator</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat generate triangle</span>
	</li>

	<!-- https://cdnjs.com/ -->
	<li><a href="//cdnjs.com/" target="_blank">CDN JS</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">CSS/JS Library</span>
	</li>

	<!-- https://www.jsdelivr.com/ -->
	<li><a href="//www.jsdelivr.com/" target="_blank">JS Deliver</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">CSS/JS Library</span>
	</li>

	<!-- https://fonts.google.com/ -->
	<li><a href="//fonts.google.com/" target="_blank">Google Fonts</a>
	</li>

	<!-- https://bennettfeely.com/clippy/ -->
	<li><a href="//bennettfeely.com/clippy/" target="_blank">Clippy</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat kotak unik</span>
	</li>

	<!-- https://keyframes.app/animate -->
	<li><a href="//keyframes.app/animate" target="_blank">Keyframe</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat animasi keyframe</span>
	</li>

	<!-- https://animate.style/ -->
	<li><a href="//animate.style/" target="_blank">Animate Style</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat animasi element</span>
	</li>

	<!-- https://angrytools.com/css-grid/ -->
	<li><a href="//angrytools.com/css-grid/" target="_blank">CSS Grid</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat grid layout</span>
	</li>

	<!-- https://codepen.io/enxaneta/full/adLPwv/ -->
	<li><a href="//codepen.io/enxaneta/full/adLPwv/" target="_blank">CSS Flex</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Buat flex layout</span>
	</li>

	<!-- https://www.remove.bg/ -->
	<li><a href="//www.remove.bg/" target="_blank">Remove BG</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Hapus background gambar</span>
	</li>

	<!-- https://id.pngtree.com/ -->
	<li><a href="//id.pngtree.com/" target="_blank">Png Tree</a>
	</li>

	<!-- https://unsplash.com/ -->
	<li><a href="//unsplash.com/" target="_blank">Unsplash</a>
	</li>

	<!-- https://www.freepik.com/ -->
	<li><a href="//www.freepik.com/" target="_blank">Freepik</a>
	</li>

	<!-- font awesome -->
	<li><a href="//fontawesome.com/icons" target="_blank">Font Awesome</a>
	</li>

	<!-- https://www.iconarchive.com/ -->
	<li><a href="//www.iconarchive.com/" target="_blank">Icon Archive</a></li>

	<!-- https://wordcounter.net/ -->
	<li>
		<a href="//wordcounter.net/" target="_blank">Word Counter</a>
		<span class="mah-question-mark">&quest;</span>
		<span class="mah-tool-description mah-hide">Hitung jumlah kata</span>
	</li>
	<?php
}
