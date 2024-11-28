// import Swiper JS
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper styles
import "swiper/css";
import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

export default function () {
	// related apartments
	if (document.querySelector('[data-slider="slider_single-apartment_related"]')) {
		const container = document.querySelector('[data-slider="single-apartment_related_slides"]');
		const btnNext = document.querySelector('[data-element="single-apartment_related_next"]');
		const btnPrev = document.querySelector('[data-element="single-apartment_related_prev"]');
		const pagination = document.querySelector('[data-element="single-apartment_related_pagination"]');
		const swiperSingleApartmentRelated = new Swiper(container, {
			breakpoints: {
				480: {
					slidesPerView: 2.6,
				},
				640: {
					slidesPerView: 3.45,
				},
				768: {
					slidesPerView: 4.4,
				},
				1024: {
					slidesPerView: 5.15,
				},
				1280: {
					slidesPerView: 6,
				},
			},
			// loop: true,
			modules: [Navigation, Pagination],
			navigation: {
				nextEl: btnNext,
				prevEl: btnPrev,
			},
			pagination: {
				el: pagination,
				clickable: true,
			},
			slidesPerView: 1.75,
			spaceBetween: 2,
			watchSlidesProgress: true,
		});
	}

	if (document.querySelector('[data-slider="slider_single-apartment_related2"]')) {
		const container = document.querySelector('[data-slider="single-apartment_related2_slides"]');
		const btnNext = document.querySelector('[data-element="single-apartment_related2_next"]');
		const btnPrev = document.querySelector('[data-element="single-apartment_related2_prev"]');
		const pagination = document.querySelector('[data-element="single-apartment_related2_pagination"]');
		const swiperSingleApartmentRelated2 = new Swiper(container, {
			breakpoints: {
				480: {
					slidesPerView: "auto",
					spaceBetween: 16,
				},
				640: {
					slidesPerView: 3.45,
					spaceBetween: 16,
				},
				768: {
					slidesPerView: 4.4,
					spaceBetween: 16,
				},
				1024: {
					slidesPerView: 5.15,
					spaceBetween: 16,
				},
				1280: {
					slidesPerView: 6,
					spaceBetween: 16,
				},
			},
			// loop: true,
			modules: [Navigation, Pagination],
			navigation: {
				nextEl: btnNext,
				prevEl: btnPrev,
			},
			pagination: {
				el: pagination,
				clickable: true,
			},
			slidesPerView: "auto",
			spaceBetween: 16,
			watchSlidesProgress: true,
		});
	}

	if (document.querySelector('[data-slider="slider_partners"]')) {
		const container = document.querySelector('[data-slider="partners_slides"]');
		const btnNext = document.querySelector('[data-element="partners_next"]');
		const btnPrev = document.querySelector('[data-element="partners_prev"]');
		const pagination = document.querySelector('[data-element="partners_pagination"]');
		const swiperLogoset = new Swiper(container, {
			breakpoints: {
				480: {
					slidesPerView: "auto",
				},
				640: {
					slidesPerView: 3.45,
				},
				768: {
					slidesPerView: 4.4,
				},
				1024: {
					slidesPerView: 5.15,
				},
				1280: {
					slidesPerView: 6,
				},
			},
			// loop: true,
			modules: [Navigation, Pagination],
			navigation: {
				nextEl: btnNext,
				prevEl: btnPrev,
			},
			pagination: {
				el: pagination,
				clickable: true,
			},
			slidesPerView: "auto",
			spaceBetween: 2,
			watchSlidesProgress: true,
		});
	}
}
