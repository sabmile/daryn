const navbar = document.querySelector('.navbar');
document.addEventListener("DOMContentLoaded", function(){
	window.addEventListener('scroll', function() {
		if (window.scrollY > 200) {
			navbar.classList.add('fixed-top');
			// document.getElementById('navbar_top').classList.add('fixed-top');
			// add padding top to show content behind navbar
			// navbar_height = document.querySelector('.navbar').offsetHeight;
			// document.body.style.paddingTop = navbar_height + 'px';
		} else {
			navbar.classList.remove('fixed-top');
			// document.getElementById('navbar_top').classList.add('fixed-toe');
			// document.getElementById('navbar_top').classList.remove('fixed-top');
				// remove padding top from body
			document.body.style.paddingTop = '0';
		}
	});
});