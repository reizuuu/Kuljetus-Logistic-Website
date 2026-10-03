<?php
/**
 * KULJETUS theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KULJETUS_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function kuljetus_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kuljetus' ),
			'footer'  => __( 'Footer Menu', 'kuljetus' ),
		)
	);
}
add_action( 'after_setup_theme', 'kuljetus_setup' );

if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

/**
 * Enqueue theme styles and scripts.
 */
function kuljetus_assets() {
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style( 'kuljetus-style', get_stylesheet_uri(), array(), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-header', $theme_uri . '/assets/css/header.css', array( 'kuljetus-style' ), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-buttons', $theme_uri . '/assets/css/buttons.css', array( 'kuljetus-style' ), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-hero', $theme_uri . '/assets/css/hero.css', array( 'kuljetus-style' ), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-components', $theme_uri . '/assets/css/components.css', array( 'kuljetus-style' ), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-order-form', $theme_uri . '/assets/css/order-form.css', array( 'kuljetus-style' ), KULJETUS_VERSION );
	wp_enqueue_style( 'kuljetus-footer', $theme_uri . '/assets/css/footer.css', array( 'kuljetus-style' ), KULJETUS_VERSION );

	wp_enqueue_script( 'kuljetus-main', $theme_uri . '/assets/js/main.js', array(), KULJETUS_VERSION, true );

	wp_enqueue_script( 'kuljetus-order-form', $theme_uri . '/assets/js/order-form.js', array(), KULJETUS_VERSION, true );
	wp_localize_script(
		'kuljetus-order-form',
		'kuljetusPricing',
		array(
			'tiers'    => kuljetus_get_price_tiers(),
			'currency' => 'EUR',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'kuljetus_assets' );

/**
 * PRICE DATA — REPLACE WITH CLIENT PRICING
 *
 * Single source of truth for transport pricing. Used by the price table on
 * the Prices page, the homepage pricing preview, and the live price
 * calculator in the shipping order form, so real pricing only needs to be
 * entered once, here.
 *
 * All values below are placeholders and must be replaced with the client's
 * real weight-based pricing before launch.
 */
function kuljetus_get_price_tiers() {
	return array(
		array(
			'label'      => 'Up to 10 kg',
			'min_weight' => 0,
			'max_weight' => 10,
			'price'      => 49,
		),
		array(
			'label'      => '10–20 kg',
			'min_weight' => 10,
			'max_weight' => 20,
			'price'      => 79,
		),
		array(
			'label'      => '20–30 kg',
			'min_weight' => 20,
			'max_weight' => 30,
			'price'      => 109,
		),
		array(
			'label'      => '30–40 kg',
			'min_weight' => 30,
			'max_weight' => 40,
			'price'      => 139,
		),
		array(
			'label'      => '40–50 kg',
			'min_weight' => 40,
			'max_weight' => 50,
			'price'      => 169,
		),
	);
}

/**
 * Format a euro amount for display.
 */
function kuljetus_format_price( $amount ) {
	return '€' . number_format_i18n( $amount, 0 );
}

/**
 * Fallback primary navigation, used until a menu is assigned in
 * Appearance → Menus so the header is never empty.
 */
function kuljetus_default_nav() {
	$links = array(
		home_url( '/' )              => __( 'Home', 'kuljetus' ),
		home_url( '/#prices' )       => __( 'Prices', 'kuljetus' ),
		home_url( '/#how-it-works' ) => __( 'How It Works', 'kuljetus' ),
		home_url( '/#faq' )          => __( 'FAQ', 'kuljetus' ),
		home_url( '/#contact' )      => __( 'Contact', 'kuljetus' ),
	);

	echo '<ul class="site-nav__list">';
	foreach ( $links as $url => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

/**
 * Fallback footer navigation, used until a menu is assigned to the
 * "Footer Menu" location in Appearance → Menus.
 */
function kuljetus_default_footer_nav() {
	$links = array(
		home_url( '/#prices' )       => __( 'Prices', 'kuljetus' ),
		home_url( '/#how-it-works' ) => __( 'How It Works', 'kuljetus' ),
		home_url( '/#faq' )          => __( 'FAQ', 'kuljetus' ),
		home_url( '/#order' )        => __( 'Make a Shipping Order', 'kuljetus' ),
	);

	echo '<ul class="site-footer__list">';
	foreach ( $links as $url => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

/**
 * Basic meta description for the main pages. Remove/adjust this if an SEO
 * plugin is installed later, to avoid duplicate meta tags.
 */
function kuljetus_meta_description() {
	if ( is_front_page() ) {
		$description = 'KULJETUS arranges transport for products purchased from online stores abroad, delivered to addresses in Finland. Get a shipping price estimate and place your transport order online.';
	} else {
		return;
	}

	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
}
add_action( 'wp_head', 'kuljetus_meta_description', 1 );
