<?php
/**
 * Title: On the Water
 * Slug: halyard/on-the-water
 * Categories: halyard
 * Viewport Width: 1280
 * Inserter: true
 * Description: Image-plus-listing section (a photo beside a dated list) paired with a photo grid below — adapted from a mobile-vendor schedule-page reference into a regional regatta/commons-board calendar.
 *
 * @package halyard
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)">

	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-serif-font-family" style="font-size:var(--wp--preset--font-size--2-xl)"><?php echo esc_html__( 'On the water near you', 'halyard' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"left":"var:preset|spacing|7"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--6)">

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/on-the-water.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A sailboat under sail on open water, the low sun sitting just above the horizon.', 'halyard' ); ?>" style="border-radius:4px;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">

			<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"var:preset|color|base-rule"}},"spacing":{"padding":{"bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-rule);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontFamily":"sans"} -->
				<p class="has-sans-font-family" style="font-weight:700"><?php echo esc_html__( 'Learn-to-sail day — no experience, no boat needed', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"mono"} -->
				<p class="has-base-mid-color has-text-color has-mono-font-family" style="font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html__( 'Great Lakes region — date set per edition', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"var:preset|color|base-rule"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-rule);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontFamily":"sans"} -->
				<p class="has-sans-font-family" style="font-weight:700"><?php echo esc_html__( 'Reach Initiative scholarship deadline', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"mono"} -->
				<p class="has-base-mid-color has-text-color has-mono-font-family" style="font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html__( 'National — check the commons board for this edition\'s date', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontFamily":"sans"} -->
				<p class="has-sans-font-family" style="font-weight:700"><?php echo esc_html__( 'Crew wanted — beginner-friendly, regional', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|base-accent"}},"fontFamily":"mono"} -->
				<p class="has-base-accent-color has-text-color has-mono-font-family" style="font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html__( 'OPEN — posted this edition', 'halyard' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|7"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped" style="margin-top:var(--wp--preset--spacing--7)">
		<!-- wp:image {"aspectRatio":"1","scale":"cover"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commons-grid-1.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Two hands tying a knot in a rope at a deck fitting.', 'halyard' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"1","scale":"cover"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commons-grid-2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A group of adult sailing volunteers in life jackets, laughing together on a grassy shoreline with sailing dinghies on the water behind them.', 'halyard' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"1","scale":"cover"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/commons-grid-3.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A small sailboat tied alongside a weathered wooden dock on flat water.', 'halyard' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

</section>
<!-- /wp:group -->
