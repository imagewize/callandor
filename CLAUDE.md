# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Callandor is a WordPress block pattern library plugin designed for Sage 11 hybrid themes (Nynaeve and Moiraine). It provides pre-built, business-focused block patterns that integrate with theme.json and Tailwind CSS.

**Key Technologies:**
- WordPress 6.6+ with Gutenberg block editor
- PHP 8.2+
- WordPress Coding Standards (WPCS)
- Composer for dependency management
- MIT License

## Development Commands

### Code Quality
```bash
# Check WordPress coding standards
composer phpcs

# Auto-fix coding standards issues
composer phpcbf

# Run static analysis
composer phpstan
```

### Installation
```bash
# Install dependencies (dev environment)
composer install

# Install for production
composer install --no-dev
```

### WordPress Integration
This is a WordPress plugin - test in actual WordPress environment:
1. Symlink or copy to `wp-content/plugins/callandor`
2. Activate via WP Admin or `wp plugin activate callandor`
3. Access admin at **Appearance → Callandor Patterns**
4. Insert patterns via Block Editor → Patterns tab

## Architecture

### Plugin Initialization Flow
1. `callandor.php` - Entry point, defines constants, registers hooks
2. `plugins_loaded` hook → `callandor_init()` function
3. Instantiates `Callandor_Pattern_Loader` and `Callandor_Admin_Settings`
4. Pattern Loader registers categories and scans pattern files on `init` hook
5. Admin Settings adds menu page and settings fields

### Core Classes

**`Callandor_Pattern_Loader` (includes/class-pattern-loader.php)**
- Scans `patterns/` directory recursively
- Loads PHP files that return pattern arrays
- Registers patterns using `register_block_pattern()`
- Registers 7 custom categories (hero, cta, features, testimonials, pricing, team, contact)
- Auto-prefixes categories with `callandor-`

**`Callandor_Admin_Settings` (includes/class-admin-settings.php)**
- Creates admin page under Appearance menu
- Displays pattern library browser grouped by category
- Manages settings (license key placeholder for Phase 2)
- Shows pattern metadata (slug, status, category)

### Pattern File Structure

Patterns are PHP files in `patterns/{category}/` that return arrays:

```php
return array(
    'title'         => __( 'Pattern Title', 'callandor' ),
    'description'   => __( 'Pattern description', 'callandor' ),
    'categories'    => array( 'hero', 'cta' ),  // Auto-prefixed with 'callandor-'
    'keywords'      => array( 'keyword1', 'keyword2' ),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group -->...<!-- /wp:group -->',
);
```

**Pattern Content Format:**
- WordPress block markup (<!-- wp:blockname {} -->)
- Uses theme.json color slugs: `primary`, `primary-accent`, `base`, `main`, etc.
- Uses theme.json font size slugs: `xs`, `sm`, `base`, `lg`, `xl`, `2xl`, etc.
- Uses spacing variables: `var:preset|spacing|40`, `var:preset|spacing|50`, etc.

### Theme Integration

**Critical:** Patterns must use Nynaeve/Moiraine theme design tokens:

**Colors** (reference in patterns):
- `primary` (#017cb6) - Brand blue
- `primary-accent` (#e6f4fb) - Light blue accent
- `primary-dark` (#026492) - Dark blue
- `main` (#171b23) - Text black
- `main-accent` (#465166) - Secondary text
- `base` (#ffffff) - White background
- `secondary` (#98999a) - Gray
- `tertiary` (#f5f5f6) - Light gray tint
- `border-light` (#ebeced), `border-dark` (#cbcbcb)

**Typography:**
- Font families: `open-sans`, `menlo`, `montserrat`
- Font sizes: `xs` (0.75rem) through `9xl` (8rem)

**Spacing:**
- `20` (1rem), `40` (1.5-2rem), `50` (2-3rem), `60` (3-4rem)

## File Naming Conventions

**WordPress Coding Standards:**
- Classes: `class-pattern-loader.php` (lowercase with hyphens)
- Class names: `Callandor_Pattern_Loader` (underscores)
- Functions: `callandor_init()` (prefix with `callandor_`)
- Hooks: `callandor_{hook_name}` (always prefixed)
- Text domain: `callandor` (for translations)

## WordPress Coding Standards (PHPCS)

All code must follow WordPress Coding Standards. Use the following commands:

```bash
# Check coding standards
composer phpcs

# Auto-fix coding standards issues
composer phpcbf
```

**Key PHPCS Rules:**
- Inline comments must end with periods (`.`)
- Use proper spacing around operators and assignments
- Add DocBlocks for all functions with `@param` and `@return` tags
- Escape outputs: `esc_html()`, `esc_attr()`, `wp_kses_post()`
- Sanitize inputs: `sanitize_text_field()`, `sanitize_textarea_field()`
- Use `phpcs:ignore` comments only when absolutely necessary (e.g., `$_GET` without nonce for WordPress-handled forms)
- Always add spaces before inline comments and end with proper punctuation

**Configuration:**
- Custom rules defined in `phpcs.xml`
- Excludes: vendor/, node_modules/, assets/, languages/, docs/, wordpress-stubs.php
- Modified WordPress standard to allow shorter class file names (without full class prefix)

**Before Committing:**
1. Run `composer phpcs` to check for errors
2. Run `composer phpcbf` to auto-fix what can be fixed
3. Manually fix any remaining errors
4. Verify with `composer phpcs` again

## Adding New Patterns

1. Create PHP file in appropriate `patterns/{category}/` subdirectory
2. Follow pattern array structure (see above)
3. Use theme.json color/font/spacing slugs
4. Include translatable strings with `__()` function
5. Pattern auto-registers on next page load (no cache clear needed)

**Business Focus:** Patterns target SME businesses - use ROI-focused, professional copy.

## Phase Roadmap

**Phase 1 (Current):** Local pattern library, theme.json integration, basic admin UI
**Phase 2 (Planned):** Premium patterns, license key system, remote API, caching
**Future:** Pattern variations, import/export, custom builder

## Theme Compatibility Paths

- Primary: `~/code/nynaeve` (Nynaeve theme v2.0.5)
- Secondary: `~/code/moiraine` (Moiraine theme - future)
- Plugin: `~/code/callandor` (this repo)

Both themes share similar theme.json structure and Tailwind config.

## Distribution

**Composer/Bedrock:**
```bash
composer require imagewize/callandor
```

**WordPress.org:** Plugin follows WordPress.org requirements (readme.txt, proper headers, GPL-compatible MIT license)

## Important Notes

- Always sanitize inputs with `sanitize_text_field()`, `sanitize_textarea_field()`
- Always escape outputs with `esc_html()`, `esc_attr()`, `wp_kses_post()`
- Pattern slugs: `callandor/{category}/{filename}`
- Admin page hook: `appearance_page_callandor-patterns`
- Constants: `CALLANDOR_VERSION`, `CALLANDOR_PLUGIN_DIR`, `CALLANDOR_PLUGIN_URL`
- No build process - PHP/CSS/JS files are production-ready
