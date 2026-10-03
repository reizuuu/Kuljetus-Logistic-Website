<?php
/**
 * The header for the KULJETUS theme.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'kuljetus' ); ?></a>

<header class="site-header" id="site-header">
	<div class="container site-header__inner">
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="site-logo__mark">KULJETUS</span>
		</a>

		<button type="button" class="menu-toggle" id="menu-toggle" aria-expanded="false" aria-controls="site-nav">
			<span class="menu-toggle__bar"></span>
			<span class="menu-toggle__bar"></span>
			<span class="menu-toggle__bar"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'kuljetus' ); ?></span>
		</button>

		<nav class="site-nav" id="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'kuljetus' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'site-nav__list',
					'fallback_cb'    => 'kuljetus_default_nav',
					'depth'          => 1,
				)
			);
			?>
		</nav>

		<a class="btn btn--primary site-header__cta" href="<?php echo esc_url( home_url( '/#order' ) ); ?>">
			<?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?>
		</a>
	</div>
</header>

<main id="main-content" class="site-main">
