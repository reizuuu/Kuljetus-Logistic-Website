	</main>

	<footer class="site-footer">
		<div class="container site-footer__inner">
			<div class="site-footer__brand">
				<span class="site-logo__mark">KULJETUS</span>
				<p><?php esc_html_e( 'KULJETUS arranges transport for goods purchased from online stores abroad, delivered to addresses in Finland.', 'kuljetus' ); ?></p>
			</div>

			<nav class="site-footer__nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'kuljetus' ); ?>">
				<h2><?php esc_html_e( 'Navigation', 'kuljetus' ); ?></h2>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'site-footer__list',
						'fallback_cb'    => 'kuljetus_default_footer_nav',
						'depth'          => 1,
					)
				);
				?>
			</nav>

			<div class="site-footer__contact" id="contact">
				<h2><?php esc_html_e( 'Contact', 'kuljetus' ); ?></h2>
				<ul>
					<li><?php esc_html_e( 'Phone: [CLIENT PHONE NUMBER]', 'kuljetus' ); ?></li>
					<li><?php esc_html_e( 'Email: [CLIENT EMAIL]', 'kuljetus' ); ?></li>
					<li><?php esc_html_e( 'Address: [COMPANY ADDRESS]', 'kuljetus' ); ?></li>
					<li><?php esc_html_e( 'Customer service hours: [CUSTOMER SERVICE HOURS]', 'kuljetus' ); ?></li>
				</ul>
			</div>
		</div>

		<div class="site-footer__bottom container">
			<p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> KULJETUS. <?php esc_html_e( 'All rights reserved.', 'kuljetus' ); ?></p>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
