(function () {
	"use strict";

	/* Mobile menu toggle */
	var toggle = document.getElementById("menu-toggle");
	var nav = document.getElementById("site-nav");

	if (toggle && nav) {
		toggle.addEventListener("click", function () {
			var isOpen = nav.classList.toggle("is-open");
			toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
		});

		nav.querySelectorAll("a").forEach(function (link) {
			link.addEventListener("click", function () {
				nav.classList.remove("is-open");
				toggle.setAttribute("aria-expanded", "false");
			});
		});
	}

	/* FAQ accordion */
	var faqButtons = document.querySelectorAll(".faq-item__question");

	faqButtons.forEach(function (button) {
		button.addEventListener("click", function () {
			var expanded = button.getAttribute("aria-expanded") === "true";
			var answer = button.nextElementSibling;

			button.setAttribute("aria-expanded", String(!expanded));

			if (answer) {
				answer.hidden = expanded;
			}
		});
	});
})();
