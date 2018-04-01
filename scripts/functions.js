function saveMessage(message) {
	let xhr = new XMLHttpRequest();
	
	xhr.open('POST', "\\E-Shop\\utils\\savemessage.php", true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.send(`username=${message.username}&subject=${message.subject}&body=${message.body}`);
}

function registerUser(user) {
	let xhr = new XMLHttpRequest();
	
	xhr.open('POST', "\\E-Shop\\utils\\registeruser.php", true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.send(``);
}