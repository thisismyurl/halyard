=== Halyard ===

Contributors: thisismyurl
Tags: blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, rtl-language-support, translation-ready, wide-blocks
Requires at least: 6.7
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.6265.1511
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A bold, condensed FSE theme for teaching-first sailing and community-education sites — built on the Colophon core.

== Description ==

Halyard is built for the teaching-first sailing project, not the yacht club — the volunteer instructor, the parent whose kid just found free crewing, the community sailing commons translating the industry firehose for someone who has never stepped on a boat. The name is the line that hoists a sail, already used inside the Colophon collection's own naming doctrine as an example of insider vocabulary — a beginner learns the word in their first hour at the dock, long before "close-hauled" or "spinnaker."

The signature layout is a dated periodical edition: a huge condensed wordmark carrying your site's name, a live dateline, then a photo-and-listing section pairing a community photo with a dated calendar — regattas, scholarship deadlines, and "crew wanted" commons-board posts — closing with a photo grid. It ships as the "Page (edition)" page template and as two patterns you can drop anywhere, so you opt into it on the page you choose rather than having it imposed on your home page.

Halyard is built on the Colophon core: the CORE/SKIN architecture separates portable infrastructure (accessibility scaffolding, WooCommerce compatibility, the onboarding flow) from this theme's own personality (its palette, its type pairing, its patterns), so updates to the shared foundation never touch the design.

Features:

* Full Site Editing — every element customisable in the Site Editor
* Self-hosted OFL fonts (Anton, Archivo, IBM Plex Mono) — bundled with the theme, no Google Fonts request, nothing phoning home
* Built to WCAG 2.2 AA guidelines — visible focus rings, screen-reader utilities, semantic landmark elements
* RTL-ready — all layout written with CSS logical properties
* Core Web Vitals optimised — zero render-blocking JavaScript, cascade-ordered CSS, no dead weight
* Reduced-motion support — all decorative animation is governed by a single global guard
* Block patterns — the edition masthead and on-the-water calendar, plus starter hero, content, and navigation layouts
* WooCommerce compatible — declares support automatically when the plugin is active
* Zero plugin dependencies

== The CORE/SKIN split ==

Every file in inc/ is labelled [CORE] or [SKIN].

[CORE] files are the portable infrastructure: theme supports, a11y scaffolding, the block-bindings copyright footer, and the WP.org-compliant onboarding flow. These are the same across every theme in the collection.

[SKIN] is inc/skin.php — the one file that carries your theme's personality: image crop sizes, bundled fonts, block style registrations, pattern categories, and the onboarding copy. The Colophon CLI (`colophon sync`) never overwrites skin.php, so you can rebuild or update the core without losing your customisations.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Halyard" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Halyard: Get started for optional setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is it for? =

A teaching-first sailing or community-education project wanting a dated-edition front page, a commons-board classifieds layout, and a register that never assumes the reader already knows the jargon. It also works as a general periodical/newsletter-style blog theme.

= Is Halyard part of a collection? =

Yes. Halyard is one of the Colophon collection's niche editorial themes — each is a full standalone theme on WordPress.org, built on the shared Colophon core and independently maintained.

= How do I get the dated-edition layout? =

Create a page, and in the page's settings choose the "Page (edition)" template. You get the masthead, the on-the-water calendar, and then your own page content below. Set that page as your front page under Settings → Reading if you want it as your home page.

It is deliberately a page template rather than a front-page template. WordPress gives front-page.html priority over everything else whenever it considers a request the front page — including the default "Your latest posts" setting — so a designed front-page template would replace your blog index with the theme's demo content on a fresh install, and would discard the content of whatever page you assigned as your static front page. As a page template you choose where it applies and your content is never lost.

= How do I add my own fonts? =

Register them in theme.json under settings.typography.fontFamilies, add the font files to assets/fonts/, and update inc/skin.php to preload the LCP-critical font via the halyard/preload_fonts filter. No other file needs editing.

