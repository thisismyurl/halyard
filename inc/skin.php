<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Halyard's PHP-side personality: the 16:9 wide-lead crop, the Anton preload that
 * carries the edition masthead, the two block styles the patterns lean on, the
 * `halyard` pattern category, and the onboarding lead.
 *
 * Everything else — theme supports, a11y scaffolding, the WooCommerce guard,
 * the block bindings, the Get-started page — is [CORE] and is kept in step by
 * `colophon sync`, which never touches this file.
 *
 * To build your own theme on Colophon:
 *   1. Add your font files to assets/fonts/ and register them in theme.json.
 *   2. Add a preload filter here for the LCP-critical font.
 *   3. Register your block styles here.
 *   4. Override the get_started_content filter with your onboarding copy.
 *   5. Everything else (a11y, WooCommerce guard, bindings, admin) is CORE — leave it.
 *
 * Pillar 9 (Archaeological Records): the [SKIN] tag marks what belongs to this
 * theme rather than to the shared core.
 *
 * @package halyard
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Halyard's image crop sizes.
 *
 * One 16:9 crop, offered to editors placing a wide lead image on a page or a
 * featured image on single.html (which breaks the image to `align:"wide"`).
 * No shipped pattern requests it — the bundled demo photographs are square and
 * the two starter patterns use the flat placeholder — so it exists for the
 * site owner's own uploads, not for the theme's own markup. Said plainly
 * because the earlier wording claimed the page-hero and feature-section
 * patterns used it, and neither ever has.
 */
function halyard_skin_image_sizes(): void {
	add_image_size( 'halyard-hero', 1440, 810, true ); // 16:9 wide-lead crop.
}
add_action( 'after_setup_theme', 'halyard_skin_image_sizes' );

/**
 * Register Halyard's block styles.
 *
 * Two styles the shipped patterns lean on: the tracked mono eyebrow above a
 * heading, and the full-bleed colour band. Both are CSS-only, treated in
 * assets/css/skin.css.
 */
function halyard_skin_block_styles(): void {

	// Paragraph as an eyebrow label — small, tracked, muted. Useful above headings.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'halyard-eyebrow',
			'label' => esc_html__( 'Eyebrow label', 'halyard' ),
		)
	);

	// Group as a full-bleed band — background colour fills the viewport width.
	register_block_style(
		'core/group',
		array(
			'name'  => 'halyard-band',
			'label' => esc_html__( 'Full-bleed band', 'halyard' ),
		)
	);
}
add_action( 'init', 'halyard_skin_block_styles' );

/**
 * Register the Halyard pattern category.
 *
 * Every pattern in patterns/ declares `Categories: halyard`, so this
 * registration is what gives them a group in the Patterns panel rather than
 * an unlabelled bucket.
 */
function halyard_skin_pattern_categories(): void {
	register_block_pattern_category(
		'halyard',
		array( 'label' => esc_html__( 'Halyard', 'halyard' ) )
	);
}
add_action( 'init', 'halyard_skin_pattern_categories' );

/**
 * Override the Get-started page lead with Halyard's own copy.
 *
 * The CORE default covers the generic onboarding steps; only the opening line
 * needs to speak in this theme's voice.
 */
add_filter(
	'halyard/get_started_content', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
	static function ( array $content ): array {
		$content['lead'] = esc_html__( 'Halyard is a bold, condensed FSE theme for teaching-first sailing and community-education sites — built on the Colophon core.', 'halyard' );

		return $content;
	}
);

/**
 * Preload the LCP-critical font — the condensed display face carrying the
 * edition masthead. Single static weight, no variable axis.
 *
 * The entry is a THEME-ROOT-RELATIVE path, not a URL. halyard_preload_fonts()
 * drops any entry containing '://' so a filter can never trigger an off-origin
 * fetch, and prefixes HALYARD_URI itself — so handing it get_theme_file_uri()
 * silently preloads nothing.
 */
add_filter(
	'halyard/preload_fonts', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/anton/anton-regular.woff2';

		return $fonts;
	}
);
