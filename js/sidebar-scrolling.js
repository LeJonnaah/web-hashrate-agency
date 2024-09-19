let sections = {}

for (const section of document.getElementsByClassName("nav-section")) {
	heigth = document.getElementById("section-" + section.id).offsetHeight

	let topPosition = section.getBoundingClientRect().top + window.pageYOffset;

	if (section.id == "pagos") {
		heigth -= ($(window).height() * 0.5);
	} else if (section.id == "contacto") {
		topPosition -= ($(window).height() * 0.5);
	}

	sections[Math.floor(topPosition)] = { id: section.id, heigth: heigth };
}

function update_sidebar() {
	for (const topPosition in sections) {
		const elementPos = Number(topPosition)

		if (window.pageYOffset >= elementPos - 30 && window.pageYOffset + 30 <= (elementPos + sections[topPosition].heigth)) {
			document.getElementById(`nav-${sections[topPosition].id}`).setAttribute('class', 'nav-link is-active')
		} else {
			document.getElementById(`nav-${sections[topPosition].id}`).setAttribute('class', 'nav-link')
		}
	}
}

window.addEventListener("load", update_sidebar);
window.addEventListener("scroll", update_sidebar);