= How do I add custom block styles? =

Register them in the skin_block_styles() function in inc/skin.php and add the CSS treatment in assets/css/skin.css. The CORE files do not need editing.

= Is it compatible with page builders? =

Halyard is a block theme built for the WordPress Site Editor. Page builders that support the block editor work alongside it; legacy drag-and-drop builders that bypass the block system are not supported.

== Changelog ==

= 1.6265.1511 =
Version numbering switches to the collection-wide scheme (1.Y{DDD}.{HHMM},
Toronto time) from this release forward, matching the Colophon core and every
other theme in the line.

* Regenerated commons-grid-2.jpg. The 1.0.1 image depicted children; sailing
  education sites in this niche often serve youth programs, and synthetic
  images that read as children are not a class of demo content this theme
  ships, regardless of generation quality. Replaced with adult volunteers;
  alt text updated to match.
* Corrected the Resources section to name the generator (FLUX.1 [schnell],
  Apache 2.0, via Cloudflare Workers AI) instead of describing the images only
  as "synthetic" — the origin is now stated plainly rather than implied.

= 1.0.1 =
Correctness pass over the 1.0.0 scaffold. Nothing here is cosmetic; each item
was a feature that did not work on a real install.

* Fixed six block-pattern references that still pointed at the core's `colophon/`
  namespace while the patterns register under `halyard/`. The blog index shipped
  with no h1, the 404 page with no message and no home link, and all three
  "no results" messages (index, archive, search) rendered as nothing.
* Fixed the same leak in parts/footer.html's block bindings (`colophon/copyright`)
  and in the `Categories:` header of all fourteen inherited patterns, which had
  them filed under an unregistered category in the inserter.
* Implemented the `footer-credit` binding source. parts/footer.html has always
  bound a paragraph to it and inc/bindings.php has always documented it, but it
  was never registered, so the credit rendered as an empty paragraph.
* Fixed the Anton preload, which was silently doing nothing: inc/skin.php passed
  an absolute URL to a filter whose consumer drops any entry containing "://"
  and prefixes the theme URI itself. The LCP font is now actually preloaded.
* Replaced templates/front-page.html with templates/page-edition.html, an opt-in
  page template. WordPress selects front-page.html whenever is_front_page() is
  true, which includes the default "Your latest posts" setting, and it outranks
  index.html — so the 1.0.0 front-page template replaced the site's blog index
  with this theme's demo content on a fresh install, and, having no
  wp:post-content, discarded the content of any page assigned as a static front
  page. It also carried no <main> element, so it was the one template with no
  main landmark and no target for the skip link WordPress injects at render time.
  The same design as a page template is correct in all three configurations.
* The masthead wordmark is wp:site-title instead of a hardcoded "Halyard", so
  the h1 names the site rather than the theme, and the edition dateline is bound
  to the publication-date source instead of a hardcoded "Edition 26.09" that
  would have been stale a month after release.
