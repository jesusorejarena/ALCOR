(function () {
	'use strict';
	window.addEventListener(
		'load',
		function () {
			document.getElementById('formulario')?.addEventListener(
				'submit',
				(e) => {
					let nombre = document.getElementById('nombre')?.value;
					let apellido = document.getElementById('apellido')?.value;
					let genero = document.getElementById('genero')?.value;
					let nacimiento = document.getElementById('nacimiento')?.value;
					let nacionalidad = document.getElementById('nacionalidad')?.value;
					let rif = document.getElementById('rif')?.value;
					let cedula = document.getElementById('cedula')?.value;
					let telefono = document.getElementById('telefono')?.value;
					let cargo = document.getElementById('cargo')?.value;
					let correo = document.getElementById('correo')?.value;
					let direccion = document.getElementById('direccion')?.value;
					let descripcion = document.getElementById('descripcion')?.value;
					let contrasena = document.getElementById('contrasena')?.value;
					let repetirContrasena = document.getElementById('repetirContrasena')?.value;
					let pregunta1 = document.getElementById('pregunta1')?.value;
					let respuesta1 = document.getElementById('respuesta1')?.value;
					let pregunta2 = document.getElementById('pregunta2')?.value;
					let respuesta2 = document.getElementById('respuesta2')?.value;
					let modulo = document.getElementById('modulo')?.value;
					let alfanumerico = document.getElementById('alfanumerico')?.value;
					let precio = document.getElementById('precio')?.value;
					let cantidad = document.getElementById('cantidad')?.value;
					let proveedor = document.getElementById('proveedor')?.value;
					let producto = document.getElementById('producto')?.value;
					let instagram = document.getElementById('instagram')?.value;
					let twitter = document.getElementById('twitter')?.value;

					// Validacion de nombre
					if (nombre != undefined) {
						if (nombre.length == 0) {
							mensaje(e, 'nombreDiv', 'nombre', 'Ingrese su nombre');
						} else if (nombre.length > 50) {
							mensaje(e, 'nombreDiv', 'nombre', 'El nombre es muy largo');
						} else if (nombreValidar(nombre) === false) {
							mensaje(e, 'nombreDiv', 'nombre', 'Solo caracteres alfabeticos');
						} else {
							resetearError('nombreDiv', 'nombre');
						}
					}

					// Validacion de apellido
					if (apellido != undefined) {
						if (apellido.length == 0) {
							mensaje(e, 'apellidoDiv', 'apellido', 'Ingrese su apellido');
						} else if (apellido.length > 50) {
							mensaje(e, 'apellidoDiv', 'apellido', 'El apellido es muy largo');
						} else if (nombreValidar(apellido) === false) {
							mensaje(e, 'apellidoDiv', 'apellido', 'Solo caracteres alfabeticos');
						} else {
							resetearError('apellidoDiv', 'apellido');
						}
					}

					// Validacion de genero
					if (genero != undefined) {
						if (genero.length == 0) {
							mensaje(e, 'generoDiv', 'genero', 'Seleccione el género');
						} else {
							resetearError('generoDiv', 'genero');
						}
					}

					// Validacion de nacimiento
					if (nacimiento != undefined) {
						if (nacimiento.length == 0) {
							mensaje(e, 'nacimientoDiv', 'nacimiento', 'Ingrese la fecha de nacimiento');
						} else {
							resetearError('nacimientoDiv', 'nacimiento');
						}
					}

					// Validacion de nacionalidad
					if (nacionalidad != undefined) {
						if (nacionalidad.length == 0) {
							mensaje(e, 'nacionalidadDiv', 'nacionalidad', 'Ingrese la nacionalidad');
						} else {
							resetearError('nacionalidadDiv', 'nacionalidad');
						}
					}

					// Validacion de rif
					if (rif != undefined) {
						if (rif.length == 0) {
							mensaje(e, 'rifDiv', 'rif', 'Ingrese un RIF');
						} else if (rif.length > 10) {
							mensaje(e, 'rifDiv', 'rif', 'Ingrese un RIF válido');
						} else if (rifValidar(rif) === false) {
							mensaje(e, 'rifDiv', 'rif', 'Ingrese un RIF válido');
						} else {
							resetearError('rifDiv', 'rif');
						}
					}

					// Validacion de cedula
					if (cedula != undefined) {
						if (cedula.length == 0) {
							mensaje(e, 'cedulaDiv', 'cedula', 'Ingrese la cédula');
						} else if (cedula.length > 8) {
							mensaje(e, 'cedulaDiv', 'cedula', 'Ingrese una cédula válida');
						} else if (numericoValidar(cedula) === false) {
							mensaje(e, 'cedulaDiv', 'cedula', 'Solo caracteres numericos');
						} else {
							resetearError('cedulaDiv', 'cedula');
						}
					}

					// Validacion de telefono
					if (telefono != undefined) {
						if (telefono.length == 0) {
							mensaje(e, 'telefonoDiv', 'telefono', 'Ingrese el teléfono');
						} else if (telefono.length !== 11) {
							mensaje(e, 'telefonoDiv', 'telefono', 'Ingrese un teléfono válido');
						} else if (numericoValidar(telefono) === false) {
							mensaje(e, 'telefonoDiv', 'telefono', 'Solo caracteres numericos');
						} else {
							resetearError('telefonoDiv', 'telefono');
						}
					}

					// Validacion de cargo
					if (cargo != undefined) {
						if (cargo.length == 0) {
							mensaje(e, 'cargoDiv', 'cargo', 'Seleccione un cargo');
						} else {
							resetearError('cargoDiv', 'cargo');
						}
					}

					// Validacion de correo
					if (correo != undefined) {
						if (correo.length == 0) {
							mensaje(e, 'correoDiv', 'correo', 'Ingrese un correo');
						} else if (correo.length >= 100) {
							mensaje(e, 'correoDiv', 'correo', 'El correo es muy largo');
						} else if (correoValidar(correo) === false) {
							mensaje(e, 'correoDiv', 'correo', 'Ingrese un correo válido');
						} else {
							resetearError('correoDiv', 'correo');
						}
					}

					// Validacion de direccion
					if (direccion != undefined) {
						if (direccion.length > 100) {
							mensaje(e, 'direccionDiv', 'direccion', 'La direccion es muy larga');
						} else {
							resetearError('direccionDiv', 'direccion');
						}
					}

					// Validacion de descripcion
					if (descripcion != undefined) {
						if (descripcion.length > 100) {
							mensaje(e, 'descripcionDiv', 'descripcion', 'La descripción es muy larga');
						} else {
							resetearError('descripcionDiv', 'descripcion');
						}
					}

					// Validacion de pregunta1
					if (pregunta1 != undefined) {
						if (pregunta1.length == 0) {
							mensaje(e, 'pregunta1Div', 'pregunta1', 'Seleccione su primera pregunta');
						} else {
							resetearError('pregunta1Div', 'pregunta1');
						}
					}

					// Validacion de respuesta1
					if (respuesta1 != undefined) {
						if (respuesta1.length == 0) {
							mensaje(e, 'respuesta1Div', 'respuesta1', 'Ingrese su respuesta');
						} else {
							resetearError('respuesta1Div', 'respuesta1');
						}
					}

					// Validacion de pregunta2
					if (pregunta2 != undefined) {
						if (pregunta2.length == 0) {
							mensaje(e, 'pregunta2Div', 'pregunta2', 'Seleccione su segunda pregunta');
						} else {
							resetearError('pregunta2Div', 'pregunta2');
						}
					}

					// Validacion de respuesta2
					if (respuesta2 != undefined) {
						if (respuesta2.length == 0) {
							mensaje(e, 'respuesta2Div', 'respuesta2', 'Ingrese su respuesta');
						} else {
							resetearError('respuesta2Div', 'respuesta2');
						}
					}

					// Validacion de contraseña
					if (contrasena != undefined) {
						if (contrasena.length == 0) {
							mensaje(e, 'contrasenaDiv', 'contrasena', 'Ingrese la contraseña');
						} else if (contrasena.length > 20) {
							mensaje(e, 'contrasenaDiv', 'contrasena', 'La contraseña es muy larga');
						} else if (contrasenaValidar(contrasena) === false) {
							mensaje(e, 'contrasenaDiv', 'contrasena', 'Ingrese una contraseña válida según las reglas');
						} else {
							resetearError('contrasenaDiv', 'contrasena');
						}
					}

					// Validacion de repita contraseña
					if (repetirContrasena != undefined) {
						if (repetirContrasena.length == 0) {
							mensaje(e, 'repetirContrasenaDiv', 'repetirContrasena', 'Repita la contraseña');
						} else if (contrasena === repetirContrasena) {
							resetearError('repetirContrasenaDiv', 'repetirContrasena');
						} else {
							mensaje(e, 'repetirContrasenaDiv', 'repetirContrasena', 'Las contraseñas deben ser iguales');
						}
					}

					// Validacion de cargo
					if (cargo != undefined) {
						if (cargo.length == 0) {
							mensaje(e, 'cargoDiv', 'cargo', 'Seleccione un cargo');
						} else {
							resetearError('cargoDiv', 'cargo');
						}
					}

					// Validacion de modulo
					if (modulo != undefined) {
						if (modulo.length == 0) {
							mensaje(e, 'moduloDiv', 'modulo', 'Seleccione un modulo');
						} else {
							resetearError('moduloDiv', 'modulo');
						}
					}

					// Validacion de alfanumerico
					if (alfanumerico != undefined) {
						if (alfanumerico.length == 0) {
							mensaje(e, 'alfanumericoDiv', 'alfanumerico', 'Rellene este campo');
						} else if (alfanumerico.length > 50) {
							mensaje(e, 'alfanumericoDiv', 'alfanumerico', 'Es muy largo');
						} else if (alfanumericoValidar(alfanumerico) === false) {
							mensaje(e, 'alfanumericoDiv', 'alfanumerico', 'Solo caracteres alfanumericos');
						} else {
							resetearError('alfanumericoDiv', 'alfanumerico');
						}
					}

					// Validacion de precio
					if (precio != undefined) {
						if (precio.length == 0) {
							mensaje(e, 'precioDiv', 'precio', 'Ingrese el precio');
						} else if (numericoValidar(precio) === false) {
							mensaje(e, 'precioDiv', 'precio', 'Solo caracteres numericos');
						} else {
							resetearError('precioDiv', 'precio');
						}
					}

					// Validacion de cantidad
					if (cantidad != undefined) {
						if (cantidad.length == 0) {
							mensaje(e, 'cantidadDiv', 'cantidad', 'Ingrese la cantidad');
						} else if (numericoValidar(cantidad) === false) {
							mensaje(e, 'cantidadDiv', 'cantidad', 'Solo caracteres numericos');
						} else {
							resetearError('cantidadDiv', 'cantidad');
						}
					}

					// Validacion de proveedor
					if (proveedor != undefined) {
						if (proveedor.length == 0) {
							mensaje(e, 'proveedorDiv', 'proveedor', 'Seleccione un proveedor');
						} else {
							resetearError('proveedorDiv', 'proveedor');
						}
					}

					// Validacion de producto
					if (producto != undefined) {
						if (producto.length == 0) {
							mensaje(e, 'productoDiv', 'producto', 'Seleccione un producto');
						} else {
							resetearError('productoDiv', 'producto');
						}
					}

					// Validacion de instagram
					if (instagram != undefined) {
						if (instagram.length == 0) {
							mensaje(e, 'instagramDiv', 'instagram', 'Ingrese el Instagram');
						} else if (instagram.length > 29) {
							mensaje(e, 'instagramDiv', 'instagram', 'El nombre de usuario es muy largo');
						} else if (instagramValidar(instagram) === false) {
							mensaje(e, 'instagramDiv', 'instagram', 'Ingrese un nombre de usuario valido');
						} else {
							resetearError('instagramDiv', 'instagram');
						}
					}

					// Validacion de twitter
					if (twitter != undefined) {
						if (twitter.length == 0) {
							mensaje(e, 'twitterDiv', 'twitter', 'Ingrese el Twitter');
						} else if (twitter.length > 15) {
							mensaje(e, 'twitterDiv', 'twitter', 'El nombre de usuario es muy largo');
						} else if (twitterValidar(twitter) === false) {
							mensaje(e, 'twitterDiv', 'twitter', 'Ingrese un nombre de usuario valido');
						} else {
							resetearError('twitterDiv', 'twitter');
						}
					}
				},
				false
			);
		},
		false
	);
})();

