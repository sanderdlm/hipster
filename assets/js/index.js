/*
Hamburger menu (mobile)
*/
var burger = document.querySelector('.burger');
var menu = document.querySelector('.menu');

burger.addEventListener('click', function() {
	burger.classList.toggle('is-active');
	menu.classList.toggle('is-active');
});

/*
Nested menu's toggle
*/
var triggers = document.querySelectorAll('.has-children > a');
var submenu = document.querySelector('.submenu');

for ( var i=0, len = triggers.length; i < len; i++ ) {
	triggers[i].addEventListener('click', function(e) {
		e.preventDefault();
		this.parentElement.classList.toggle('is-active');
		this.parentElement.childNodes[3].classList.toggle('is-active');
	});
}

/*
Selection color change
*/
var colors = {
	'blue': '#6ab4cf',
	'orange': '#f67f5c',
	'green': '#6acf85'
}
var orb = document.querySelector('.orb');
var orb_color = orb.classList[1];
var styleEl = document.createElement('style'), styleSheet;
styleEl.append("::selection {background: "+colors[orb_color]+";color: #fff;}");
styleEl.append("::-moz-selection {background: "+colors[orb_color]+";color: #fff;}");
document.head.appendChild(styleEl);