const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

var flkty = new Flickity( '.gallery', {
    contain: true,
    prevNextButtons: false,
    freeScroll: true,
    // autoPlay: true
});