<?php
/**
 * Homepage template for KULJETUS.
 */

get_header();
?>

<section class="hero">
	<div class="container hero__inner">
		<div class="hero__content">
			<h1 class="hero__title"><?php esc_html_e( 'Transport for Your Purchases Abroad — Delivered to Finland', 'kuljetus' ); ?></h1>
			<p class="hero__subtitle"><?php esc_html_e( "Bought your products from an online store abroad? We arrange the transportation to Finland. Give us your shipment details and we'll take care of the rest.", 'kuljetus' ); ?></p>

			<div class="stars">
				<span class="stars__icons" aria-hidden="true">★★★★★</span>
				<span class="stars__label"><?php esc_html_e( 'Reliable transport service', 'kuljetus' ); ?></span>
			</div>

			<div class="hero__actions">
				<a href="#order" class="btn btn--primary btn--large"><?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?></a>
				<a href="#prices" class="btn btn--secondary btn--large"><?php esc_html_e( 'View Shipping Prices', 'kuljetus' ); ?></a>
			</div>
		</div>

		<div class="hero__media">
			<svg viewBox="0 0 480 300" role="img" aria-labelledby="heroTruckTitle" xmlns="http://www.w3.org/2000/svg">
				<title id="heroTruckTitle"><?php esc_html_e( 'Delivery truck carrying packages for transport to Finland', 'kuljetus' ); ?></title>
				<rect x="0" y="248" width="480" height="6" fill="#eef2f6"></rect>
				<rect x="40" y="110" width="230" height="140" rx="8" fill="#10233f"></rect>
				<rect x="55" y="130" width="200" height="60" rx="4" fill="#1c3a63"></rect>
				<rect x="70" y="140" width="50" height="40" rx="3" fill="#d98e29"></rect>
				<rect x="135" y="140" width="50" height="40" rx="3" fill="#f4f6f9"></rect>
				<rect x="200" y="140" width="45" height="40" rx="3" fill="#d98e29"></rect>
				<path d="M270 150 h70 a20 20 0 0 1 20 20 v60 a20 20 0 0 1 -20 20 h-70 z" fill="#1c3a63"></path>
				<rect x="285" y="165" width="45" height="35" rx="4" fill="#eaf1f8"></rect>
				<circle cx="100" cy="252" r="26" fill="#16202b"></circle>
				<circle cx="100" cy="252" r="11" fill="#f4f6f9"></circle>
				<circle cx="220" cy="252" r="26" fill="#16202b"></circle>
				<circle cx="220" cy="252" r="11" fill="#f4f6f9"></circle>
				<circle cx="320" cy="252" r="26" fill="#16202b"></circle>
				<circle cx="320" cy="252" r="11" fill="#f4f6f9"></circle>
			</svg>
		</div>
	</div>
</section>

<section class="section section--alt" id="what-we-do">
	<div class="container">
		<h2><?php esc_html_e( 'What KULJETUS Does', 'kuljetus' ); ?></h2>
		<p class="section-lead"><?php esc_html_e( 'You purchase your products directly from an online store abroad. KULJETUS is the separate transport service that arranges delivery of that purchase to an address in Finland. We do not sell any products — we transport what you have already bought.', 'kuljetus' ); ?></p>
	</div>
</section>

<section class="section" id="how-it-works">
	<div class="container">
		<h2><?php esc_html_e( 'How It Works', 'kuljetus' ); ?></h2>
		<p class="section-lead"><?php esc_html_e( "From your purchase abroad to delivery in Finland — here's the complete process.", 'kuljetus' ); ?></p>
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

