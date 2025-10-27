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