* Accessibility: base-accent (#c1382b) against base-ground measured 4.16:1, below
  the WCAG 1.4.3 AA floor for normal text — and base-ground is the footer
  background, where theme.json colours every link with it. Darkened to #b53528,
  which measures 4.59:1 there and 5.21:1 on base-paper, verified by relative-
  luminance calculation across every text/background pair the theme actually
  uses. The five style variations carry their own full palettes and were
  unaffected.
* Accessibility: the four demo photographs had alt text that instructed the site
  owner ("Placeholder — replace with a real photo…") rather than describing the
  image, and three of them shared one identical string. Each now describes what
  is in the frame.
* readme.txt: corrected the Installation step that told people to search for
  "Colophon", the feature list that still claimed a system font stack after the
  theme began bundling fonts, and the missing Resources entries for the four
  bundled photographs.
* Added languages/ with the translator notes the core ships, including the two
  make-pot traps specific to this theme line (block-template HTML is not
  scanned; the text domain must stay a string literal).
* Removed the unused `halyard-edition-format` custom token, which emitted a
  meaningless CSS custom property and was read by nothing.

= 1.0.0 =
Initial release. Reskinned from the Colophon core with:

* Palette, type pairing (Anton + Archivo + IBM Plex Mono), and button treatment
  reworked into a bold, condensed, shipping-bulletin register — see the design
  brief for the full etymology and precedent list.
* Two new patterns: edition-masthead (the huge two-line wordmark + dated-edition
  stamp) and on-the-water (a photo-and-listing calendar plus a photo grid) — the
  page as a periodical edition. (1.0.0 composed these into a front-page.html;
  see 1.0.1 for why that became a page template instead.)
* Real self-hosted OFL font files (Anton static, Archivo variable, IBM Plex
  Mono 400/500 static) replacing the core's system-font fallback.
* Demo photography is placeholder/generated — see each pattern's alt-text
  instruction for what a real deployment must replace it with.

The CORE history below (1.6252.1241 and earlier) is Halyard's inherited
foundation, kept for the archaeological record per the collection's own
documentation doctrine — it predates Halyard's existence as a theme.

= 1.6252.1241 =
Fixes for WordPress.org theme review ticket #276778 (closed not-approved):

* Removed inc/github-updater.php entirely — not merely excluded from the WP.org
  build. Colophon's own submission zip had leaked the file even with the prior
  .distignore-based exclusion, because a build-time step is one more thing that
  can fail. A theme still wanting a GitHub-release self-updater can keep its own
  copy; core no longer tracks or syncs the path.
* Fixed Theme URI — it pointed to a page that 404s; now points to the theme's
  actual download page (thisismyurl.com/downloads/colophon/).
* Fixed a real PHP warning the reviewer caught under WP_DEBUG: theme.json's
  settings.blocks.core/navigation.typography used the plural preset-list key
  ("fontSizes": false) where the singular UI-toggle key was intended
  ("fontSize": false). The plural key holds an array of preset objects; setting
  it to a boolean made WordPress core try to foreach() over false. Confirmed
  fixed by activating the theme with WP_DEBUG on and rendering front page,
  single, page, search, and 404 templates with a clean debug.log.
* readme.txt already carried the required copyright/license sections and the
  accessibility-ready tag was already removed as of 1.6201.1029 — both were
  cited in the same rejection but were fixed before this release; noted here
  for the record.
* tools/bump-version.sh: fixed a stale sed pattern (const VERSION → the actual
  define('HALYARD_VERSION', ...)) that had been silently failing to update
  inc/bootstrap.php on every release since the namespace-to-prefix migration,
  and a missing-jq code path that silently no-opted colophon.json's version
  bump. update_file() now fails loudly instead of reporting success on a
  no-op match.
* Removed templates/front-page.html. It always wins over index.html when
  WordPress considers the request the front page — including the default
  "Your latest posts" configuration, not only a static front page — and a
  front-page.html built around wp:post-content alone has no post context to
  render there, so it shipped blank. The front page now falls through to
  index.html (posts-on-front) or page.html (a static page assigned as front
  page); both already had working content.
* i18n: block-template HTML isn't scanned by wp i18n make-pot. Several
  hardcoded strings across templates/ and parts/header.html — a "Latest
  posts" heading, three query-no-results messages, a 404 message, the skip
  link, and several block-attribute overrides (post-excerpt's "Read more",
  the search block's label/button text, home-link's label, the post
  navigation labels) — are now either backed by a small hidden pattern
  (Inserter: false, translation-string carrier only) or simply no longer
  overridden, so WordPress core's own already-translated default applies.
  The hand-rolled skip link is gone entirely: core injects an equivalent one.
* templates/404.html: replaced wp:home-link (invalid outside core/navigation,
  and its rendered li was sitting inside a hand-written p) with a plain,
  translatable link.
* patterns/content-grid.php and feature-section.php: the four unconfigured
  wp:image blocks had no src attribute, so inserting either pattern and
  publishing without swapping the image shipped three or four broken images.
  They now reference a bundled placeholder.png.
* Accessibility: fixed real WCAG 1.4.3 contrast failures, not just claims
  about them. The 404 page's oversized "404" used base-rule as a text colour
  — a border/separator tint never meant to carry text, ~1.4:1 in every style
  variation — swapped for base-mid. patterns/site-footer.php's dark, inverted
  layout used base-mid (tuned for light backgrounds) for muted text on a dark
  background, failing everywhere; swapped for base-rule, which was already
  the right shade for a dark background and needed no new colour. base-mid
  itself was independently too light against its light backgrounds in the
  Forest, Slate, and Warm style variations, and base-accent too dark (Warm)
  or too dark for a dark theme (Midnight) against the backgrounds it
  actually appears on; all four are now within their real contrast floor,
  verified by direct WCAG relative-luminance calculation across every text/
  background pair actually used, not spot-checked.
* Regenerated languages/colophon.pot and reconciled a duplicate msgid: the
  copyright block binding (inc/bindings.php) and the Site Footer pattern
  share one "© %1$s %2$s. All rights reserved." string with two different
  translator comments, which is a make-pot warning; both now read the same.
* Replaced screenshot.png. The previous file was an unmodified copy of a
  preview/ mockup render using fonts and features (a display serif, a
  category eyebrow, a reading-time label, header buttons) that don't exist
  in the shipped theme. The current one is a real render of the actual
  theme with real demo content.
* Normalised line endings to LF across every shipped file type and added
  .gitattributes so a future edit on Windows doesn't reintroduce CRLF.

= 1.6201.1029 =
The theme line moves off a PHP namespace and onto a per-theme function prefix.
This is a breaking change for anyone building on Colophon, and it is not optional.
It is what the WordPress.org Theme Review Team requires.

WHY: ticket #280625 closed Masthead as not-approved. A namespace is accepted only
at the class level, because a WordPress site loads a large number of vendor
functions into the global scope, so a bare `function setup()` inside
`namespace Masthead;` still reads as unprefixed to the review tooling. Every
function, constant and class defined in the global scope needs the theme's own
prefix, no abbreviations. Colophon shipped the namespace pattern into every theme
generated from it, so the fix belongs here rather than in each theme.

* Core: removed `namespace Colophon;` from all eight files in inc/. 28 functions
  are now `halyard_*`, 8 constants are `HALYARD_*` (file-scope `const` converted
  to `define()`, since a bare global `const SLUG` is itself an unprefixed global
  symbol), and the WP-CLI class is `Halyard_CLI_Command`. Hook names are
  unchanged, so a theme's filters keep working across the upgrade.
* Core: 17 translated strings converted from `__()` to `esc_html__()`. Six keep
  bare `__()` deliberately, because they are escaped with `esc_html()` at the point of
  echo, and converting them would escape twice and render an apostrophe as a
  literal `&#039;`. Each carries an inline comment so the exception is not read as
  an oversight.
* CLI: the substitution that rewrote `namespace Colophon;` is replaced by three
  prefix rules: `HALYARD_` to `{SLUG}_`, `Halyard_` to `{Studly}_`, and
  `halyard_` to `{slug}_`, applied before the quote-anchored rules so a callback
  string like `'halyard_setup'` is rewritten as one symbol. The one-place-to-
  re-prefix property is preserved.
* CLI: version injection matched `const VERSION = '...';` and would have silently
  stopped working now that bootstrap.php uses `define()`. It matches the renamed
  constant instead. Caught before release; no generated theme shipped with a stale
  version because of it.
* CLI: `--namespace` was left with nothing to do by the change above. It now sets
  the class prefix (defaulting, as before, to the slug), so the flag means
  something again rather than being silently ignored.
* CLI: `colophon doctor`'s stray-identity check still grepped for
  `namespace Colophon;`, a string that no longer exists, so it would have
  reported a clean bill of health on a theme with a leaked core prefix. It now
  checks the three prefix forms.
* Tooling: `package-theme.sh` cloned `thisismyurl/halyard-<slug>`, which matches
  no repository that exists, because published theme repos are named for the theme alone.
  Every packaging run failed at the clone step. It also gained a
  `HALYARD_REPO_REF` override, because a theme's shipped line is not always its
  default branch.
* Docs: ARCHITECTURE.md §4 and GUIDE.md described the namespace mechanism as the
  design. Both now describe the prefix rules, and say plainly why the namespace
  was rejected, so nobody rediscovers it the hard way.

= 1.6160.1430 =
Submitted to WordPress.org (themes.trac ticket #276778); closed not-approved.
See 1.6252.1241 above for the fixes made in response.

= 1.6159.0900 =
* Expanded templates: added archive, front-page, page (wide), and page (blank).
* Added a block-pattern library: page hero, feature section, content grid, post list, pull quote, subscribe CTA, site footer, and main navigation.
* Added five style variations: Focus, Forest, Midnight, Slate, and Warm.
* Accessibility: explicit h1 on the blog index; archive and search titles set to heading level 1.
* Internationalisation: all block-pattern copy wrapped for translation.
* Prepared for the WordPress.org directory: removed development tooling and the optional GitHub self-updater; footer credit line bound to a filterable, translatable source.

= 1.6148 =
* Initial release.
* Templates: index, single, page, 404, search.
* Parts: header, footer.
* CORE/SKIN architecture with documented extension points.
* WCAG 2.2 AA scaffolding in base.css.
* Block bindings: copyright year and footer credit.

== Resources ==

* assets/images/placeholder.png — a flat, solid-colour PNG generated for this
  theme (no photographic or third-party content), used only as the default
  image in the Content Grid and Feature Section patterns so an unconfigured
  block never ships as a bare `<img>` with no `src`. Licensed GPLv2 or later,
  same as the rest of the theme.

* assets/images/on-the-water.jpg, commons-grid-1.jpg, commons-grid-2.jpg and
  commons-grid-3.jpg — the four demo photographs in the On the Water pattern.
  AI-generated using FLUX.1 [schnell] (Black Forest Labs, Apache License 2.0 —
  https://github.com/black-forest-labs/flux/blob/main/model_licenses/LICENSE-FLUX1-schnell)
  via Cloudflare Workers AI, prompted and selected by Christopher Ross. No
  photographer, stock library, or third-party source is involved, and no real
  identifiable person is depicted — every figure in every image is synthetic.
  Copyright 2026 Christopher Ross, licensed GPLv2 or later, same as the rest
  of the theme.

  commons-grid-2.jpg was deliberately generated depicting adult volunteers
  rather than children: a site in this niche often serves youth sailing
  programs, and synthetic images that read as children — even clearly
  AI-generated ones — are not a class of demo content this theme ships.

  They are demo content, not design assets: replace them with your own
  photographs before launch.

* Bundled fonts:
  - assets/fonts/anton/ — Anton, Copyright The Anton Project Authors
    (https://github.com/googlefonts/anton), SIL Open Font License 1.1.
  - assets/fonts/archivo/ — Archivo, Copyright The Archivo Project Authors
    (https://github.com/Omnibus-Type/Archivo), SIL Open Font License 1.1.
  - assets/fonts/ibm-plex-mono/ — IBM Plex Mono, Copyright IBM Corp.
    (https://github.com/IBM/plex), SIL Open Font License 1.1.
  Licence text: https://openfontlicense.org/

== License ==

Halyard WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

Bundled fonts (Anton, Archivo, IBM Plex Mono) are licensed under the SIL Open
Font License 1.1: https://openfontlicense.org/

== Copyright ==

Halyard WordPress Theme, Copyright 2026 Christopher Ross
Halyard is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
