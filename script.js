document.getElementById('show-all-button').addEventListener('click', function () {
	const button = this;

	button.classList.toggle('clicked');

	const content = document.querySelector('.hidden-content');
	if (content.style.display === 'none' || content.style.display === '') {
			content.style.display = 'block';
			button.textContent = 'Hide All';
	} else {
			content.style.display = 'none';
			button.textContent = 'Show All';
	}
});


