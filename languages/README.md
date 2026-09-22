# Translations

This directory holds Halyard's translation files.

`halyard.pot` is the translation template. Regenerate it whenever a
user-facing string changes — before every release, and always before a
WordPress.org submission:

```
wp i18n make-pot . languages/halyard.pot --domain=halyard
```

Two things `make-pot` will not do for you:

1. **Block-template HTML is not scanned.** `templates/*.html` and
   `parts/*.html` are static files; PHP extraction never sees them. Any
   user-facing string in a template must live in a PHP pattern under
   `patterns/` (see the `hidden-*` patterns, which exist purely as
   translation-string carriers) or come through a block binding
   registered in `inc/bindings.php`.

2. **The text domain must be the string literal `'halyard'`.** `make-pot`
   reads source statically and does not resolve `HALYARD_SLUG`; hand it a
   constant and it silently extracts nothing.

This file is excluded from the distributed theme zip by `.distignore`.
