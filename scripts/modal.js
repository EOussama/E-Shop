window.addEventListener('load', function() {
	const
		loginModalBG = document.getElementById('loginModalBG'),
		loginModal = document.getElementById('loginModal'),
		loginModalCloseBtn = document.getElementById('loginModalCloseBtn'),
		loginForm = document.getElementById('loginForm'),
		loginModalOpenBtn = document.getElementById('loginModalOpenBtn'),
		contactModalBG = document.getElementById('contactModalBG'),
		contactModal = document.getElementById('contactModal'),
		contactModalCloseBtn = document.getElementById('contactModalCloseBtn'),
		contactForm = document.getElementById('contactForm'),
		contactModalOpenBtn = document.getElementById('contactModalOpenBtn');
	
	loginModalOpenBtn.addEventListener('click', function() {
		if(isModalOpened(loginModalBG))
			closeModal(loginModalBG);
		else
			openModal(loginModalBG);
	});
	
	contactModalOpenBtn.addEventListener('click', function() {
		if(isModalOpened(contactModalBG))
			closeModal(contactModalBG);
		else
			openModal(contactModalBG);
	});
	
	loginModalCloseBtn.addEventListener('click', function() {
		closeModal(loginModalBG);
	});
	
	contactModalCloseBtn.addEventListener('click', function() {
		closeModal(contactModalBG);
	});
	
	window.addEventListener('click', function(e) {
		if(e.target == loginModalBG)
			closeModal(loginModalBG);
		else if(e.target == contactModalBG)
			closeModal(contactModalBG);
	});
	
	loginForm.addEventListener('submit', function(e) {
		e.preventDefault();
	});
	
	contactForm.addEventListener('submit', function(e) {
		e.preventDefault();
	});
	
	function openModal(modalBG) {		
		modalBG.style.top = '0px';
		modalBG.style.display = 'block';
		document.body.style.overflowY = 'hidden';
	}
	
	function closeModal(modalBG) {
		modalBG.style.display = 'none';
		document.body.style.overflowY = 'auto';
	}
		
	function isModalOpened(modalBG) {
		return (modalBG.style.display === 'block') ? true : false;
	}
});