export default function () {
	const queryDesktop = window.matchMedia("(max-width: 1279.98px)");

	const submenuParent = document.querySelectorAll(".menu-item-has-children");

	function showSubmenu() {
		submenuParent.forEach(function (parent) {
			const toggler = document.createElement("button");
			toggler.innerHTML = '<svg xmlns ="http://www.w3.org/2000/svg" width="13.129" height="7.501" viewBox="0 0 13.129 7.501"><path id="Path_23" data-name="Path 23" d="M-.662-1.213a.939.939,0,0,0,1.327,0L6.29-6.838a.939.939,0,0,0,0-1.327.939.939,0,0,0-1.327,0L0-3.2l-4.963-4.96a.939.939,0,0,0-1.327,0,.939.939,0,0,0,0,1.327L-.665-1.21Z" transform="translate(6.565 8.44)" fill="#e73031" /></svg>';
			toggler.setAttribute("data-element", "submenu-toggler");
			parent.appendChild(toggler);
			parent.querySelector("a").addEventListener("click", function (event) {
				event.preventDefault();
			});
		});
	}

	function adjustShowMenu() {
		submenuParent.forEach((parent) => {
			const submenu = parent.querySelector('[data-element="submenu"]');
			const toggler = parent.querySelector('[data-element="submenu-toggler"]');
			if (queryDesktop.matches) {
				toggler.addEventListener("click", function () {
					jQuery(submenu).stop().slideToggle(300);
					toggler.classList.toggle("max-xl:rotate-180");
				});
			} else {
				toggler.removeEventListener("click", function () {
					jQuery(submenu).stop().slideToggle(300);
					toggler.classList.toggle("max-xl:rotate-180");
				});
			}
		});
	}

	showSubmenu();

	adjustShowMenu();

	jQuery(window).resize(function () {
		adjustShowMenu();
	});
}
