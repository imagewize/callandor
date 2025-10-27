# Callandor Pattern Library Plugin - Build Instructions

## Project Overview
Build a WordPress plugin named **Callandor** that adds block pattern support to the Nynaeve (Sage 11) hybrid theme. Inspired by Astra's Spectra plugin, with local patterns and optional premium patterns via license key.

## Development Environment
- **Primary Theme:** ~/code/nynaeve (Nynaeve theme - v2.0.5)
- **Secondary Theme:** ~/code/moiraine (Moiraine theme - future compatibility)
- **Plugin Repository:** ~/code/callandor (this repository)
- **WordPress Version:** 6.6+
- **PHP Version:** 8.2+

**Note:** Plugin must be compatible with both Nynaeve and Moiraine themes, as they share similar theme.json structure and Tailwind configuration.

## Plugin Details
- **Name:** Callandor
- **Description:** Pattern library for Sage 11 hybrid themes (specifically Nynaeve theme)
- **Text Domain:** callandor
- **Version:** 1.0.0 (start with MVP)

## Technical Requirements

### 1. Plugin Structure
```
callandor/
├── callandor.php                    # Main plugin file
├── composer.json                    # Packagist/Bedrock compatibility
├── includes/
│   ├── class-pattern-loader.php     # Pattern registration
│   ├── class-admin-settings.php     # Admin UI
│   ├── class-remote-api.php         # Remote server communication (Phase 2)
│   ├── class-license-manager.php    # License validation (Phase 2)
│   └── class-pattern-cache.php      # Local caching (Phase 2)
├── patterns/
│   ├── hero/
│   ├── cta/
│   ├── testimonials/
│   ├── features/
│   └── ...                          # Organized by category
├── assets/
│   ├── css/
│   │   └── admin.css
│   ├── js/
│   │   └── admin.js
│   └── images/
│       └── thumbnails/
└── readme.txt
```

**Important Notes:**
- Include `composer.json` for Packagist/Bedrock installation via `composer require imagewize/callandor`
- Follow WordPress Coding Standards (WPCS) for potential WordPress.org submission
- Use WordPress.org plugin directory structure and requirements

### 2. Theme Integration
**CRITICAL:** Use Imagewize theme styling from attached project files:

