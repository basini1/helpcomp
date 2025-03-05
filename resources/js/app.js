import about_cols from "./components/about_cols";
import navbarButtons from "./components/navbarButtons";
import navbarToggler from "./components/navbarToggler";
import scrollToTop from "./components/scrollToTop";
import swiper from "./components/swiper";
import AOS from "aos";
import "aos/dist/aos.css";

document.addEventListener("DOMContentLoaded", function () {
	about_cols();
	navbarButtons();
	navbarToggler();
	scrollToTop();
	swiper();
	AOS.init();
});
