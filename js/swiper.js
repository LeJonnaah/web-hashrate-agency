import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

const swiper = new Swiper('.swiper', {

	slidesPerView: 1,

	spaceBetween: 30,

	grid: {
		rows: 2,
	},

	// autoplay: {
	// 	delay: 3000,
	// },

	loop: true,
	
	breakpoints: {
		1024: {
			slidesPerView: 2,
		},

		1440: {
			slidesPerView: 4,
		},

		1920: {
			slidesPerView: 4,
		},

		2560: {
			slidesPerView: 4,
		},

	}

});