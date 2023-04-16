
/* Funcion validar formulario */
		function validarFormulario() {
		    // Obtener los valores de los campos "Nombre" y "Email"
		    const nombre = document.getElementById("nome").value;
		    const email = document.getElementById("email").value;

		    // Validar el campo "Nombre"
		    if (nombre.length < 5) {
		        alert("El nombre debe tener al menos 5 caracteres");
		        return false; // Detener el envío del formulario
		    }

		    // Validar el campo "Email"
		    const regexEmail = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/; // Expresión regular para validar el correo electrónico
		    if (!regexEmail.test(email)) {
		        alert("El correo electrónico debe contener al menos una mayúscula, una minúscula y un número");
		        return false; // Detener el envío del formulario
		    }

		    // Si se pasaron todas las validaciones, enviar el formulario
		    return true;
		}
