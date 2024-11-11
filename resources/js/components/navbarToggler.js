export default function () {
	const queryDesktop = window.matchMedia("(min-width: 1280px)");

	const mainMenuToggler = jQuery('[data-element="main-menu-toggler"]');
	const mainMenu = jQuery('[data-element="main-menu"]');
	const submenuToggler = [jQuery(".menu-item-has-children")];

	function showMenu() {
		mainMenuToggler.click(function () {
			document.body.classList.toggle("max-xl:overflow-hidden");
			jQuery(this).toggleClass("text-helpcompRed");
			jQuery(mainMenu).toggleClass("max-xl:-translate-y-8 max-xl:opacity-0 max-xl:pointer-events-none");
			jQuery(mainMenu).find('[data-element="main-menu-wrap"]').toggleClass("max-xl:-translate-y-8");
			jQuery(mainMenu).find('[data-element="main-menu-contact"]').toggleClass("max-xl:translate-y-16");
		});
	}

	function showSubmenu() {
		submenuToggler.forEach((toggler) => {
			toggler.mouseenter(function () {
				jQuery(toggler).find('[data-element="submenu"]').stop().fadeIn(250);
			});
			toggler.mouseleave(function () {
				jQuery(toggler).find('[data-element="submenu"]').stop().fadeOut(250);
			});
		});
	}

	function adjustShowMenu() {
		if (queryDesktop.matches) {
			showSubmenu();
		} else {
			submenuToggler.forEach((toggler) => {
				toggler.unbind("mouseenter");
				toggler.unbind("mouseleave");
			});
		}
	}

	showMenu();

	adjustShowMenu();

	jQuery(window).resize(function () {
		adjustShowMenu();
	});
}
