# Callandor Pattern Authoring Guidelines

Detailed rules for creating and maintaining block patterns in the Callandor plugin.
See `CLAUDE.md` (in the plugin root) for the quick-reference summary.

---

## Use Native WordPress Blocks (CRITICAL)

- **NEVER use `wp:html` blocks** for content that can be created with native blocks
- **ALWAYS prefer native blocks**: `wp:list`, `wp:separator`, `wp:group`, `wp:columns`, `wp:heading`, `wp:paragraph`, etc.

**Why avoid HTML blocks?**
- Not editable in the block editor (shows as raw code)
- Don't support theme.json styling variables
- Break the pattern editing experience
- Poor accessibility and semantics

**Wrong example:**
```html
<!-- wp:html -->
<div class="custom-list">
  <div class="item"><img src="check.svg" alt=""><span>List item</span></div>
</div>
<!-- /wp:html -->
```

**Correct example:**
```html
<!-- wp:list {"className":"is-style-checkmark-list"} -->
<ul class="is-style-checkmark-list">
  <li>List item text</li>
</ul>
<!-- /wp:list -->
```

- **Separator blocks**: `<!-- wp:separator {"className":"is-style-dots"} /-->` for dotted/dashed lines
- **Custom list checkmarks**: apply `is-style-checkmark-list` class to `wp:list` blocks
- **List items**: ALWAYS use `<!-- wp:list-item -->` child blocks — bare `<li>` tags without block comments cause validation failures in WordPress 6.3+

**Wrong (bare li tags):**
```html
<!-- wp:list -->
<ul><li>Item one</li><li>Item two</li></ul>
<!-- /wp:list -->
```

**Correct (list-item blocks):**
```html
<!-- wp:list {"textColor":"main-accent","fontSize":"base"} -->
<ul class="has-main-accent-color has-text-color has-base-font-size">
    <!-- wp:list-item -->
    <li>Item one</li>
    <!-- /wp:list-item -->

    <!-- wp:list-item -->
    <li>Item two</li>
    <!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
```

---

## Use Theme.json Font Size Slugs (CRITICAL)

**NEVER hardcode font sizes as inline `rem`/`px` values** in block attributes or HTML. Always use theme.json font size slugs so editors can change sizes through the standard Gutenberg toolbar.

**Why this matters:**
- Hardcoded inline `style="font-size:2.25rem"` on a block bypasses the font size picker
- Editors cannot change the size through the toolbar — it shows a custom value that appears locked
- Slugs map to theme.json presets and display as named options (xs, sm, lg, 2xl, etc.)

**Wrong (not editable via toolbar):**
```json
{"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700"}}}
```
```html
<h3 ... style="font-size:2.25rem;font-weight:700">Heading</h3>
```

**Correct (fully editable via toolbar):**
```json
{"fontSize":"3xl","fontFamily":"montserrat","textColor":"main"}
```
```html
<h3 class="... has-3-xl-font-size">Heading</h3>
```

**Available font size slugs** (from Nynaeve/Moiraine theme.json):
`xs`, `sm`, `base`, `lg`, `xl`, `2xl`, `3xl`, `4xl`, `5xl`, `6xl`, `7xl`, `8xl`, `9xl`

**Rule**: Use `"fontSize":"slug"` as a top-level block attribute. Only use `style.typography.fontSize` for values that genuinely have no theme.json equivalent — and document why.

---

## Price Display with Multi-Size Typography (CRITICAL)

**NEVER use multiple `<span>` or `<strong>` tags with hardcoded `font-size` rem values** inside a paragraph block for price displays.

**Why this fails:**
- The spans are raw HTML inside the block — Gutenberg has no UI to expose per-span font sizes
- The paragraph-level font size control cannot override inline `style` attributes on child elements
- Editors see no way to change sizes without switching to Code Editor

**Wrong (paragraph with multiple hardcoded inline spans):**
```html
<!-- wp:paragraph -->
<p><span style="font-size:1.5rem">$</span><strong style="font-size:5rem">29</strong><span style="font-size:1.125rem">/ month</span></p>
<!-- /wp:paragraph -->
```

**Correct (heading block with fontSize slug + relative span for subtext):**
```html
<!-- wp:heading {"level":4,"textAlign":"center","textColor":"main","fontSize":"6xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
<h4 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-6-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">$29<span style="font-size:50%;font-weight:400;color:#465166">/month</span></h4>
<!-- /wp:heading -->
```

**Why this works:**
- The heading block has `fontSize:"6xl"` as a top-level attribute → editor can change it via the font size picker
- The `/month` span uses `font-size:50%` — a **relative** value that scales automatically when the heading size changes
- The `$` and price number are plain text in the heading at the slug size
- Reference: elayne `pricing-comparison.php`, `$480<span style="font-size:50%;opacity:0.7;">/month</span>`

