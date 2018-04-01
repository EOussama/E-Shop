var
	passwordInput = document.getElementById('passwordInput');

function check(element) {
	if(element.value !== passwordInput.value)
		element.setCustomValidity('The passwords do not match!');
	else
		element.setCustomValidity('');
}