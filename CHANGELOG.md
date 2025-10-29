# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned for Phase 2
- Premium pattern library with license key system
- Remote pattern synchronization
- Auto-update functionality
- Additional pattern categories
- Pattern preview in admin interface

## [1.0.0] - 2025-10-29

### Added
- **Pattern Caching System** for improved performance
  - Patterns are now cached using WordPress transients (24-hour expiration)
  - Significantly reduces file system scanning overhead on each page load
  - Cache automatically clears on plugin updates and theme switches
  - Manual cache clearing via admin interface
- **Cache Management Interface** in admin settings
  - New "Cache Management" section under Appearance → Callandor Patterns
  - Clear cache button for developers and when modifying patterns
  - Success notification when cache is cleared
  - Useful for pattern development workflow
- **New Client Reviews - Orange Background Pattern**
  - Professional testimonial layout with vibrant orange background (#ff6b35)
  - Three-column review cards with profile images
  - White text on orange for high contrast and modern aesthetic
  - Bundled profile images (DALL-E generated professional portraits)
  - Responsive design with centered layout (900px max-width)
  - Perfect for social proof sections and client testimonials
- **4 New Professional Profile Images** for testimonial patterns
  - DALL-E generated stylized profile portraits (WebP format)
  - Professional, diverse representation
  - Optimized file sizes (18-34KB each)
  - Modern illustration style for testimonial sections

### Changed
- **Updated README.md** to clarify theme compatibility
  - Emphasized plugin is for non-block and hybrid themes (like Sage 11)
  - Added clear note that full block themes (FSE) don't need this plugin
  - Explained why this plugin exists (PHP registration layer for classic/hybrid themes)
  - Better positioning for target audience
- **Enhanced Contact Information Pattern**
  - Updated heading typography: 3.5rem font size with 1.1 line-height
  - Updated subheading: 1.125rem with 1.6 line-height for better readability
  - Improved button styling with explicit Open Sans font family
  - Enhanced spacing with proper margin control (bottom: 40)
  - Modern 8px border radius on CTA button
  - Better visual hierarchy with improved typography scale
- **Enhanced CTA Newsletter Pattern**
  - Updated heading: 3rem font size with 1.2 line-height for better proportion
  - Updated description: 1.125rem with 1.6 line-height
  - Improved button styling with consistent padding and border radius
  - Added explicit font family declarations (Open Sans)
  - Better margin control for tighter, more professional layout
  - Maintains 60/40 column split with proper alignment
- **Redesigned Pricing Table Pattern** with modern, clean aesthetic
  - **Typography Overhaul:**
    - Main heading: "Simple, Transparent Pricing" with 4.5rem bold Montserrat font
    - Plan titles: Increased to 2.25rem bold with Montserrat for stronger hierarchy
    - Price display: Dramatic 5rem numbers with styled 1.5rem dollar signs and 1.125rem "/month" text
    - Feature lists: Larger 1.125rem font with generous 2.0 line-height for readability
  - **Layout & Spacing:**
    - Increased card padding from 40 to 50 for more breathing room
    - Better vertical rhythm with proper spacing between elements
    - Clean section background changed from tertiary to base (white)
  - **Visual Design:**
    - Added 8px rounded corners to all cards for modern aesthetic
    - Featured card: Thicker 3px primary border (was 2px) for better emphasis
    - Side cards: Subtle 1px border with same rounded corners
    - Removed "MOST POPULAR" badge for cleaner, simpler design
    - All cards now use white/base background (removed primary-accent tint)
  - **Button Styling:**
    - Featured card: Solid primary button with clean design
    - Side cards: Outlined buttons with 2px primary border and primary text
    - Updated all CTAs to "Start Now" for consistency
    - Consistent 1rem padding with 8px border radius
  - **Content Updates:**
    - Updated plan names: "Starter", "Basic", "Plus"
    - Updated pricing: $1, $29, $49 (more accessible entry points)
    - Simplified features to match modern SaaS pricing tables
    - Focus on website counts, SSL, custom domains, and key features

### Technical Details
- **Pattern Caching Implementation**
  - Cache key: `callandor_patterns_cache`
  - Expiration: `DAY_IN_SECONDS` (24 hours)
  - Storage: WordPress transients (options table)
  - Auto-clear hooks: `upgrader_process_complete`, `switch_theme`
  - Manual clear: Admin button with nonce verification
- **Admin Interface Enhancements**
  - New `handle_clear_cache()` method with proper nonce verification
  - Cache status messaging via WordPress admin notices
  - Security: `manage_options` capability check for cache clearing
  - Redirect with query parameter for success notification
- **Pattern Loader Updates**
  - Modified `register_patterns()` to check cache before scanning files
  - Updated `load_patterns_from_directory()` to accept cache array reference
  - Updated `register_pattern_from_file()` to populate cache during registration
  - New `clear_cache()` public method for external cache clearing
- **Typography Improvements**
  - Consistent font sizing across all updated patterns
  - Explicit line-height declarations for better readability
  - Font family attributes added where missing
  - Improved spacing with theme spacing tokens

### Performance
- **Significant performance improvement** from pattern caching
  - Eliminates recursive directory scanning on every page load
  - Reduces file system I/O operations
  - Faster admin page load times
  - Better scalability for larger pattern libraries

### Documentation
- Updated README.md with clearer plugin positioning
- Added cache management documentation
- Improved theme compatibility section
- Clarified target audience (non-block/hybrid themes)

### Release Notes
This is the first stable 1.0.0 release of Callandor! The plugin is production-ready with:
- 9 professionally designed patterns
- Pattern caching for optimal performance
- Enhanced typography and styling consistency
- Comprehensive admin interface
- Full WordPress Coding Standards compliance
- Tested with Nynaeve theme and WordPress 6.7

**Breaking Changes:** None - fully backward compatible with beta versions

**Upgrade Path:** Automatic - cache will be rebuilt on first load after update

## [1.0.0-beta.12] - 2025-10-28

### Fixed
- **Hero with CTA pattern button validation error**
  - Fixed "Block contains unexpected or invalid content" error on second button
  - Added missing `textColor` attribute to ensure proper class generation
  - WordPress now correctly generates `has-text-color` class for validation

### Changed
- **Hero with CTA buttons now use theme brand color for consistency**
  - Changed from custom indigo color to theme's `primary` brand color (#017cb6)
  - First button: `primary` background with white text
  - Second button: `primary` text and border color with white background
  - Better integration with Nynaeve theme design system
  - Maintains modern design with proper theme color tokens

### Technical Details
- First button: Uses `backgroundColor="primary"` instead of custom hex color
- Second button: Uses `textColor="primary"` and `borderColor="primary"` with outline style
- Both buttons maintain `8px` border radius for modern aesthetic
- All colors now properly reference theme.json palette tokens
- Fixed button validation by adding proper `textColor` attribute and `has-text-color` class

## [1.0.0-beta.11] - 2025-10-28

### Changed
- **Hero with CTA pattern redesign** for modern SaaS aesthetic
  - Updated background from brand blue to clean white for better versatility
  - Shortened heading to "Launch your idea with confidence" (more impactful, startup-focused)
  - Changed heading color from white to black (`main`) for better contrast on white background
  - Redesigned subheading to be more descriptive and business-focused
  - Updated subheading color to gray (`main-accent`) for proper typography hierarchy
  - Reduced button border radius from default (very rounded) to `8px` for modern, subtle corners
  - All typography uses Open Sans font family for clean, professional appearance
  - Pattern now follows modern startup/SaaS design trends while maintaining theme consistency

### Technical Details
- Background: White (`base`) instead of brand blue for better content versatility
- Heading: Black (`main` color) at `5xl` size for bold impact
- Subheading: Gray (`main-accent` color) at `lg` size for readability hierarchy
- Buttons: `8px` border radius for modern, subtle rounded corners
- Responsive layout maintained: stacks on mobile, centers on all screen sizes

## [1.0.0-beta.10] - 2025-10-28

### Fixed
- **CRITICAL**: Fixed double horizontal padding issue introduced in beta.9
  - Beta.9 added explicit horizontal padding to inner constrained groups
  - This conflicted with WordPress's automatic `has-global-padding` class
  - WordPress applies theme.json global padding automatically when `useRootPaddingAwareAlignments: true`
  - Result: Content had double the intended horizontal padding (2x `var:preset|spacing|50`)
  - **Solution**: Removed explicit horizontal padding from inner constrained groups
  - WordPress now automatically applies correct padding via `has-global-padding` class
  - Patterns now properly leverage WordPress's built-in root padding awareness system
- **CRITICAL**: Fixed column width inconsistency across all patterns
  - Columns blocks were receiving extra horizontal padding from theme CSS rule at app.css:691-694
  - Theme rule `:where(.is-layout-constrained) > :not(.alignfull):not(.alignwide)` was adding padding to columns
  - This made pattern columns appear narrower than custom blocks like CTA Columns
  - **Solution**: Added `"align":"wide"` attribute to all columns blocks in all patterns
  - Columns now use theme's `wideSize: 64rem` and are excluded from the extra padding rule
  - All patterns now have consistent, proper column widths matching theme standards
- **Fixed**: Hero Two-Tone heading color visibility issue
  - Heading text defaulted to white color from theme's h1 CSS rule (app.css:96-102)
  - "Hero" and "2.0" text were invisible against white background
  - **Solution**: Added explicit `textColor:"main"` attribute to heading block
  - Now displays proper two-tone effect: "Hero" (black) + "Section" (primary blue) + "2.0" (black)

### Changed
- **All patterns updated to remove duplicate horizontal padding:**
  - contact/contact-info.php
  - cta/cta-newsletter.php
  - features/feature-grid.php
  - hero/hero-with-cta.php
  - hero/hero-two-tone.php
  - pricing/pricing-table.php
  - team/team-grid.php
  - testimonials/testimonial-card.php
- **All patterns with columns updated to use wide alignment:**
  - contact/contact-info.php - columns now `align="wide"`
  - cta/cta-newsletter.php - columns now `align="wide"`
  - features/feature-grid.php - columns now `align="wide"`
  - hero/hero-two-tone.php - columns now `align="wide"`
  - pricing/pricing-table.php - columns now `align="wide"`
  - team/team-grid.php - columns now `align="wide"`
  - testimonials/testimonial-card.php - columns now `align="wide"`

### Technical Details
- Outer group: `align="full"` with vertical padding only (top/bottom)
- Inner group: `layout:{"type":"constrained"}` with **NO explicit horizontal padding**
- Columns blocks: `align="wide"` to prevent extra padding from theme CSS rules
- WordPress automatically adds `has-global-padding` class to constrained layouts inside full-width blocks
- Theme.json global styles (lines 6-10) define horizontal padding: `var(--wp--preset--spacing--50)`
- Columns use theme's `wideSize: 64rem` for consistent width across all patterns
- This approach follows WordPress core's `useRootPaddingAwareAlignments` standard
- All 8 patterns pass WordPress Coding Standards (PHPCS) validation

### Why Beta.9 Didn't Work
- Beta.9 approach: Explicit `padding-left` and `padding-right` on inner group
- Conflicted with automatic padding from `has-global-padding` class
- Created double padding (theme padding + pattern padding)
- Beta.10 removes explicit padding, relies on WordPress automatic system
- Columns without `align="wide"` received extra padding from theme's constrained layout rules
- Beta.10 adds wide alignment to columns for consistent width behavior
- Cleaner, more maintainable, follows WordPress best practices

## [1.0.0-beta.9] - 2025-10-28

### Fixed
- **CRITICAL**: Fixed full-width block padding issue affecting all pattern sections
  - Pattern sections with `align="full"` were touching viewport edges on full-width layouts
  - Root cause: Combining `align="full"` with `layout:{"type":"constrained"}` caused conflicting layout behavior
  - Changed structure to use nested groups: outer full-width with vertical padding, inner constrained with horizontal padding
  - This matches the Nynaeve theme's architecture and follows WordPress modern theme approach
  - All patterns now properly respect `var:preset|spacing|50` horizontal padding (2rem → 3rem responsive)
  - Content properly centers within 55rem max-width from theme.json
  - Resolved layout conflicts following WordPress `useRootPaddingAwareAlignments` standard

### Changed
- **All patterns restructured for proper full-width handling:**
  - contact/contact-info.php
  - cta/cta-newsletter.php
  - features/feature-grid.php
  - hero/hero-with-cta.php
  - hero/hero-two-tone.php
  - pricing/pricing-table.php
  - team/team-grid.php
  - testimonials/testimonial-card.php

### Technical Details
- Outer group: `align="full"` with `layout:{"type":"default"}`, vertical padding only (top/bottom)
- Inner group: `layout:{"type":"constrained"}`, horizontal padding only (left/right)
- Pattern content now properly indented under inner group
- All 8 patterns pass WordPress Coding Standards (PHPCS) validation
- Follows Nynaeve theme's hybrid layout approach used by CTA Columns, Multi-Column Content, Review Profiles

## [1.0.0-beta.8] - 2025-10-28

### Fixed
- **CRITICAL**: Fixed "Block contains unexpected or invalid content" errors in Team Grid pattern
  - Image blocks were using incomplete border-radius object format missing the "bottom" property
  - Changed all image blocks to use simple string format: `"border":{"radius":"8px"}`
  - Updated inline styles from individual corner properties to unified `border-radius:8px`
  - Pattern now loads correctly in WordPress block editor without validation errors
- **CRITICAL**: Fixed "Block contains unexpected or invalid content" errors in Contact Information pattern
  - Column blocks were using nested `border.color` instead of `borderColor` attribute
  - Changed to proper format: `"borderColor":"border-light"` with required CSS classes
  - Added `has-border-color` and `has-border-light-border-color` classes to column HTML
  - Pattern now validates correctly in WordPress block editor

### Added
- **Bundled placeholder images** for offline development and production use
  - Created `assets/images/patterns/` directory structure
  - Downloaded and bundled 4 professional Unsplash images (~423KB total):
    - `hero-background.jpg` (297KB) - Professional landscape for hero sections
    - `team-member-1.jpg` (40KB) - Professional headshot
    - `team-member-2.jpg` (47KB) - Professional headshot
    - `team-member-3.jpg` (39KB) - Professional headshot
  - All patterns now use `CALLANDOR_PLUGIN_URL` constant to reference bundled images
  - No external dependencies - works offline on localhost
  - Proper Unsplash License attribution for all images
- **Image credits** added to readme.txt and README.md
  - Hero background: Casey Horner
  - Team member 1: LinkedIn Sales Solutions
  - Team member 2: Christina @ wocintechchat.com
  - Team member 3: Megan Watson

### Changed
- Team Grid pattern: Updated to use bundled images instead of via.placeholder.com
- Hero Two-Tone pattern: Updated to use bundled images instead of external Unsplash URLs

### Documentation
- Added critical guidelines to CLAUDE.md for image block border-radius formatting
- Added critical guidelines to CLAUDE.md for column block border color formatting
- Added comprehensive pattern image guidelines to CLAUDE.md:
  - Always use bundled images in `assets/images/patterns/`
  - Reference with `CALLANDOR_PLUGIN_URL` constant
  - Never use external URLs in production patterns
  - Image naming conventions and size recommendations
  - Credit and licensing requirements
- Documented proper JSON structure to prevent future block validation issues

## [1.0.0-beta.7] - 2025-10-28

### Added
- New Hero Two-Tone pattern with modern design elements
  - Two-tone heading with contrasting colors (black + primary blue accent)
  - Dual CTA buttons with distinct styling (primary blue and light gray backgrounds)
  - Two-column responsive layout (text left, image right, stacks on mobile)
  - Professional typography with proper line-height and spacing
  - Rounded corners on buttons (8px) and images (12px)
  - Uses Open Sans font family for clean, professional appearance
  - Proper spacing using theme spacing scale (40, 50, 60)
  - Color contrast optimized for accessibility
  - Placeholder image from Unsplash for easy replacement

### Technical
- Pattern file: `patterns/hero/hero-two-tone.php`
- Total pattern count increased from 7 to 8 patterns
- Maintains full WordPress Coding Standards compliance
- Uses theme.json color tokens (primary, base, tertiary, main-accent)

## [1.0.0-beta.6] - 2025-10-27

### Added
- New Contact Information Section pattern with professional 3-column card layout
  - Office hours, contact details (phone/email), and physical address
  - Modern card design with subtle borders and border-radius (8px)
  - CTA button for scheduling consultations
  - Professional typography hierarchy (5xl heading, xl subheading, lg body text)
  - Proper spacing using Nynaeve theme spacing scale (20, 40, 50, 60)
  - Uses theme color system (primary, main, main-accent, tertiary, base)
- New Team Member Grid pattern with professional team profiles
  - 3-column layout with placeholder images
  - Name (2xl), role (base), and bio for each team member
  - Clean white cards on tertiary background
  - Rounded image corners (8px) for modern aesthetic
  - Consistent spacing and margin control throughout
  - Professional, ROI-focused business copy
- Created custom phpcs.xml configuration file for WordPress Coding Standards
- Updated composer.json scripts to use phpcs.xml configuration

### Fixed
- **WordPress.org Compliance**: Renamed class files to follow WordPress.org plugin repository standards
  - `class-pattern-loader.php` → `class-callandor-pattern-loader.php`
  - `class-admin-settings.php` → `class-callandor-admin-settings.php`
  - File naming now matches class names with plugin prefix (required for WordPress.org submission)
- Fixed all WordPress Coding Standards violations:
  - Added periods to end all inline comments
  - Added proper DocBlock with @param tag for `callandor_admin_enqueue_scripts()`
  - Added phpcs:ignore comment for WordPress-handled form submission check
  - Fixed spacing and alignment issues throughout codebase
- Updated require_once statements in main plugin file to use new class filenames

### Technical
- Contact and Team pattern categories now populated (previously empty directories)
- Both new patterns use consistent `var:preset|spacing` tokens
- Total pattern count increased from 5 to 7 patterns
- All files now pass WordPress Coding Standards (WPCS) checks without exceptions
- phpcs.xml excludes: vendor/, node_modules/, assets/, languages/, docs/, wordpress-stubs.php
- Plugin is now fully compliant with WordPress.org plugin repository requirements

## [1.0.0-beta.5] - 2025-10-27

### Fixed
- Fixed "Block contains unexpected or invalid content" errors in pattern blocks
- Corrected JSON attribute ordering in block markup (WordPress prefers color/text before style)
- Added missing textColor attributes to buttons for proper contrast
- Added explicit level attribute to heading blocks
- Changed inline font-size style to use theme.json fontSize preset (sm) in CTA pattern
- All patterns now validate correctly in the block editor

### Changed
- Hero pattern: Reordered block attributes, added textColor="base" to second button
- CTA Newsletter pattern: Reordered attributes, added textColor="base" to button, changed small text to use "sm" fontSize

## [1.0.0-beta.4] - 2025-10-27

### Fixed
- **CRITICAL**: Removed autoload section from composer.json that was causing immediate plugin execution
- The autoload section was loading callandor.php outside of WordPress context during composer install
- This caused fatal errors because WordPress functions were not available
- WordPress plugins should be loaded by WordPress, not by Composer's autoloader

### Technical Details
- Beta.2 and Beta.3 tried to fix function/class existence checks, but the real issue was Composer autoload
- When running `composer require imagewize/callandor`, Composer's autoloader would immediately execute callandor.php
- This happened before WordPress was loaded, causing calls to plugin_dir_path(), add_action(), etc. to fail
- Removed the entire autoload section - WordPress handles plugin loading via wp-content/plugins/
- The composer/installers package is sufficient to place the plugin in the correct directory

## [1.0.0-beta.3] - 2025-10-27

### Fixed
- Fatal error caused by missing WordPress block pattern functions
- Added function_exists() checks for register_block_pattern_category() and register_block_pattern()
- Plugin now gracefully handles WordPress environments that don't have block pattern support
- Prevents white screen of death on plugin activation

### Technical Details
- The beta.2 fix only checked for WP_Block_Pattern_Categories_Registry class existence
- This didn't prevent calls to register_block_pattern_category() function which may not exist
- Now checks for both function existence before attempting registration
- Plugin silently returns if block pattern functions are not available

## [1.0.0-beta.2] - 2025-10-27

### Fixed
- Fatal error caused by missing WP_Block_Pattern_Categories_Registry class in some WordPress environments
- Added class_exists() check before using WP_Block_Pattern_Categories_Registry to ensure compatibility

## [1.0.0-beta.1] - 2024-10-27

### Added
- Initial release of Callandor pattern library plugin
- Pattern loader class for automatic pattern registration
- Admin settings page under Appearance menu
- Pattern library browser with category organization
- 5 professionally designed starter patterns:
  - Hero Section with Call to Action
  - 3-Column Feature Grid
  - Newsletter Signup CTA
  - Client Testimonial Cards
  - 3-Column Pricing Table
- 7 pattern categories:
  - Hero Sections
  - Call to Action
  - Features
  - Testimonials
  - Pricing Tables
  - Team Members
  - Contact Sections
- Theme.json integration for colors, typography, and spacing
- Tailwind CSS utility class support
- Composer package for Bedrock installation
- WordPress Coding Standards compliance
- Admin interface with pattern management
- Custom admin CSS and JavaScript
- License key field (placeholder for Phase 2)
- Pattern enable/disable functionality
- Pattern metadata display (title, slug, category)
- Responsive admin interface
- Full documentation (README.md, readme.txt, PLUGIN_SPEC.md)

### Technical Details
- WordPress 6.6+ compatibility
- PHP 8.2+ requirement
- MIT License
- Follows WordPress plugin directory structure
- PSR-4 autoloading support
- Hook system for extensibility

### Documentation
- Comprehensive README.md for GitHub
- WordPress.org compatible readme.txt
- Detailed build specification (PLUGIN_SPEC.md)
- Code comments following PHPDoc standards
- Installation instructions for multiple methods

### Developer Features
- Clean, documented codebase
- WordPress Coding Standards (WPCS) compliant
- Composer scripts for code quality checks
- PHPStan static analysis configuration
- Git repository with proper .gitignore
- Contributing guidelines
- GitHub Actions workflows for CI/CD

### CI/CD
- GitHub Actions workflow for automated plugin ZIP creation on release
- WPCS check on pull requests
- Automated testing pipeline

### Beta Release Notes
This is a beta release for testing with Nynaeve and Moiraine themes. The plugin is feature-complete for Phase 1 MVP and follows WordPress coding standards. Please report any issues via GitHub.

**Testing Environment:**
- Local: Trellis/Bedrock setup with Nynaeve theme
- Installation: `composer require imagewize/callandor`
- Admin: Appearance → Callandor Patterns

## Future Versions

### [1.1.0] - Planned
- Additional pattern variations
- Pattern import/export functionality
- Enhanced admin UI with pattern previews
- Search and filter patterns in admin

### [2.0.0] - Planned
- Premium pattern library
- License key validation system
- Remote pattern API client
- Pattern caching and synchronization
- Multi-site support
- Advanced pattern customization options

---

[Unreleased]: https://github.com/imagewize/callandor/compare/v1.0.0-beta.1...HEAD
[1.0.0-beta.1]: https://github.com/imagewize/callandor/releases/tag/v1.0.0-beta.1
