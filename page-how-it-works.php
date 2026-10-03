<?php
/**
 * Template for the How It Works page (page slug: how-it-works).
 */

get_header();
?>

<section class="section page-hero">
	<div class="container">
		<h1><?php esc_html_e( 'How It Works', 'kuljetus' ); ?></h1>
		<p class="section-lead"><?php esc_html_e( "From your purchase abroad to delivery in Finland — here's the complete process.", 'kuljetus' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="steps-grid steps-grid--detailed">
			<div class="step-card">
				<span class="step-card__number">1</span>
				<h3><?php esc_html_e( 'Purchase from the online store', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'Choose your products and complete your purchase directly with the online store abroad. KULJETUS is not involved in this purchase.', 'kuljetus' ); ?></p>
			</div>
			<div class="step-card">
				<span class="step-card__number">2</span>
				<h3><?php esc_html_e( 'Receive your order confirmation', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'The store will send you an order confirmation. Keep this — you may want to reference your order number when placing your transport order.', 'kuljetus' ); ?></p>
			</div>
			<div class="step-card">
				<span class="step-card__number">3</span>
				<h3><?php esc_html_e( 'Create your transport order', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'Use our Make a Shipping Order form to tell us about your purchase, the shipment (packages and weight), and your delivery address in Finland.', 'kuljetus' ); ?></p>
			</div>
			<div class="step-card">
				<span class="step-card__number">4</span>
				<h3><?php esc_html_e( 'Shipment handling', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( '[SHIPMENT PICKUP / HANDLING PROCESS TO BE PROVIDED BY CLIENT]', 'kuljetus' ); ?></p>
			</div>
			<div class="step-card">
				<span class="step-card__number">5</span>
				<h3><?php esc_html_e( 'Transportation', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'We arrange transportation of your shipment from the seller to Finland.', 'kuljetus' ); ?></p>
			</div>
			<div class="step-card">
				<span class="step-card__number">6</span>
				<h3><?php esc_html_e( 'Delivery to Finland', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'Your shipment is delivered according to the transport arrangement confirmed with you. [DELIVERY METHOD DETAILS TO BE PROVIDED BY CLIENT]', 'kuljetus' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section final-cta">
	<div class="container final-cta__inner">
		<h2><?php esc_html_e( 'Ready to Arrange Your Transport?', 'kuljetus' ); ?></h2>
		<a href="<?php echo esc_url( home_url( '/#order' ) ); ?>" class="btn btn--primary btn--large"><?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?></a>
	</div>
</section>

<?php
get_footer();
