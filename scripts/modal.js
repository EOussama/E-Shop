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
		contactModalOpenBtn = document.getElementById('contactModalOpenBtn'),
		sideMenuContactModalOpenBtn = document.getElementById('sideMenuContactModalOpenBtn'),
		useTermsModalBG = document.getElementById('useTermsModalBG'),
		useTermsModal = document.getElementById('useTermsModal'),
		useTermsModalOpenBtn = document.getElementById('useTermsModalOpenBtn'),
		useTermsModalCloseBtn = document.getElementById('useTermsModalCloseBtn');
	
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
	
	useTermsModalOpenBtn.addEventListener('click', function() {
		if(isModalOpened(useTermsModalBG))
			closeModal(useTermsModalBG);
		else
			openModal(useTermsModalBG);
	});
	
	sideMenuContactModalOpenBtn.addEventListener('click', function(e) {
		if(isModalOpened(contactModalBG))
			closeModal(contactModalBG);
		else {
			openModal(contactModalBG);
			e.target.parentNode.parentNode.parentNode.parentNode.style.display = 'none';
		}
	});
	
	loginModalCloseBtn.addEventListener('click', function() {
		closeModal(loginModalBG);
	});
	
	contactModalCloseBtn.addEventListener('click', function() {
		closeModal(contactModalBG);
	});
	
	useTermsModalCloseBtn.addEventListener('click', function() {
		closeModal(useTermsModalBG);
	});
	
	window.addEventListener('click', function(e) {
		if(e.target == loginModalBG)
			closeModal(loginModalBG);
		else if(e.target == contactModalBG)
			closeModal(contactModalBG);
		else if(e.target == useTermsModalBG)
			closeModal(useTermsModalBG);
	});
	
	loginForm.addEventListener('submit', function(e) {
		e.preventDefault();

	});
	
	contactForm.addEventListener('submit', function(e) {
		e.preventDefault();
		let message = {
			username: this.childNodes[1].value,
			subject: this.childNodes[3].value,
			body: this.childNodes[5].value
		}
		
		saveMessage(message);
		
		closeModal(contactModalBG);
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