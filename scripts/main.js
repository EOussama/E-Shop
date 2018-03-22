window.addEventListener('load', function() {
	const
		navbar = document.getElementById('navbar'),
		scrollBtn = document.getElementById('scrollBtn'),
		aboutBtn = document.getElementById('aboutBtn'),
		footer = document.getElementsByTagName('footer')[0],
		navbarOffset = navbar.offsetTop;
	
	window.addEventListener('scroll', function() {
		if(window.pageYOffset >= navbarOffset) {
			navbar.classList.add('fixed');
			scrollBtn.style.display = 'block';
		} else {
			navbar.classList.remove('fixed');
			scrollBtn.style.display = 'none';
			
		}
	});
	
	aboutBtn.addEventListener('click', function() {
		const
			scrollStep = (window.scrollY - footer.offsetTop) / 20;
			scrollTimer = setInterval(function () {
				if(window.pageYOffset < footer.offsetTop - 50) {
					window.scrollBy(0, -scrollStep);
				}
				else
					clearInterval(scrollTimer);
			}, 10);
	});
	
	scrollBtn.addEventListener('click', function() {
		const
			scrollStep = -window.scrollY / 20;
			scrollTimer = setInterval(function () {
				if(window.pageYOffset != 0) {
					window.scrollBy(0, scrollStep);
				}
				else
					clearInterval(scrollTimer);
			}, 10);
	});
});