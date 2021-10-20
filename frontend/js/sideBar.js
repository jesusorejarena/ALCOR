function codigo() {
	document.getElementById('sideBar').classList.toggle('active');

	document.getElementById('bars').classList.toggle('fa-bars');
	document.getElementById('bars').classList.toggle('fa-times');
}

const btnToggle = document.querySelector('.navbar-toggler');

btnToggle.addEventListener('click', function () {
	codigo();
});

const link = document.querySelector('#sideBar');

link.addEventListener('click', function () {
	codigo();
});
