<?php
/**
 * Silence is golden
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * SEO Tools
 */
function mm_mah_seo_tools() {
	?>
	<div id="mah-seo-pr" class="mah-toy">
		<div id="mah-seo-wr" class="">
			<span class="mah-seo-trigger">SEO</span>
			<div id="mah-seo-inner" class="">
				<ul class="mah-list-no-style mah-list mah-seo-list">
					<li>
						<a href="//www.google.com/search?q=<?php echo esc_html( mm_mah_url()['current'] ); ?>" target="_blank" rel="noopener nofollow">Cek URL</a>
					</li>
					<li>
						<a href="https://www.google.com/search?q=site:<?php echo esc_html( mm_mah_url()['global'] ); ?>" target="_blank" rel="noopener nofollow">Cek Global</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
}
