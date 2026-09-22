<?php
/**
 * Title: Edition Masthead
 * Slug: halyard/edition-masthead
 * Categories: halyard
 * Viewport Width: 1280
 * Inserter: true
 * Description: The edition signature — a live dateline over a huge condensed two-line wordmark (your site's name above a plain descriptor) and a short standfirst. Adapted from a bold poster/signage reference into a nautical, shipping-bulletin register. Used by the Page (edition) template.
 *
 * @package halyard
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|9"}},"color":{"background":"var:preset|color|base-paper"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<header class="wp-block-group has-base-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9)">

	<?php // The dateline is bound to the halyard/publication-date source, not typed in: a hardcoded "Edition 26.09" is stale the month after release, which is the same argument inc/bindings.php makes for the copyright year. Renders in the site's own timezone and date format. ?>
	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xs","textTransform":"uppercase","letterSpacing":"0.08em"},"color":{"text":"var:preset|color|base-accent"}},"fontFamily":"mono","metadata":{"bindings":{"content":{"source":"halyard/publication-date"}}}} -->
	<p class="has-base-accent-color has-text-color has-mono-font-family" style="letter-spacing:0.08em;text-transform:uppercase;font-size:var(--wp--preset--font-size--xs)"></p>
	<!-- /wp:paragraph -->

	<?php // The wordmark is the SITE's name, not the theme's — a hardcoded "Halyard" here would stamp the theme name onto every site that inserts this pattern. isLink is false because the masthead's usual home is the front page itself. ?>
	<!-- wp:site-title {"level":1,"isLink":false,"style":{"typography":{"fontSize":"var:preset|font-size|display","lineHeight":"0.88","letterSpacing":"-0.01em","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"0"}}},"fontFamily":"serif"} /-->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl"},"color":{"text":"var:preset|color|base-black"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-base-black-color has-text-color has-serif-font-family" style="font-size:var(--wp--preset--font-size--2xl)"><?php echo esc_html__( 'The sailing commons', 'halyard' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|md"},"spacing":{"margin":{"top":"var:preset|spacing|5"}},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"sans"} -->
	<p class="has-base-mid-color has-text-color has-sans-font-family" style="margin-top:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--md)"><?php echo esc_html__( 'The month\'s sailing news, translated for someone who has never stepped on a boat, plus the commons board where a beginner and a mentor find each other.', 'halyard' ); ?></p>
	<!-- /wp:paragraph -->

</header>
<!-- /wp:group -->
