(function () {
	"use strict";

	var form = document.getElementById("order-form");

	if (!form) {
		return;
	}

	var TOTAL_STEPS = 5;
	var currentStep = 1;

	var progressSteps = document.querySelectorAll("#order-progress .order-progress__step");
	var panels = form.querySelectorAll(".order-step");
	var nextBtn = document.getElementById("order-next");
	var backBtn = document.getElementById("order-back");
	var submitBtn = document.getElementById("order-submit");
	var successEl = document.getElementById("order-success");
	var progressEl = document.getElementById("order-progress");

	/* Price tiers are provided by PHP (see kuljetus_get_price_tiers()) via wp_localize_script,
	   so the pricing shown here always matches the Prices page. */
	var pricingTiers = (window.kuljetusPricing && window.kuljetusPricing.tiers) || [];

	function calculateTier(weight) {
		if (!weight || weight <= 0) {
			return null;
		}

		for (var i = 0; i < pricingTiers.length; i++) {
			if (weight <= parseFloat(pricingTiers[i].max_weight)) {
				return pricingTiers[i];
			}
		}

		return pricingTiers.length ? pricingTiers[pricingTiers.length - 1] : null;
	}

	function showStep(step) {
		panels.forEach(function (panel) {
			var panelStep = parseInt(panel.getAttribute("data-step-panel"), 10);
			panel.hidden = panelStep !== step;
		});

		progressSteps.forEach(function (item) {
			var itemStep = parseInt(item.getAttribute("data-step"), 10);
			item.classList.toggle("is-active", itemStep === step);
			item.classList.toggle("is-complete", itemStep < step);
		});

		backBtn.hidden = step === 1;
		nextBtn.hidden = step === TOTAL_STEPS;
		submitBtn.hidden = step !== TOTAL_STEPS;

		if (step === 4) {
			updatePriceStep();
		}

		if (step === 5) {
			updateSummary();
		}

		var legend = form.querySelector('[data-step-panel="' + step + '"] legend');

		if (legend) {
			legend.setAttribute("tabindex", "-1");
			legend.focus();
		}
	}

	function clearError(field) {
		field.classList.remove("has-error");
		var errorEl = document.getElementById("error-" + field.id);

		if (errorEl) {
			errorEl.textContent = "";
		}
	}

	function setError(field, message) {
		field.classList.add("has-error");
		var errorEl = document.getElementById("error-" + field.id);

		if (errorEl) {
			errorEl.textContent = message;
		}
	}

	function validateStep(step) {
		var valid = true;
		var panel = form.querySelector('[data-step-panel="' + step + '"]');

		if (!panel) {
			return true;
		}

		var fields = panel.querySelectorAll("[required]");

		fields.forEach(function (field) {
			clearError(field);
			var value = field.value.trim();

			if (!value) {
				setError(field, "This field is required.");
				valid = false;
				return;
			}

			if (field.id === "package-count") {
				var count = parseInt(value, 10);
				if (isNaN(count) || count < 1) {
					setError(field, "Enter at least 1 package.");
					valid = false;
				}
			}

			if (field.id === "package-weight") {
				var weight = parseFloat(value);
				if (isNaN(weight) || weight <= 0) {
					setError(field, "Enter a valid weight greater than 0.");
					valid = false;
				}
			}

			if (field.id === "postal-code" && !/^[0-9]{5}$/.test(value)) {
				setError(field, "Enter a valid 5-digit postal code.");
				valid = false;
			}

			if (field.id === "contact-email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
				setError(field, "Enter a valid email address.");
				valid = false;
			}
		});

		return valid;
	}

	function buildDestination() {
		var city = document.getElementById("city").value.trim();
		var postal = document.getElementById("postal-code").value.trim();

		if (!city && !postal) {
			return "—";
		}

		return [city, postal, "Finland"].filter(Boolean).join(", ");
	}

	function updatePriceStep() {
		var weight = parseFloat(document.getElementById("package-weight").value) || 0;
		var tier = calculateTier(weight);
		var amountEl = document.getElementById("price-estimate-amount");

		amountEl.textContent = tier ? "€" + tier.price : "—";

		document.getElementById("summary-weight-4").textContent = weight ? weight + " kg" : "—";
		document.getElementById("summary-packages-4").textContent = document.getElementById("package-count").value || "—";
		document.getElementById("summary-destination-4").textContent = buildDestination();
	}

	function updateSummary() {
		var weight = parseFloat(document.getElementById("package-weight").value) || 0;
		var tier = calculateTier(weight);
		var purchaseSelect = document.getElementById("purchase-source");
		var selectedOption = purchaseSelect.options[purchaseSelect.selectedIndex];

		document.getElementById("summary-purchase").textContent = selectedOption ? selectedOption.text : "—";
		document.getElementById("summary-order-number").textContent = document.getElementById("order-number").value.trim() || "Not provided";
		document.getElementById("summary-packages").textContent = document.getElementById("package-count").value || "—";
		document.getElementById("summary-weight").textContent = weight ? weight + " kg" : "—";
		document.getElementById("summary-destination").textContent = buildDestination();
		document.getElementById("summary-price").textContent = tier ? "€" + tier.price : "—";
	}

	nextBtn.addEventListener("click", function () {
		if (!validateStep(currentStep)) {
			var firstError = form.querySelector('[data-step-panel="' + currentStep + '"] .has-error');
			if (firstError) {
				firstError.focus();
			}
			return;
		}

		if (currentStep < TOTAL_STEPS) {
			currentStep++;
			showStep(currentStep);
		}
	});

	backBtn.addEventListener("click", function () {
		if (currentStep > 1) {
			currentStep--;
			showStep(currentStep);
		}
	});

	form.querySelectorAll("[data-stepper]").forEach(function (button) {
		button.addEventListener("click", function () {
			var input = document.getElementById("package-count");
			var value = parseInt(input.value, 10) || 1;
			var min = parseInt(input.min, 10) || 1;
			var max = parseInt(input.max, 10) || 999;

			if (button.getAttribute("data-stepper") === "increase") {
				value = Math.min(max, value + 1);
			} else {
				value = Math.max(min, value - 1);
			}

			input.value = value;
		});
	});

	form.addEventListener("submit", function (event) {
		event.preventDefault();

		if (!validateStep(currentStep)) {
			return;
		}

		/* No backend yet: this only confirms the flow works end-to-end.
		   Real submission will be wired up with the WooCommerce/backend integration. */
		form.hidden = true;
		progressEl.hidden = true;
		successEl.hidden = false;
		successEl.focus();
	});

	showStep(currentStep);
})();
