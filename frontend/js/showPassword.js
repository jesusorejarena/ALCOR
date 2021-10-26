document.getElementById('ShowPassword').addEventListener('click', () => {
	let change = document.getElementById('contrasena');
	let icon = document.getElementById('iconEye');

	if (change.type == 'password') {
		change.type = 'text';
		icon.className = 'fas fa-eye-slash';
	} else {
		change.type = 'password';
		icon.className = 'fas fa-eye';
	}
});