function pausa(e) {
	e.preventDefault();
	e.stopPropagation();
}

function nombreValidar(texto) {
	const nombreExpresion = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
	return nombreExpresion.test(texto);
}

function correoValidar(texto) {
	const correoExpresion = /[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/;
	return correoExpresion.test(texto);
}

function contrasenaValidar(texto) {
	const claveExpresion = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[.*/#$%&Â¡!_\-,@:;?Â¿])(?=.*[a-zA-Z.*/#$%&Â¡!_\-,@:;?Â¿]).{8,20}$/;
	return claveExpresion.test(texto);
}

function alfanumericoValidar(texto) {
	const alfanumericoExpresion = /^[a-zA-ZÀ-ÿ\u00f1\u00d10-9]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d10-9]*)*[a-zA-ZÀ-ÿ\u00f1\u00d10-9]+$/;
	return alfanumericoExpresion.test(texto);
}

function numericoValidar(texto) {
	const numericoExpresion = /[0-9]/;
	return numericoExpresion.test(texto);
}

function rifValidar(texto) {
	const cedulaExpresion = /([0-9]{8})|([-][0-9]{1})$/;
	return cedulaExpresion.test(texto);
}

function instagramValidar(texto) {
	const instagramExpresion = /^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$/;
	return instagramExpresion.test(texto);
}

function twitterValidar(texto) {
	const twitterExpresion = /(\w{4,15})\b/;
	return twitterExpresion.test(texto);
}

function mensaje(e, elem1, elem2, mensaje) {
	const caja = formulario.querySelector(`#${elem1}`);
	const input = formulario.querySelector(`#${elem2}`);
	caja.style.display = 'block';
	input.className += ' is-invalid';
	pausa(e);
	return (caja.innerHTML = mensaje);
}

function resetearError(elem1, elem2) {
	const resetCaja = formulario.querySelector(`#${elem1}`);
	const resetInput = formulario.querySelector(`#${elem2}`);
	resetCaja.style.display = '';
	resetInput.className = 'form-control is-valid';
}
