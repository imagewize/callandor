# Nynaeve/Moiraine Theme Color Palette

This document lists the color presets available in the Nynaeve theme, which are used by Callandor patterns.

## Color Palette

| Slug | Color Code | Name | Description |
|------|------------|------|-------------|
| `primary` | `#017cb6` | Brand | Primary brand color (blue) |
| `primary-accent` | `#e6f4fb` | Brand Accent | Light blue accent |
| `primary-dark` | `#026492` | Brand Dark | Darker blue for hover states |
| `main` | `#171b23` | Contrast | Main text color (dark) |
| `main-accent` | `#465166` | Contrast Accent | Secondary text color (gray) |
| `base` | `#ffffff` | Base | White background |
| `secondary` | `#98999a` | Base Accent | Light gray |
| `tertiary` | `#f5f5f6` | Tint | Very light gray |
| `border-light` | `#ebeced` | Border Light | Light border color |
| `border-dark` | `#cbcbcb` | Border Dark | Darker border color |
| `accent-orange` | `#f97316` | Accent Orange | Warm orange for vibrant sections (e.g. reviews, CTAs) |
| `dark` | `#1a2332` | Dark | Dark blue-gray for footer, dark-background sections |

## Usage in Patterns

When creating or updating patterns, use these slugs for:
- `textColor` attribute on blocks
- `backgroundColor` attribute on blocks
- `borderColor` attribute on blocks
- `color` values in inline styles (use CSS variables like `var(--wp--preset--color--primary)`)

### Example Usage

```php
<!-- wp:heading {"textColor":"primary","fontSize":"3xl"} -->
<h3 class="has-primary-color has-text-color has-3-xl-font-size">Heading</h3>
<!-- /wp:heading -->

<!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color">Button</a></div>
<!-- /wp:button -->
```

### CSS Variables

For inline styles, use CSS variables:
- `var(--wp--preset--color--primary)` → `#017cb6`
- `var(--wp--preset--color--main)` → `#171b23`
- `var(--wp--preset--color--base)` → `#ffffff`
