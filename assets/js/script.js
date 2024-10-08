window.onload = function () {
    window.scrollTo(0, 0);  // Desplaza al inicio de la página
};

// Select the hamburger menu element
const hamburger = document.querySelector(".hamburger");

// Select the navigation menu element
const navMenu = document.querySelector(".nav-menu");

// Add an event listener to the hamburger menu to toggle the mobile menu
hamburger.addEventListener("click", mobileMenu);

// Define the mobileMenu function to toggle the active class on the hamburger and navMenu elements
function mobileMenu() {
    // Toggle the active class on the hamburger element
    hamburger.classList.toggle("active");
    // Toggle the active class on the navMenu element
    navMenu.classList.toggle("active");
}

// Try or catch block to handle errors
try {
    // Create a new Flickity instance and pass the gallery element and options
    var flkty = new Flickity('.gallery', {
        // Contain the gallery within its parent element
        contain: true,
        // Hide the previous and next buttons
        prevNextButtons: false,
        // Enable free scrolling
        freeScroll: true,
        // Enable auto-play
        autoPlay: 2000,

        pauseAutoPlayOnHover: false,

        wrapAround: true,

        // Enable lazy loading
        lazyLoad: true
    });

} catch (error) {
    // Log any errors that occur during initialization
    console.log(error);
}

// Select all elements with the class "accordion"
const acc = document.getElementsByClassName("accordion");

// Initialize a variable to store the index of the current accordion element
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        this.classList.toggle("active-accordion");
        const panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.lazy');
    elements.forEach(element => {
        if (isInViewport(element)) {
            // Carga el elemento
            element.classList.remove('lazy');
            element.classList.add('lazy-loaded');
        }
    });
});

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <= 1000 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function createStars(i) {
    for (var i; i; i--) {
        drawStars();
    }
}

function drawStars() {
    var tmpStar = document.createElement('figure');
    tmpStar.className = "star";

    // Usar la altura del contenido real sin afectar la página
    var contentHeight = document.body.scrollHeight; // Altura real del contenido

    tmpStar.style.top = Math.random() * 100 + '%';  // Posición aleatoria dentro de todo el contenido
    tmpStar.style.left = Math.random() * 100 + '%';  // Posición horizontal aleatoria

    document.getElementById('stars').appendChild(tmpStar);
}



function selectStars() {
    stars = document.querySelectorAll(".star");
}

createStars(150);
selectStars();