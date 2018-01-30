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
var triggers = document.querySelectorAll('.has-children');
var submenu = document.querySelector('.submenu');

for ( var i=0, len = triggers.length; i < len; i++ ) {
	triggers[i].addEventListener('click', function(e) {
		e.preventDefault();
		this.classList.toggle('is-active');
		console.log(this.childNodes);
		this.childNodes[3].classList.toggle('is-active');
	});
}
