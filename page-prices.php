<?php
/**
 * Template for the Prices page (page slug: prices).
 */

get_header();
?>

<section class="section page-hero">
	<div class="container">
		<h1><?php esc_html_e( 'Shipping Prices', 'kuljetus' ); ?></h1>
		<p class="section-lead"><?php esc_html_e( 'Weight-based transport pricing so you know approximately what to expect before you order.', 'kuljetus' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="price-table-wrap">
			<table class="price-table">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Shipment weight', 'kuljetus' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Transport price', 'kuljetus' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( kuljetus_get_price_tiers() as $tier ) : ?>
						<tr>
							<td><?php echo esc_html( $tier['label'] ); ?></td>
							<td><?php echo esc_html( kuljetus_format_price( $tier['price'] ) ); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<p class="price-note"><?php esc_html_e( 'Prices may depend on destination, package count, weight and other shipment details. The table above provides an estimate based on total shipment weight.', 'kuljetus' ); ?></p>
	</div>
</section>

<section class="section section--alt">
	<div class="container two-col">
		<div>
			<h2><?php esc_html_e( 'What Affects Pricing', 'kuljetus' ); ?></h2>
			<ul class="info-list">
				<li><strong><?php esc_html_e( 'Weight', 'kuljetus' ); ?></strong> — <?php esc_html_e( 'the primary factor in your transport price.', 'kuljetus' ); ?></li>
				<li><strong><?php esc_html_e( 'Number of packages', 'kuljetus' ); ?></strong> — <?php esc_html_e( '[ADDITIONAL PACKAGE PRICING RULES TO BE CONFIRMED BY CLIENT]', 'kuljetus' ); ?></li>
				<li><strong><?php esc_html_e( 'Destination', 'kuljetus' ); ?></strong> — <?php esc_html_e( 'pricing currently applies to deliveries within Finland.', 'kuljetus' ); ?></li>
			</ul>
		</div>
		<div>
			<h2><?php esc_html_e( 'Before You Order', 'kuljetus' ); ?></h2>
			<p><?php esc_html_e( "You'll get an exact estimate once you enter your shipment details in the order form. No account is required to see your price.", 'kuljetus' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/#order' ) ); ?>" class="btn btn--primary"><?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
