# KULJETUS WordPress Theme

A custom WordPress theme for **KULJETUS**, a Finnish transport-order service that arranges delivery of goods bought from online stores abroad to addresses in Finland.

This build covers the front end and the shipping-order experience. Backend and WooCommerce integration are planned as the next step.

## Features

- **Front page** with a hero, service overview, how-it-works steps, pricing preview, order form, "Why KULJETUS", important information, FAQ, and a closing call to action
- **Page templates** for How It Works and Prices (`page-how-it-works.php`, `page-prices.php`)
- **5-step "Make a Shipping Order" form**: Purchase, Shipment, Delivery, Price, Confirm
  - Progress indicator and step-by-step navigation
  - Validation for required fields, package count, weight, 5-digit Finnish postal code, and email format
  - Package count stepper and a final order summary
- **Live price estimate** based on weight tiers. The tiers live in one place (`kuljetus_get_price_tiers()` in `functions.php`) and feed the Prices page, the homepage preview, and the order form calculator through `wp_localize_script`
- **FAQ accordion** and a **mobile menu** with `aria-expanded` state
- **Navigation menus** for Primary and Footer locations, with fallback menus so the header is never empty
- **Accessibility**: skip link, screen-reader text, visible focus styles, and focus moved to each step's heading in the order form
- **Responsive, modular CSS**: design tokens in `style.css`, with separate files for header, buttons, hero, components, order form, and footer

## Tech Stack

- WordPress theme (PHP 7.4+, WordPress 6.0+)
- HTML5 and CSS3 (custom properties)
- Vanilla JavaScript (no libraries)

## Project Structure

```
kuljetus/
├── style.css             # Theme header and design tokens
├── functions.php         # Theme setup, asset loading, price tiers, fallback menus
├── header.php
├── footer.php
├── front-page.php        # Home page with the order form
├── index.php             # Fallback template
├── page-how-it-works.php
├── page-prices.php
└── assets/
    ├── css/              # header, buttons, hero, components, order-form, footer
    └── js/
        ├── main.js       # Mobile menu and FAQ accordion
        └── order-form.js # Multi-step form, validation, price estimate
```

## Installation

1. Zip the `kuljetus` folder (or use the zip you downloaded).
2. In WordPress, go to **Appearance > Themes > Add New > Upload Theme**, upload the zip, and activate it.
3. Create two pages with the slugs `how-it-works` and `prices` so the page templates are used.
4. Optional: assign menus under **Appearance > Menus** (Primary and Footer).

## Customizing

- **Prices:** edit `kuljetus_get_price_tiers()` in `functions.php`. All price displays and the calculator update from this one function.
- **Contact details:** edit the Contact list in `footer.php`.
- **Content placeholders:** text in `[SQUARE BRACKETS]` marks content that still needs to be filled in.

## Current Status

- The order form is front-end only. Submitting it shows a confirmation message but does not send data anywhere yet.
- The prices and some content blocks are placeholders, not real rates.

## My Role

Developer: built the theme (PHP templates, CSS, and JavaScript).

## License

GNU General Public License v2 or later.
