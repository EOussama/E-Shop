window.addEventListener('load', function() {
	const
		sideMenuBG = document.getElementById('sideMenuBG'),
		sideMenu = document.getElementById('sideMenu'),
		burgerBtn = document.getElementById('burgerBtn'),
		sideMenuCloseBtn = document.getElementById('sideMenuCloseBtn');
	
	burgerBtn.addEventListener('click', function() {
		if(isSideMenuOpened() === false)
			openSideMenu();
		else
			closeSideMenu();
	});
	
	sideMenuCloseBtn.addEventListener('click', closeSideMenu);
	
	window.addEventListener('click', function(e) {
		if(e.target == sideMenuBG)
			closeSideMenu();
	});
	
	window.addEventListener('resize', function() {
		if(window.innerWidth > 900 && isSideMenuOpened() === true)
			closeSideMenu();
	});
	
	function openSideMenu() {
		sideMenuBG.style.top = '0px';
		sideMenuBG.style.display = 'block';
		document.body.style.overflowY = 'hidden';
	}
	
	function closeSideMenu() {
		sideMenuBG.style.display = 'none';
		document.body.style.overflowY = 'auto';
	}
	
	function isSideMenuOpened() {
		return (sideMenuBG.style.display === 'block') ? true : false;
	}
});