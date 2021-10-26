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
					let rifCompleto = document.getElementById('rifCompleto')?.value;
					let cedula = document.getElementById('cedula')?.value;
					let telefono = document.getElementById('telefono')?.value;
					let cargo = document.getElementById('cargo')?.value;
					let correo = document.getElementById('correo')?.value;
					let direccion = document.getElementById('direccion')?.value;
					let descripcion = document.getElementById('descripcion')?.value;
					let asunto = document.getElementById('asunto')?.value;
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
					let tituloBanner = document.getElementById('tituloBanner')?.value;
					let descripcionBanner = document.getElementById('descripcionBanner')?.value;
					let tituloContenido1 = document.getElementById('tituloContenido1')?.value;
					let descripcionContenido1 = document.getElementById('descripcionContenido1')?.value;
					let tituloContenido2 = document.getElementById('tituloContenido2')?.value;
					let descripcionContenido2 = document.getElementById('descripcionContenido2')?.value;
					let tituloContenido3 = document.getElementById('tituloContenido3')?.value;
					let descripcionContenido3 = document.getElementById('descripcionContenido3')?.value;
					let mision = document.getElementById('mision')?.value;
					let vision = document.getElementById('vision')?.value;
					let tituloTestimonio1 = document.getElementById('tituloTestimonio1')?.value;
					let descripcionTestimonio1 = document.getElementById('descripcionTestimonio1')?.value;
					let tituloTestimonio2 = document.getElementById('tituloTestimonio2')?.value;
					let descripcionTestimonio2 = document.getElementById('descripcionTestimonio2')?.value;
					let tituloTestimonio3 = document.getElementById('tituloTestimonio3')?.value;
					let descripcionTestimonio3 = document.getElementById('descripcionTestimonio3')?.value;
					let historia = document.getElementById('historia')?.value;

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

					// Validacion de rifCompleto
					if (rifCompleto != undefined) {
						if (rifCompleto.length == 0) {
							mensaje(e, 'rifCompletoDiv', 'rifCompleto', 'Ingrese un RIF');
						} else if (rifCompleto.length > 12) {
							mensaje(e, 'rifCompletoDiv', 'rifCompleto', 'Ingrese un RIF válido');
						} else if (rifCompletoValidar(rifCompleto) === false) {
							mensaje(e, 'rifCompletoDiv', 'rifCompleto', 'Ingrese un RIF válido');
						} else {
							resetearError('rifCompletoDiv', 'rifCompleto');
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

					// Validacion de asunto
					if (asunto != undefined) {
						if (asunto.length == 0) {
							mensaje(e, 'asuntoDiv', 'asunto', 'Ingrese un asunto');
						} else if (asunto.length > 100) {
							mensaje(e, 'asuntoDiv', 'asunto', 'El asunto es muy largo');
						} else {
							resetearError('asuntoDiv', 'asunto');
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

					// Validacion de tituloBanner
					if (tituloBanner != undefined) {
						if (tituloBanner.length == 0) {
							mensaje(e, 'tituloBannerDiv', 'tituloBanner', 'Ingrese un titulo');
						} else if (tituloBanner.length > 50) {
							mensaje(e, 'tituloBannerDiv', 'tituloBanner', 'El titulo es muy largo');
						} else {
							resetearError('tituloBannerDiv', 'tituloBanner');
						}
					}

					// Validacion de descripcionBanner
					if (descripcionBanner != undefined) {
						if (descripcionBanner.length == 0) {
							mensaje(e, 'descripcionBannerDiv', 'descripcionBanner', 'Ingrese una descripción');
						} else if (descripcionBanner.length > 200) {
							mensaje(e, 'descripcionBannerDiv', 'descripcionBanner', 'La descripción es muy larga');
						} else {
							resetearError('descripcionBannerDiv', 'descripcionBanner');
						}
					}

					// Validacion de tituloContenido1
					if (tituloContenido1 != undefined) {
						if (tituloContenido1.length == 0) {
							mensaje(e, 'tituloContenido1Div', 'tituloContenido1', 'Ingrese un titulo');
						} else if (tituloContenido1.length > 50) {
							mensaje(e, 'tituloContenido1Div', 'tituloContenido1', 'El titulo es muy largo');
						} else {
							resetearError('tituloContenido1Div', 'tituloContenido1');
						}
					}

					// Validacion de descripcionContenido1
					if (descripcionContenido1 != undefined) {
						if (descripcionContenido1.length == 0) {
							mensaje(e, 'descripcionContenido1Div', 'descripcionContenido1', 'Ingrese una descripción');
						} else if (descripcionContenido1.length > 250) {
							mensaje(e, 'descripcionContenido1Div', 'descripcionContenido1', 'La descripción es muy larga');
						} else {
							resetearError('descripcionContenido1Div', 'descripcionContenido1');
						}
					}

					// Validacion de tituloContenido2
					if (tituloContenido2 != undefined) {
						if (tituloContenido2.length == 0) {
							mensaje(e, 'tituloContenido2Div', 'tituloContenido2', 'Ingrese un titulo');
						} else if (tituloContenido2.length > 50) {
							mensaje(e, 'tituloContenido2Div', 'tituloContenido2', 'El titulo es muy largo');
						} else {
							resetearError('tituloContenido2Div', 'tituloContenido2');
						}
					}

					// Validacion de descripcionContenido2
					if (descripcionContenido2 != undefined) {
						if (descripcionContenido2.length == 0) {
							mensaje(e, 'descripcionContenido2Div', 'descripcionContenido2', 'Ingrese una descripción');
						} else if (descripcionContenido2.length > 250) {
							mensaje(e, 'descripcionContenido2Div', 'descripcionContenido2', 'La descripción es muy larga');
						} else {
							resetearError('descripcionContenido2Div', 'descripcionContenido2');
						}
					}

					// Validacion de tituloContenido3
					if (tituloContenido3 != undefined) {
						if (tituloContenido3.length == 0) {
							mensaje(e, 'tituloContenido3Div', 'tituloContenido3', 'Ingrese un titulo');
						} else if (tituloContenido3.length > 50) {
							mensaje(e, 'tituloContenido3Div', 'tituloContenido3', 'El titulo es muy largo');
						} else {
							resetearError('tituloContenido3Div', 'tituloContenido3');
						}
					}

					// Validacion de descripcionContenido3
					if (descripcionContenido3 != undefined) {
						if (descripcionContenido3.length == 0) {
							mensaje(e, 'descripcionContenido3Div', 'descripcionContenido3', 'Ingrese una descripción');
						} else if (descripcionContenido3.length > 250) {
							mensaje(e, 'descripcionContenido3Div', 'descripcionContenido3', 'La descripción es muy larga');
						} else {
							resetearError('descripcionContenido3Div', 'descripcionContenido3');
						}
					}

					// Validacion de mision
					if (mision != undefined) {
						if (mision.length == 0) {
							mensaje(e, 'misionDiv', 'mision', 'Ingrese una descripción para la misión');
						} else if (mision.length > 300) {
							mensaje(e, 'misionDiv', 'mision', 'La descripción para la misión es muy larga');
						} else {
							resetearError('misionDiv', 'mision');
						}
					}

					// Validacion de vision
					if (vision != undefined) {
						if (vision.length == 0) {
							mensaje(e, 'visionDiv', 'vision', 'Ingrese una descripción para la visión');
						} else if (vision.length > 300) {
							mensaje(e, 'visionDiv', 'vision', 'La descripción para la visión es muy larga');
						} else {
							resetearError('visionDiv', 'vision');
						}
					}

					// Validacion de tituloTestimonio1
					if (tituloTestimonio1 != undefined) {
						if (tituloTestimonio1.length == 0) {
							mensaje(e, 'tituloTestimonio1Div', 'tituloTestimonio1', 'Ingrese el nombre del testigo');
						} else if (tituloTestimonio1.length > 50) {
							mensaje(e, 'tituloTestimonio1Div', 'tituloTestimonio1', 'El nombre del testigo es muy largo');
						} else {
							resetearError('tituloTestimonio1Div', 'tituloTestimonio1');
						}
					}

					// Validacion de descripcionTestimonio1
					if (descripcionTestimonio1 != undefined) {
						if (descripcionTestimonio1.length == 0) {
							mensaje(e, 'descripcionTestimonio1Div', 'descripcionTestimonio1', 'Ingrese una descripción');
						} else if (descripcionTestimonio1.length > 250) {
							mensaje(e, 'descripcionTestimonio1Div', 'descripcionTestimonio1', 'La descripción es muy larga');
						} else {
							resetearError('descripcionTestimonio1Div', 'descripcionTestimonio1');
						}
					}

					// Validacion de tituloTestimonio2
					if (tituloTestimonio2 != undefined) {
						if (tituloTestimonio2.length == 0) {
							mensaje(e, 'tituloTestimonio2Div', 'tituloTestimonio2', 'Ingrese el nombre del testigo');
						} else if (tituloTestimonio2.length > 50) {
							mensaje(e, 'tituloTestimonio2Div', 'tituloTestimonio2', 'El nombre del testigo es muy largo');
						} else {
							resetearError('tituloTestimonio2Div', 'tituloTestimonio2');
						}
					}

					// Validacion de descripcionTestimonio2
					if (descripcionTestimonio2 != undefined) {
						if (descripcionTestimonio2.length == 0) {
							mensaje(e, 'descripcionTestimonio2Div', 'descripcionTestimonio2', 'Ingrese una descripción');
						} else if (descripcionTestimonio2.length > 250) {
							mensaje(e, 'descripcionTestimonio2Div', 'descripcionTestimonio2', 'La descripción es muy larga');
						} else {
							resetearError('descripcionTestimonio2Div', 'descripcionTestimonio2');
						}
					}

					// Validacion de tituloTestimonio3
					if (tituloTestimonio3 != undefined) {
						if (tituloTestimonio3.length == 0) {
							mensaje(e, 'tituloTestimonio3Div', 'tituloTestimonio3', 'Ingrese el nombre del testigo');
						} else if (tituloTestimonio3.length > 50) {
							mensaje(e, 'tituloTestimonio3Div', 'tituloTestimonio3', 'El nombre del testigo es muy largo');
						} else {
							resetearError('tituloTestimonio3Div', 'tituloTestimonio3');
						}
					}

					// Validacion de descripcionTestimonio3
					if (descripcionTestimonio3 != undefined) {
						if (descripcionTestimonio3.length == 0) {
							mensaje(e, 'descripcionTestimonio3Div', 'descripcionTestimonio3', 'Ingrese una descripción');
						} else if (descripcionTestimonio3.length > 250) {
							mensaje(e, 'descripcionTestimonio3Div', 'descripcionTestimonio3', 'La descripción es muy larga');
						} else {
							resetearError('descripcionTestimonio3Div', 'descripcionTestimonio3');
						}
					}

					// Validacion de historia
					if (historia != undefined) {
						if (historia.length == 0) {
							mensaje(e, 'historiaDiv', 'historia', 'Ingresa la historia de la empresa');
						} else if (historia.length > 1000) {
							mensaje(e, 'historiaDiv', 'historia', 'La historia es muy larga');
						} else {
							resetearError('historiaDiv', 'historia');
						}
					}

					/* 

					// Validacion de instagram
					if (instagram != undefined) {
						if (instagram.length == 0) {
							mensaje(e, 'instagram', 'instagram', 'Ingrese el Instagram');
						} else if (instagram.length > 29) {
							mensaje(e, 'instagram', 'instagram', 'El nombre de usuario es muy largo');
						} else if (instagramValidar(instagram) === false) {
							mensaje(e, 'instagram', 'instagram', 'Ingrese un nombre de usuario valido');
						} else {
							resetearError('instagram', 'instagram');
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
					} */
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
	const claveExpresion =
		/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[.*/#$%&Â¡!_\-,@:;?Â¿])(?=.*[a-zA-Z.*/#$%&Â¡!_\-,@:;?Â¿]).{8,20}$/;
	return claveExpresion.test(texto);
}

function alfanumericoValidar(texto) {
	const alfanumericoExpresion =
		/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d10-9]*)*[a-zA-ZÀ-ÿ\u00f1\u00d10-9]+$/;
	return alfanumericoExpresion.test(texto);
}

function numericoValidar(texto) {
	const numericoExpresion = /[0-9]/;
	return numericoExpresion.test(texto);
}

function rifCompletoValidar(texto) {
	const cedulaExpresion = /^[JGVEP][-][0-9]{8}[-][0-9]{1}$/;
	return cedulaExpresion.test(texto);
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
