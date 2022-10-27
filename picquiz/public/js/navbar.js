var observer = new IntersectionObserver(function (entries) {
	// no intersection with screen
	if (entries[0].intersectionRatio === 0)
		document.querySelector("nav").classList.add("isSticky");
	// fully intersects with screen
	else if (entries[0].intersectionRatio === 1)
		document.querySelector("nav").classList.remove("isSticky");
}, {
	threshold: [0, 1]
});

observer.observe(document.querySelector("#navtop"));