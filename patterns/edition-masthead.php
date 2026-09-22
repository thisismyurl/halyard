<?php
/**
 * Title: Edition Masthead
 * Slug: halyard/edition-masthead
 * Categories: halyard
 * Viewport Width: 1280
 * Inserter: true
 * Description: The front-page signature — a huge condensed two-line wordmark (site name over a plain descriptor), a small text nav line, and the dated-edition stamp. Adapted from a bold poster/signage reference into a nautical, shipping-bulletin register.
 *
 * @package halyard
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|9"}},"color":{"background":"var:preset|color|base-paper"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<header class="wp-block-group has-base-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.08em"},"color":{"text":"var:preset|color|base-accent"}},"fontFamily":"mono"} -->
	<p class="has-base-accent-color has-text-color has-mono-font-family" style="letter-spacing:0.08em;text-transform:uppercase;font-size:var(--wp--preset--font-size--xs)"><?php echo esc_html__( 'Edition 26.09 — hoisted monthly', 'halyard' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|display","lineHeight":"0.88","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}},"fontFamily":"serif"} -->
	<h1 class="wp-block-heading has-serif-font-family" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:0;font-size:var(--wp--preset--font-size--display);line-height:0.88;letter-spacing:-0.01em"><?php echo esc_html__( 'Halyard', 'halyard' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl"},"color":{"text":"var:preset|color|base-black"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-base-black-color has-text-color has-serif-font-family" style="font-size:var(--wp--preset--font-size--2xl)"><?php echo esc_html__( 'The sailing commons', 'halyard' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|md"},"spacing":{"margin":{"top":"var:preset|spacing|5"}},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"sans"} -->
	<p class="has-base-mid-color has-text-color has-sans-font-family" style="margin-top:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--md)"><?php echo esc_html__( 'The month\'s sailing news, translated for someone who has never stepped on a boat, plus the commons board where a beginner and a mentor find each other.', 'halyard' ); ?></p>
	<!-- /wp:paragraph -->

</header>
<!-- /wp:group -->
