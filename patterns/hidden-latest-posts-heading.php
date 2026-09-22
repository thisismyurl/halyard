<?php
/**
 * Title: Latest posts heading (hidden)
 * Slug: halyard/hidden-latest-posts-heading
 * Categories: halyard
 * Inserter: false
 * Description: Not for the pattern picker — a translation-string carrier only.
 *
 * templates/index.html references this purely so the heading text is
 * extracted by wp i18n make-pot — block template HTML files aren't scanned
 * for translatable strings, but pattern PHP files are.
 *
 * @package halyard
 */
?>
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"var:preset|color|base-black"}}} -->
<h1 class="wp-block-heading has-base-black-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:var(--wp--preset--font-size--2xl);letter-spacing:-0.01em"><?php echo esc_html__( 'Latest posts', 'halyard' ); ?></h1>
<!-- /wp:heading -->