<section class="section section--alt" id="prices">
	<div class="container">
		<h2><?php esc_html_e( 'Shipping Prices', 'kuljetus' ); ?></h2>
		<p class="section-lead"><?php esc_html_e( 'Know approximately what your transport will cost before you order.', 'kuljetus' ); ?></p>

		<div class="price-grid">
			<?php foreach ( kuljetus_get_price_tiers() as $tier ) : ?>
				<div class="price-card">
					<span class="price-card__label"><?php echo esc_html( $tier['label'] ); ?></span>
					<span class="price-card__amount"><?php echo esc_html( kuljetus_format_price( $tier['price'] ) ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>

		<p class="price-note"><?php esc_html_e( 'Prices may depend on destination, package count, weight and other shipment details.', 'kuljetus' ); ?></p>

		<div>
			<h3><?php esc_html_e( 'What Affects Pricing', 'kuljetus' ); ?></h3>
			<ul class="info-list">
				<li><strong><?php esc_html_e( 'Weight', 'kuljetus' ); ?></strong> — <?php esc_html_e( 'the primary factor in your transport price.', 'kuljetus' ); ?></li>
				<li><strong><?php esc_html_e( 'Number of packages', 'kuljetus' ); ?></strong> — <?php esc_html_e( '[ADDITIONAL PACKAGE PRICING RULES TO BE CONFIRMED BY CLIENT]', 'kuljetus' ); ?></li>
				<li><strong><?php esc_html_e( 'Destination', 'kuljetus' ); ?></strong> — <?php esc_html_e( 'pricing currently applies to deliveries within Finland.', 'kuljetus' ); ?></li>
			</ul>
		</div>
	</div>
</section>

<section class="section order-section" id="order">
	<div class="container">
		<h2><?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?></h2>
		<p class="section-lead"><?php esc_html_e( 'Tell us about your purchase and shipment. It only takes a few minutes.', 'kuljetus' ); ?></p>

		<div class="order-progress" id="order-progress">
			<ol class="order-progress__list">
				<li class="order-progress__step is-active" data-step="1">
					<span class="order-progress__number">1</span>
					<span class="order-progress__label"><?php esc_html_e( 'Purchase', 'kuljetus' ); ?></span>
				</li>
				<li class="order-progress__step" data-step="2">
					<span class="order-progress__number">2</span>
					<span class="order-progress__label"><?php esc_html_e( 'Shipment', 'kuljetus' ); ?></span>
				</li>
				<li class="order-progress__step" data-step="3">
					<span class="order-progress__number">3</span>
					<span class="order-progress__label"><?php esc_html_e( 'Delivery', 'kuljetus' ); ?></span>
				</li>
				<li class="order-progress__step" data-step="4">
					<span class="order-progress__number">4</span>
					<span class="order-progress__label"><?php esc_html_e( 'Price', 'kuljetus' ); ?></span>
				</li>
				<li class="order-progress__step" data-step="5">
					<span class="order-progress__number">5</span>
					<span class="order-progress__label"><?php esc_html_e( 'Confirm', 'kuljetus' ); ?></span>
				</li>
			</ol>
		</div>

		<form class="order-form" id="order-form" novalidate>

			<fieldset class="order-step" data-step-panel="1">
				<legend><?php esc_html_e( 'Step 1 of 5 — Purchase', 'kuljetus' ); ?></legend>

				<div class="form-field">
					<label for="purchase-source"><?php esc_html_e( 'Where did you purchase your goods?', 'kuljetus' ); ?></label>
					<select id="purchase-source" name="purchase_source" required>
						<option value=""><?php esc_html_e( 'Select an option', 'kuljetus' ); ?></option>
						<option value="online_store"><?php esc_html_e( 'Online store', 'kuljetus' ); ?></option>
						<option value="other"><?php esc_html_e( 'Other', 'kuljetus' ); ?></option>
					</select>
					<p class="form-error" id="error-purchase-source" role="alert"></p>
				</div>

				<div class="form-field">
					<label for="order-number"><?php esc_html_e( 'Order number', 'kuljetus' ); ?> <span class="form-optional">(<?php esc_html_e( 'optional', 'kuljetus' ); ?>)</span></label>
					<input type="text" id="order-number" name="order_number" autocomplete="off">
					<p class="form-hint"><?php esc_html_e( 'Found in your order confirmation email, if you have it.', 'kuljetus' ); ?></p>
				</div>
			</fieldset>

			<fieldset class="order-step" data-step-panel="2" hidden>
				<legend><?php esc_html_e( 'Step 2 of 5 — Shipment', 'kuljetus' ); ?></legend>

				<div class="form-field">
					<label for="package-count"><?php esc_html_e( 'How many packages?', 'kuljetus' ); ?></label>
					<div class="stepper">
						<button type="button" class="stepper__btn" data-stepper="decrease" aria-label="<?php esc_attr_e( 'Decrease package count', 'kuljetus' ); ?>">&minus;</button>
						<input type="number" id="package-count" name="package_count" value="1" min="1" max="50" inputmode="numeric" required>
						<button type="button" class="stepper__btn" data-stepper="increase" aria-label="<?php esc_attr_e( 'Increase package count', 'kuljetus' ); ?>">+</button>
					</div>
					<p class="form-error" id="error-package-count" role="alert"></p>
				</div>

				<div class="form-field">
					<label for="package-weight"><?php esc_html_e( 'Estimated total weight (kg)', 'kuljetus' ); ?></label>
					<input type="number" id="package-weight" name="package_weight" min="1" max="1000" step="0.5" inputmode="decimal" required>
					<p class="form-hint"><?php esc_html_e( 'An estimate is fine — this helps us show you an approximate price.', 'kuljetus' ); ?></p>
					<p class="form-error" id="error-package-weight" role="alert"></p>
				</div>
			</fieldset>

			<fieldset class="order-step" data-step-panel="3" hidden>
				<legend><?php esc_html_e( 'Step 3 of 5 — Delivery', 'kuljetus' ); ?></legend>

				<div class="form-field">
					<label for="postal-code"><?php esc_html_e( 'Postal code', 'kuljetus' ); ?></label>
					<input type="text" id="postal-code" name="postal_code" inputmode="numeric" pattern="[0-9]{5}" required>
					<p class="form-hint"><?php esc_html_e( '5-digit Finnish postal code.', 'kuljetus' ); ?></p>
					<p class="form-error" id="error-postal-code" role="alert"></p>
				</div>

				<div class="form-field">
					<label for="city"><?php esc_html_e( 'City', 'kuljetus' ); ?></label>
					<input type="text" id="city" name="city" required>
					<p class="form-error" id="error-city" role="alert"></p>
				</div>

				<div class="form-field">
					<span class="form-static-label"><?php esc_html_e( 'Delivery country', 'kuljetus' ); ?></span>
					<p class="form-static-value"><?php esc_html_e( 'Finland', 'kuljetus' ); ?></p>
					<p class="form-hint"><?php esc_html_e( 'KULJETUS currently delivers to addresses in Finland.', 'kuljetus' ); ?></p>
				</div>
			</fieldset>

			<fieldset class="order-step" data-step-panel="4" hidden>
				<legend><?php esc_html_e( 'Step 4 of 5 — Price', 'kuljetus' ); ?></legend>

				<div class="price-estimate">
					<span class="price-estimate__label"><?php esc_html_e( 'Estimated transport price', 'kuljetus' ); ?></span>
					<span class="price-estimate__amount" id="price-estimate-amount">€0</span>
				</div>

				<ul class="order-summary-list">
					<li><span><?php esc_html_e( 'Weight', 'kuljetus' ); ?></span><strong id="summary-weight-4">—</strong></li>
					<li><span><?php esc_html_e( 'Packages', 'kuljetus' ); ?></span><strong id="summary-packages-4">—</strong></li>
					<li><span><?php esc_html_e( 'Destination', 'kuljetus' ); ?></span><strong id="summary-destination-4">—</strong></li>
				</ul>

				<p class="form-hint"><?php esc_html_e( 'This is an estimate based on weight. Final pricing may vary depending on destination, package count and other shipment details.', 'kuljetus' ); ?></p>
			</fieldset>

			<fieldset class="order-step" data-step-panel="5" hidden>
				<legend><?php esc_html_e( 'Step 5 of 5 — Confirm', 'kuljetus' ); ?></legend>

				<h3><?php esc_html_e( 'Your transport order', 'kuljetus' ); ?></h3>
				<ul class="order-summary-list">
					<li><span><?php esc_html_e( 'Purchase', 'kuljetus' ); ?></span><strong id="summary-purchase">—</strong></li>
					<li><span><?php esc_html_e( 'Order number', 'kuljetus' ); ?></span><strong id="summary-order-number">—</strong></li>
					<li><span><?php esc_html_e( 'Packages', 'kuljetus' ); ?></span><strong id="summary-packages">—</strong></li>
					<li><span><?php esc_html_e( 'Weight', 'kuljetus' ); ?></span><strong id="summary-weight">—</strong></li>
					<li><span><?php esc_html_e( 'Destination', 'kuljetus' ); ?></span><strong id="summary-destination">—</strong></li>
					<li><span><?php esc_html_e( 'Estimated transport', 'kuljetus' ); ?></span><strong id="summary-price">—</strong></li>
				</ul>

				<div class="form-field">
					<label for="contact-email"><?php esc_html_e( 'Email address', 'kuljetus' ); ?></label>
					<input type="email" id="contact-email" name="contact_email" required>
					<p class="form-hint"><?php esc_html_e( "We'll use this to confirm your transport order.", 'kuljetus' ); ?></p>
					<p class="form-error" id="error-contact-email" role="alert"></p>
				</div>
			</fieldset>

			<div class="order-form__nav">
				<button type="button" class="btn btn--ghost" id="order-back" hidden><?php esc_html_e( 'Back', 'kuljetus' ); ?></button>
				<button type="button" class="btn btn--primary" id="order-next"><?php esc_html_e( 'Continue', 'kuljetus' ); ?></button>
				<button type="submit" class="btn btn--primary" id="order-submit" hidden><?php esc_html_e( 'Confirm Order', 'kuljetus' ); ?></button>
			</div>
		</form>

		<div class="order-success" id="order-success" tabindex="-1" hidden>
			<h3><?php esc_html_e( "Thank you — we've received your details", 'kuljetus' ); ?></h3>
			<p><?php esc_html_e( 'This shipping order flow is a working preview. Order submission is not yet connected to our booking system — our team will contact you at the email address you provided once it is live.', 'kuljetus' ); ?></p>
		</div>
	</div>
</section>

<section class="section" id="why-kuljetus">
	<div class="container">
		<h2><?php esc_html_e( 'Why KULJETUS', 'kuljetus' ); ?></h2>
		<div class="value-grid">
			<div class="value-card">
				<h3><?php esc_html_e( 'Clear pricing', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'Weight-based pricing you can check before you order.', 'kuljetus' ); ?></p>
			</div>
			<div class="value-card">
				<h3><?php esc_html_e( 'Simple ordering', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'A short, guided order form with no unnecessary questions.', 'kuljetus' ); ?></p>
			</div>
			<div class="value-card">
				<h3><?php esc_html_e( 'Reliable transport', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'We handle the transportation of your purchase to Finland.', 'kuljetus' ); ?></p>
			</div>
			<div class="value-card">
				<h3><?php esc_html_e( 'Finnish-based support', 'kuljetus' ); ?></h3>
				<p><?php esc_html_e( 'Support from a Finnish team when you need it.', 'kuljetus' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section section--alt" id="important-information">
	<div class="container">
		<h2><?php esc_html_e( 'Important Information', 'kuljetus' ); ?></h2>
		<ul class="info-list">
			<li><?php esc_html_e( 'KULJETUS is a transport service. We do not sell alcohol or any other products — we transport goods that you have already purchased from another store.', 'kuljetus' ); ?></li>
			<li><?php esc_html_e( 'You are responsible for completing your purchase directly with the seller before placing a transport order with us.', 'kuljetus' ); ?></li>
			<li><?php esc_html_e( 'Please make sure the products you purchase can legally be transported and imported to Finland.', 'kuljetus' ); ?></li>
			<li><?php esc_html_e( '[ADDITIONAL SHIPMENT / IMPORT INFORMATION TO BE PROVIDED BY CLIENT]', 'kuljetus' ); ?></li>
		</ul>
	</div>
</section>

<section class="section" id="faq">
	<div class="container">
		<h2><?php esc_html_e( 'Frequently Asked Questions', 'kuljetus' ); ?></h2>
		<div class="faq-list">

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How does the transport service work?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'You purchase your products directly from an online store abroad, then place a transport order with KULJETUS. We arrange transportation of your purchase to an address in Finland.', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'Where can I purchase my products?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'You can purchase from any online store abroad that ships the products you would like transported to Finland. KULJETUS is not affiliated with any specific store.', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How do I create a transport order?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'Use the Make a Shipping Order form on this website. It only takes a few minutes — tell us about your purchase, shipment and delivery address.', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How is the transport price calculated?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'Transport price is calculated primarily based on the weight of your shipment. See our Prices page for the full price table.', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'What information do I need?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( "You'll need basic details about your purchase, the number of packages, an estimated weight, and your delivery address in Finland.", 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How many packages can I send?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( "There's no fixed minimum — tell us how many packages you have and their estimated weight, and we'll show you an estimated price. [MAXIMUM PACKAGE LIMIT TO BE CONFIRMED BY CLIENT]", 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How is the shipment delivered?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( '[DELIVERY METHOD / COURIER INFORMATION TO BE PROVIDED BY CLIENT]', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'How do I track my shipment?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( '[SHIPMENT TRACKING INFORMATION TO BE PROVIDED BY CLIENT]', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'What happens after I place the order?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'After you submit your transport order, our team will review the details and contact you to confirm the transport and next steps.', 'kuljetus' ); ?></p>
				</div>
			</div>

			<div class="faq-item">
				<button class="faq-item__question" aria-expanded="false">
					<span><?php esc_html_e( 'Who should I contact if I have a question?', 'kuljetus' ); ?></span>
					<span class="faq-item__icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-item__answer" hidden>
					<p><?php esc_html_e( 'You can reach our customer service using the contact details in the footer of this website.', 'kuljetus' ); ?></p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="section final-cta">
	<div class="container final-cta__inner">
		<h2><?php esc_html_e( 'Ready to Arrange Your Transport?', 'kuljetus' ); ?></h2>
		<p><?php esc_html_e( "Tell us about your purchase and we'll show you an estimated price in minutes.", 'kuljetus' ); ?></p>
		<a href="#order" class="btn btn--primary btn--large"><?php esc_html_e( 'Make a Shipping Order', 'kuljetus' ); ?></a>
	</div>
</section>

<?php
get_footer();
