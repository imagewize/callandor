# Callandor

> Pattern library for Sage 11 hybrid themes with Tailwind CSS and theme.json support

[![WordPress Version](https://img.shields.io/badge/WordPress-6.6%2B-blue.svg)](https://wordpress.org/)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-purple.svg)](https://php.net/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

**Callandor** is a powerful WordPress block pattern library specifically designed for Sage 11 hybrid themes. Build beautiful, business-focused pages faster with professionally designed patterns that seamlessly integrate with your theme's design system.

## Features

- **🎨 Theme Integration**: Seamlessly integrates with theme.json colors, typography, and spacing
- **⚡ Tailwind CSS**: Built with Tailwind utility classes for modern, responsive designs
- **📦 5+ Patterns**: Ready-to-use patterns for hero sections, features, CTAs, testimonials, and pricing
- **🎯 Business-Focused**: Designed for SME businesses with focus on conversions and ROI
- **🔧 Easy Management**: Simple admin interface to browse and manage patterns
- **📱 Fully Responsive**: Mobile-first designs that look great on all devices
- **🛠️ Developer Friendly**: Clean code following WordPress standards with full Composer support

## Pattern Categories

- **Hero Sections** - Eye-catching headers with compelling calls-to-action
- **Features** - Showcase your services and capabilities
- **Call-to-Action** - Drive conversions with strategic CTAs
- **Testimonials** - Build trust with client reviews
- **Pricing Tables** - Display service packages clearly
- **Team** - Introduce your team members
- **Contact** - Make it easy for customers to reach you

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

### Phase 1 (Current - v1.0.0)
- ✅ Local pattern library
- ✅ Theme.json integration
- ✅ Admin interface
- ✅ 5 starter patterns
- ✅ Composer support

### Phase 2 (Planned)
- 🔄 Premium pattern library
- 🔄 License key system
- 🔄 Remote pattern updates
- 🔄 Pattern caching
- 🔄 Additional categories

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

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for detailed version history.

---

**Made with ❤️ for the WordPress community**
