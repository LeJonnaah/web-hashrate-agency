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

	lazy: {
		loadPrevNext: true, // pre-loads the next image to avoid showing a loading placeholder if possible
		loadPrevNextAmount: 2 //or, if you wish, preload the next 2 images
	},
	
	
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

	allowTouchMove: false,

	slidesPerView: 5,

	spaceBetween: 0,

	// grid: {
	// 	rows: 2,
	// },

	loop: true,

	autoplay: {
		delay: 500,
	},

	breakpoints: {
		1024: {
			slidesPerView: 9,
		},
	}
	
});


new Swiper('.swiper-members--reverse', {

	allowTouchMove: false,

	slidesPerView: 5,

	spaceBetween: 0,

	// grid: {
	// 	rows: 2,
	// },

	loop: true,

	autoplay: {
		delay: 500,
		reverseDirection: true,
	},

	breakpoints: {
		1024: {
			slidesPerView: 9,
		},
	}

});