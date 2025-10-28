# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned for 1.0.0 Stable
- Community testing and feedback
- Performance optimizations
- Additional pattern examples

### Planned for Phase 2
- Premium pattern library with license key system
- Remote pattern synchronization
- Pattern caching with WordPress transients
- Auto-update functionality
- Additional pattern categories
- Pattern preview in admin interface

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
