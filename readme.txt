=== Callandor ===
Contributors: imagewize
Tags: patterns, blocks, gutenberg, sage, tailwind, block-patterns, page-builder
Requires at least: 6.6
Tested up to: 6.7
Requires PHP: 8.2
Stable tag: 1.0.0-beta.7
License: MIT
License URI: https://opensource.org/licenses/MIT

Pattern library for Sage 11 hybrid themes with Tailwind CSS and theme.json support. Build beautiful pages faster with professionally designed, business-focused block patterns.

== Description ==

**Callandor** is a powerful block pattern library specifically designed for Sage 11 hybrid themes using Tailwind CSS and modern WordPress block editor features.

= Key Features =

* **Ready-to-Use Patterns**: 5+ professionally designed patterns for common business sections
* **Theme Integration**: Seamlessly integrates with your theme's color palette and typography via theme.json
* **Tailwind CSS Support**: Built with Tailwind utility classes for modern, responsive designs
* **Business-Focused**: Designed for SME businesses with focus on conversions and ROI
* **Easy Management**: Simple admin interface to browse and manage available patterns
* **Extensible**: Built with developers in mind for easy customization and extension

= Pattern Categories =

* **Hero Sections**: Eye-catching headers with compelling calls-to-action
* **Features**: Showcase your services and capabilities
* **Call-to-Action**: Drive conversions with strategic CTAs
* **Testimonials**: Build trust with client reviews and social proof
* **Pricing Tables**: Display your service packages clearly
* **Team**: Introduce your team members
* **Contact**: Make it easy for customers to reach you

= Perfect For =

* Business websites
* Service providers
* E-commerce sites
* Marketing agencies
* Professional services
* SaaS companies
* Consulting firms

= Developer Friendly =

* Clean, documented code following WordPress coding standards
* Hook system for customization
* Pattern registration via simple PHP files
* Compatible with Bedrock and modern WordPress workflows
* Composer support for package management

= Theme Compatibility =

Designed for Sage 11 hybrid themes but works with any theme using:
* WordPress Block Editor (Gutenberg)
* theme.json configuration
* Tailwind CSS (optional but recommended)

== Installation ==

= Via WordPress Admin =

1. Upload the plugin files to `/wp-content/plugins/callandor` directory
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to Appearance → Callandor Patterns to view available patterns
4. Insert patterns from the block editor's pattern library

= Via Composer (Bedrock) =

1. Add to your composer.json:
   ```
   composer require imagewize/callandor
   ```
2. Activate the plugin through WP-CLI or WordPress admin
3. Start using patterns in the block editor

= Manual Installation =

1. Download the plugin ZIP file
2. Extract to `/wp-content/plugins/callandor`
3. Activate the plugin through the 'Plugins' menu
4. Access patterns through the block editor

== Frequently Asked Questions ==

= Does this work with any WordPress theme? =

Callandor is optimized for Sage 11 hybrid themes with Tailwind CSS. It will work with any theme that uses the WordPress block editor and theme.json, but visual results may vary based on your theme's styling.

= Can I customize the patterns? =

Yes! Once inserted, patterns become regular blocks that you can fully customize. Change colors, typography, spacing, content, and more using the block editor.

= Do I need Tailwind CSS? =

While patterns are built with Tailwind CSS utility classes, they will work with any theme that properly implements theme.json color and typography settings.

= Will more patterns be added? =

Yes! We're continuously developing new patterns. Premium pattern library coming in Phase 2 with license key support.

= Is this compatible with Gutenberg? =

Absolutely! Callandor is built specifically for the WordPress block editor (Gutenberg) and follows WordPress block pattern standards.

= Can I contribute patterns? =

Yes! This is an open-source project. Visit our GitHub repository to contribute patterns, report issues, or suggest improvements.

== Screenshots ==

1. Admin interface showing available pattern categories
2. Pattern library browser with pattern management
3. Hero section with call-to-action pattern
4. Feature grid pattern with three columns
5. Testimonial cards with client reviews
6. Pricing table comparison pattern

== Changelog ==

= 1.0.0-beta.7 - 2025-10-28 =
* Added Hero Two-Tone pattern with modern design elements
* Two-tone heading with contrasting colors (black + primary blue accent)
* Dual CTA buttons with distinct styling (primary blue and light gray backgrounds)
* Two-column responsive layout (text left, image right, stacks on mobile)
* Total pattern count increased from 7 to 8 patterns
* Professional typography with proper spacing and accessibility

= 1.0.0-beta.6 - 2025-10-27 =
* Added Contact Information Section pattern with professional 3-column card layout
* Added Team Member Grid pattern with professional team profiles
* Contact and Team pattern categories now populated (previously empty)
* Total pattern count increased from 5 to 7 patterns
* New patterns feature modern design with 8px border radius and proper spacing

= 1.0.0-beta.5 - 2025-10-27 =
* Fixed "Block contains unexpected or invalid content" errors in pattern blocks
* Corrected JSON attribute ordering in block markup
* Added missing textColor attributes to buttons for proper contrast
* All patterns now validate correctly in the block editor

= 1.0.0-beta.1 - 2024-10-27 =
* Initial release
* 5 professionally designed patterns
* 7 pattern categories
* Admin settings page
* Pattern library browser
* Theme.json integration
* Tailwind CSS support
* Composer package support
* WordPress Coding Standards compliant

== Upgrade Notice ==

= 1.0.0 =
Initial release of Callandor pattern library plugin.

== Credits ==

* Developed by [Imagewize](https://imagewize.com)
* Built for Sage 11 themes by [Roots.io](https://roots.io)
* Inspired by modern block pattern libraries

== License ==

This plugin is licensed under the MIT License.

== Support ==

For support, feature requests, or bug reports:
* GitHub: https://github.com/imagewize/callandor/issues
* Documentation: https://github.com/imagewize/callandor

== Roadmap ==

**Phase 1 (Current)**
* Local pattern library
* Theme.json integration
* Basic admin interface

**Phase 2 (Planned)**
* Premium pattern library
* License key system
* Remote pattern updates
* Pattern caching system
* Additional pattern categories
* Pattern preview in admin

**Future Enhancements**
* Pattern variations
* Custom pattern builder
* Import/export functionality
* Multi-language support
* Advanced pattern filtering
