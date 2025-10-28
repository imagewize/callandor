<div align="center">
  <img src="assets/images/callandor-logo.svg" alt="Callandor Plugin" width="120" height="120">

  # Callandor
</div>

<p> Pattern library for Sage 11 hybrid themes with Tailwind CSS and theme.json support </p>

[![WordPress Version](https://img.shields.io/badge/WordPress-6.6%2B-blue.svg)](https://wordpress.org/)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-purple.svg)](https://php.net/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

**Callandor** is a powerful WordPress block pattern library specifically designed for Sage 11 hybrid themes. Build beautiful, business-focused pages faster with professionally designed patterns that seamlessly integrate with your theme's design system.

## Features

- **Theme Integration**: Seamlessly integrates with theme.json colors, typography, and spacing
- **Tailwind CSS**: Built with Tailwind utility classes for modern, responsive designs
- **8 Professional Patterns**: Ready-to-use patterns for hero sections, features, CTAs, testimonials, pricing, team, and contact sections
- **Business-Focused**: Designed for SME businesses with focus on conversions and ROI
- **Easy Management**: Simple admin interface to browse and manage patterns
- **Fully Responsive**: Mobile-first designs that look great on all devices
- **Developer Friendly**: Clean code following WordPress standards with full Composer support

## Available Patterns

The plugin includes these professionally-designed patterns (all using WordPress native blocks with theme.json integration):

**Hero Sections**
- **Hero Section with Call to Action** - Classic hero with headline, description, and prominent CTA button on colored background
- **Hero Two-Tone** - Modern hero with two-tone heading, dual CTA buttons, and image in responsive two-column layout

**Features & Services**
- **3-Column Feature Grid** - Showcase services with icon placeholders, headings, and descriptions in clean grid layout

**Call-to-Actions**
- **Newsletter Signup CTA** - Email capture with heading, description, and email input form on accent background

**Social Proof**
- **Client Testimonial Cards** - Professional testimonial display with quote, author name, and company in card format

**E-Commerce & Pricing**
- **3-Column Pricing Table** - Service package comparison with features list, pricing, and CTA buttons

**Team & About**
- **Team Member Grid** - Professional team profiles with photos, names, roles, and bios in 3-column layout

**Contact & Info**
- **Contact Information Section** - Office hours, contact details, and physical address in organized 3-column card layout

All patterns are fully responsive, use theme.json design tokens, and integrate seamlessly with WordPress's native block editor.

## Requirements

- WordPress 6.6+
- PHP 8.2+
- Sage 11 hybrid theme (recommended)
- Gutenberg block editor
- theme.json support

## Installation

### Via Composer (Recommended for Bedrock)

```bash
composer require imagewize/callandor
```

### Manual Installation

1. Download the latest release
2. Upload to `/wp-content/plugins/callandor`
3. Activate through WordPress admin
4. Go to **Appearance → Callandor Patterns**

### Development Installation

```bash
cd wp-content/plugins
git clone https://github.com/imagewize/callandor.git
cd callandor
composer install --dev
```

## Usage

### Inserting Patterns

1. Open the WordPress block editor
2. Click the **+** button to add a block
3. Navigate to the **Patterns** tab
4. Find patterns under Callandor categories (Hero Sections, Features, etc.)
5. Click to insert and customize

### Admin Interface

Access the pattern management interface:
- Navigate to **Appearance → Callandor Patterns**
- View all available patterns organized by category
- See pattern metadata and slugs
- Configure plugin settings (license key for Phase 2)

### Theme Integration

Patterns automatically use your theme's design tokens from `theme.json`:

**Colors:**
- `primary` - Brand color
- `primary-accent` - Brand accent
- `base` - Background color
- `main` - Text color
- Additional semantic colors

**Typography:**
- Font families from theme.json
- Font sizes (xs through 9xl)
- Consistent spacing scale

## Development

### Project Structure

```
callandor/
├── callandor.php                 # Main plugin file
├── composer.json                 # Composer configuration
├── includes/                     # PHP classes
│   ├── class-pattern-loader.php  # Pattern registration
│   └── class-admin-settings.php  # Admin interface
├── patterns/                     # Pattern files
│   ├── hero/
│   ├── cta/
│   ├── features/
│   ├── testimonials/
│   └── pricing/
├── assets/                       # CSS/JS assets
│   ├── css/admin.css
│   └── js/admin.js
└── docs/
    └── PLUGIN_SPEC.md           # Build specification
```

### Creating Custom Patterns

Create a new PHP file in the appropriate `patterns/` subdirectory:

```php
<?php
/**
 * Pattern: Your Pattern Name
 * Category: hero
 */

return array(
    'title'         => __( 'Your Pattern Title', 'callandor' ),
    'description'   => __( 'Pattern description', 'callandor' ),
    'categories'    => array( 'hero' ),
    'keywords'      => array( 'hero', 'header', 'landing' ),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group -->
        <!-- Your block markup here -->
        <!-- /wp:group -->',
);
```

### Coding Standards

This project follows WordPress Coding Standards (WPCS):

```bash
# Check coding standards
composer phpcs

# Fix coding standards automatically
composer phpcbf

# Run static analysis
composer phpstan
```

## Theme Compatibility

### Nynaeve Theme

Callandor is built specifically for the Nynaeve theme with full integration:
- All theme.json colors and fonts
- Tailwind utility classes
- Responsive spacing system

### Moiraine Theme

Future compatibility planned for Moiraine theme (same architecture as Nynaeve).

### Other Themes

Will work with any theme using:
- WordPress block editor
- theme.json configuration
- Modern WordPress features

Visual results may vary based on theme styling.

## Roadmap

### Phase 1 (Current - v1.0.0-beta.7)
- ✅ Local pattern library
- ✅ Theme.json integration
- ✅ Admin interface
- ✅ 8 professional patterns (Hero, Features, CTA, Testimonials, Pricing, Team, Contact)
- ✅ Composer support
- ✅ WordPress Coding Standards compliance
- ✅ WordPress.org plugin repository ready

### Phase 2 (Planned)
- Premium pattern library
- License key system
- Remote pattern updates
- Pattern caching
- Additional categories

### Future
- Pattern variations
- Custom pattern builder
- Import/export functionality
- Multi-language support
- Advanced filtering

## Contributing

We welcome contributions! Here's how you can help:

1. **Report Bugs**: [Open an issue](https://github.com/imagewize/callandor/issues)
2. **Suggest Features**: [Start a discussion](https://github.com/imagewize/callandor/discussions)
3. **Submit Patterns**: Fork, create, and submit a pull request
4. **Improve Docs**: Help us improve documentation

### Development Setup

```bash
git clone https://github.com/imagewize/callandor.git
cd callandor
composer install
```

### Pull Request Process

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-pattern`)
3. Commit your changes (`git commit -m 'Add amazing pattern'`)
4. Push to branch (`git push origin feature/amazing-pattern`)
5. Open a Pull Request

## Support

- **Documentation**: [GitHub Wiki](https://github.com/imagewize/callandor/wiki)
- **Issues**: [GitHub Issues](https://github.com/imagewize/callandor/issues)
- **Discussions**: [GitHub Discussions](https://github.com/imagewize/callandor/discussions)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Credits

- **Author**: [Jasper Frumau](https://magewize.com)
- **Company**: [Imagewize](https://imagewize.com)
- **Built for**: [Sage 11](https://roots.io/sage/) by Roots.io
- **Inspired by**: Modern block pattern libraries like Spectra
- **Logo**: Sparkle icon from [Blade UI Kit](https://blade-ui-kit.com/blade-icons/untitledui-star-04) (Untitled UI Star 04)

### Image Credits

Pattern placeholder images are sourced from [Unsplash](https://unsplash.com) under the Unsplash License:

- **Hero background**: Photo by [Casey Horner](https://unsplash.com/@mischievous_penguins)
- **Team member 1**: Photo by [LinkedIn Sales Solutions](https://unsplash.com/@linkedinsalesnavigator)
- **Team member 2**: Photo by [Christina @ wocintechchat.com](https://unsplash.com/@wocintechchat)
- **Team member 3**: Photo by [Megan Watson](https://unsplash.com/@megwatsonphoto)

All images are used for demonstration purposes and can be easily replaced with your own images when using the patterns.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for detailed version history.

---

**Made with ❤️ for the WordPress community**
