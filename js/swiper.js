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

new Swiper('.swiper-members', {

	slidesPerView: 7,

	spaceBetween: 0,

	// grid: {
	// 	rows: 2,
	// },

	loop: true,

	autoplay: {
		delay: 1000,
	},

	breakpoints: {
		1024: {
			slidesPerView: 9,
		},
	}
	
});


new Swiper('.swiper-members--reverse', {

	slidesPerView: 7,

	spaceBetween: 0,

	// grid: {
	// 	rows: 2,
	// },

	loop: true,

	autoplay: {
		delay: 1000,
		reverseDirection: true,
	},

	breakpoints: {
		1024: {
			slidesPerView: 9,
		},
	}

});