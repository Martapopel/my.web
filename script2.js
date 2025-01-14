document.getElementById('show-all-button1').addEventListener('click', function () {
	const button = this;

	button.classList.toggle('clicked2');

	const content = document.querySelector('.content-container2 .hidden-content2');
	if (content.style.display === 'none' || content.style.display === '') {
			content.style.display = 'block';
			button.textContent = 'Hide All';
	} else {
			content.style.display = 'none';
			button.textContent = 'Show All';
	}
});