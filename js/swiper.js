const seconds = 2.5;

var swiperDesktop = new Swiper(".desktop-swiper", {
	slidesPerView: 3,
	spaceBetween: 30,
	centeredSlides: true,
	loop: true,
	autoplay: {
		delay: seconds * 1000,
		disableOnInteraction: false
	}
});

var swiperMobile = new Swiper(".mobile-swiper", {
	slidesPerView: 1,
	spaceBetween: 15,
	centeredSlides: true,
	loop: true,
	autoplay: {
		delay: seconds * 1000,
		disableOnInteraction: false
	}
});
