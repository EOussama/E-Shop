// Progress Bar
function setProgressBar(progressBar, value = 0) {
	value = value > 100 ? 100 : value < 0 ? 0 : value;
	
	progressBar.style.width = `${value}%`;
	progressBar.querySelector('span.progressValue').textContent = value;
}

function incProgressBar(progressBar, value) {
	if(progressBar.querySelector('span.progressValue').textContent === '')
		progressBar.querySelector('span.progressValue').textContent = 0;
	
	setProgressBar(progressBar, Number(progressBar.querySelector('span.progressValue').textContent) + Number(value));
}

function decProgressBar(progressBar, value) {
	if(progressBar.querySelector('span.progressValue').textContent === '')
		progressBar.querySelector('span.progressValue').textContent = 0;
	
	setProgressBar(progressBar, Number(progressBar.querySelector('span.progressValue').textContent) - Number(value));
}