---

## HTML Comments in Block Markup (CRITICAL)

**NEVER add HTML comments between opening tags and WordPress block comments** — this causes block validation errors.

**Wrong example:**
```html
<div class="wp-block-group alignwide">
  <!-- Column 1 -->  ← WRONG! Causes "Block validation failed"
  <!-- wp:group -->
```

**Correct example:**
```html
<div class="wp-block-group alignwide">
  <!-- wp:group -->  ← Only WordPress block comments allowed
```

**Why this fails**: WordPress compares the `save` function output (clean markup) with the stored content. Extra HTML comments create a mismatch → `Block validation: Block validation failed for 'core/group'`.

If you need organizational labels: place them as PHP comments outside the HTML string, not inside block markup.

---

## Block Comment Attribute Structure (CRITICAL)

Root-level attributes (`backgroundColor`, `layout`, `align`, `className`, `anchor`, `metadata`) must **NOT** be nested inside the `style` object.

**Wrong example:**
```json
{"style":{"spacing":{...},"backgroundColor":"base","layout":{"type":"default"}}}
```

**Correct example:**
```json
{"style":{"spacing":{...}},"backgroundColor":"base","layout":{"type":"default"}}
```

**Style object** should only contain CSS-related properties: `spacing`, `border`, `color`, `typography`, `dimensions`, `shadow`.

**Common root-level attributes**: `align`, `backgroundColor`, `textColor`, `gradient`, `layout`, `className`, `anchor`, `metadata`.

---

## Image Block Border Radius (CRITICAL)

When using border-radius on image blocks, ALWAYS use the simple string format.

**Wrong (causes "Block contains unexpected or invalid content" errors):**
```json
"style":{"border":{"radius":{"top":"8px","left":"8px","right":"8px"}}}
```

**Correct:**
```json
"style":{"border":{"radius":"8px"}}
```

Correct inline style: `style="border-radius:8px"` (NOT individual `border-top-left-radius` etc.)

---

## Column Block Border Color (CRITICAL)

When using border colors on column blocks, use the `borderColor` attribute (NOT nested `border.color`).

**Wrong:**
```json
"style":{"border":{"width":"1px","color":"#ebeced","radius":"8px"}}
```

**Correct:**
```json
"borderColor":"border-light","style":{"border":{"width":"1px","radius":"8px"}}
```

HTML must include: `has-border-color has-border-light-border-color` classes.

---

## Full-Width Pattern Layout (CRITICAL)

**Rule**: ALWAYS use `"layout":{"type":"default"}` on the outer `alignfull` group, then nest `constrained` groups inside for content areas.

**Wrong (causes horizontal gaps):**
```html
<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->
```

**Correct:**
```html
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- content here -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
```

---

## Pattern Background Spacing

**Always add complete margin reset** to patterns with background colors:
```json
"margin":{"top":"0","bottom":"0"}
```
(No units — NOT `"top":"0px"`.)

Without this, WordPress adds `margin-block-start` between blocks in constrained layouts, creating gaps between adjacent patterns with different backgrounds.

---

## Pattern Image Guidelines

- **NEVER use hardcoded media IDs** in `wp:image` blocks (e.g., `"id":59`) — causes database queries for non-existent media
- **NEVER use external URLs** (Unsplash, CDNs, etc.) — all images must be bundled
- **ALWAYS use the plugin URL constant**:
  ```php
  <?php echo esc_url( CALLANDOR_PLUGIN_URL ); ?>assets/images/patterns/filename.webp
  ```
- **Storage**: all pattern images in `assets/images/patterns/` directory
- **Format**: WebP, under 200KB per image
- **Naming**: lowercase with hyphens (e.g., `team-member-1.webp`, `hero-background.webp`)
- **Sizes**: team members 600×600px, heroes 1200×800px
- **Credits**: document sources in `README.md` and `readme.txt`
- **Licenses**: Unsplash License, CC0, or GPL-compatible only

---

## Adding Patterns to Pages via WP-CLI

When programmatically adding pattern content to pages, use pattern references — NOT direct PHP file inclusion.

**Wrong (causes fatal errors):**
```bash
# FAILS — WordPress functions not available in standalone PHP
wp post update 123 \
  --post_content="$(php -r 'include "patterns/my-pattern.php";')"
```

**Correct:**
```bash
# WORKS — WordPress evaluates the pattern with all functions available
wp post update 123 \
  --post_content='<!-- wp:pattern {"slug":"callandor/pricing/pricing-table"} /-->' \
  --path=site/web/wp \
  --url=imagewize.test
```