**Colors (from theme.json):**
- `primary` (#017cb6) - Brand
- `primary-accent` (#e6f4fb) - Brand Accent  
- `primary-dark` (#026492) - Brand Dark
- `main` (#171b23) - Contrast
- `main-accent` (#465166) - Contrast Accent
- `base` (#ffffff) - Base
- `secondary` (#98999a) - Base Accent
- `tertiary` (#f5f5f6) - Tint
- `border-light` (#ebeced)
- `border-dark` (#cbcbcb)

**Fonts (from theme.json):**
- Open Sans (primary)
- Menlo (monospace)
- Montserrat

**Reference in patterns as:**
```html
<!-- wp:group {"backgroundColor":"primary","textColor":"base"} -->
```

**Tailwind Classes:** Available from tailwind.config.js (use utility classes like `bg-primary`, `text-main`, `font-open-sans`, etc.)

### 3. Pattern File Format
Store patterns as PHP files returning arrays:

```php
<?php
/**
 * Pattern: Hero with CTA
 * Category: hero
 */

return [
    'title'       => 'Hero Section with CTA',
    'description' => 'Business-focused hero with headline and call-to-action',
    'categories'  => ['hero', 'cta'],
    'keywords'    => ['hero', 'call-to-action', 'landing', 'business'],
    'content'     => '<!-- wp:group {"backgroundColor":"primary","textColor":"base","className":"p-8"} -->
        <div class="wp-block-group has-primary-background-color has-base-color p-8">
            <!-- Block content here -->
        </div>
        <!-- /wp:group -->',
    'viewportWidth' => 1200,
];
```

### 4. Core Functionality

**Pattern Loader (class-pattern-loader.php):**
- Scan `/patterns` directory recursively
- Load pattern PHP files
- Register using `register_block_pattern()`
- Hook into `init` action
- Register custom pattern categories

**Admin Settings (class-admin-settings.php):**
- Settings page under "Appearance" → "Callandor Patterns"
- License key field (placeholder for Phase 2)
- Pattern library browser
- Enable/disable patterns/categories

## MVP Build Checklist (Phase 1)

### Step 1: Plugin Foundation
- [ ] Create `callandor.php` with proper plugin headers
- [ ] Add activation/deactivation hooks
- [ ] Set up autoloading for classes
- [ ] Create folder structure

### Step 2: Pattern Loader
- [ ] Build `class-pattern-loader.php`
- [ ] Implement pattern file scanning
- [ ] Register patterns with WordPress
- [ ] Create custom pattern categories:
  - Hero
  - CTA (Call-to-Action)
  - Features
  - Testimonials
  - Pricing
  - Team
  - Contact

### Step 3: Create Initial Patterns
Build 5-7 starter patterns using Imagewize styling:

1. **Hero Section** - Business-focused with CTA
2. **Feature Grid** - 3-column service showcase
3. **CTA Block** - Newsletter/contact signup
4. **Testimonial** - Client quote with image
5. **Pricing Table** - Service comparison (2-3 columns)

**Pattern Requirements:**
- Use theme.json color slugs
- Mobile-responsive
- Align with contentSize (55rem) and wideSize (64rem)
- Business-focused copy (SME audience)

### Step 4: Basic Admin Interface
- [ ] Settings page registration
- [ ] List available patterns
- [ ] Show pattern metadata
- [ ] License key input field (non-functional for now)

### Step 5: Testing
- [ ] Patterns appear in block inserter
- [ ] Categories display correctly
- [ ] Colors match theme.json
- [ ] Responsive on mobile/tablet/desktop
- [ ] Works with Gutenberg editor

## Phase 2 (Future - Not for initial build)
- Remote API client for premium patterns
- License validation system
- Pattern caching with transients
- Auto-update functionality

## Coding Standards & Distribution

### WordPress Coding Standards (WPCS)
Follow WordPress coding standards for potential WordPress.org submission:
- **File Naming:** Use lowercase with hyphens (`class-pattern-loader.php`)
- **Class Naming:** Use `Class_Name_With_Underscores`
- **Function Naming:** Use `function_name_with_underscores()`
- **Hooks:** Prefix all hooks with `callandor_`
- **Text Domain:** Use `callandor` consistently
- **Security:** Sanitize inputs, escape outputs, use nonces
- **Documentation:** Follow PHPDoc standards

### Composer Configuration
Include `composer.json` for Packagist distribution:
```json
{
  "name": "imagewize/callandor",
  "type": "wordpress-plugin",
  "description": "Pattern library for Sage 11 hybrid themes",
  "keywords": ["wordpress", "plugin", "patterns", "blocks", "sage"],
  "license": "MIT",
  "require": {
    "php": ">=8.2",
    "composer/installers": "~1.0"
  }
}
```

### WordPress.org Requirements
If publishing to WordPress.org plugin directory:
- Include `readme.txt` with proper formatting
- Add screenshots in `/assets/` directory
- Follow WordPress.org SVN structure
- Include proper license headers (GPL v2 or later)
- Pass WordPress Plugin Check validation

## Key WordPress Functions to Use
- `register_block_pattern()` - Register patterns
- `register_block_pattern_category()` - Register categories
- `add_action('init', ...)` - Hook for registration
- `add_menu_page()` / `add_submenu_page()` - Admin pages
- `get_option()` / `update_option()` - Settings storage
- `wp_enqueue_style()` / `wp_enqueue_script()` - Asset loading
- `esc_html()`, `esc_attr()`, `wp_kses_post()` - Output escaping
- `sanitize_text_field()`, `sanitize_textarea_field()` - Input sanitization

## Testing Environment
- WordPress 6.4+
- Gutenberg block editor
- Nynaeve (Sage 11) theme active
- PHP 8.0+

## Success Criteria
✅ Plugin activates without errors
✅ Patterns visible in block inserter under custom categories
✅ Patterns use correct Imagewize colors/fonts
✅ Admin page accessible and functional
✅ Patterns insert and display correctly in editor and frontend

## Business Context
**Target Users:** SME business owners using Nynaeve theme
**Content Focus:** Business outcomes, ROI, lead generation
**Pattern Types:** E-commerce, services, lead gen, content marketing

---

Start with Step 1 (plugin foundation) and build incrementally. Test each component before moving to the next. Focus on MVP functionality - remote/premium features come in Phase 2.