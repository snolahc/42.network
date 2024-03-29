// Show an element
var show = function (elem) {
	elem.style.display = 'flex';
};

// Hide an element
var hide = function (elem) {
	elem.style.display = 'none';
};

// Toggle element visibility
var toggle = function (elem) {
	// If the element is visible, hide it
	if (window.getComputedStyle(elem).display === 'flex') {
		hide(elem);
		return;
	}
	// Otherwise, show it
	show(elem);
};
