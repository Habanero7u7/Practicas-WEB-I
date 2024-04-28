function validarFormulario() {
    var nombreUsuario = document.getElementById("nombreUsuario").value;
    var nombreCompleto = document.getElementById("nombreCompleto").value;
    var contrasenia = document.getElementById("contrasenia").value;
    var repetirContrasenia = document.getElementById("repetirContrasenia").value;
    var correoElectronico = document.getElementById("correoElectronico").value;
    var sexo = document.querySelector('input[name="sexo"]:checked');
    var hobbies = document.querySelectorAll('input[name="hobbies"]:checked');
    var estadoCivil = document.getElementById("estadoCivil").value;
    var calle = document.getElementById("calle").value;
    var numeroInterior = document.getElementById("numeroInterior").value;
    var colonia = document.getElementById("colonia").value;
    var estado = document.getElementById("estado").value;
    var pais = document.getElementById("pais").value;
    var codigoPostal = document.getElementById("codigoPostal").value;

    // Validación de campos no vacíos
    if (
        nombreUsuario === "" ||
        nombreCompleto === "" ||
        contrasenia === "" ||
        repetirContrasenia === "" ||
        correoElectronico === "" ||
        !sexo ||
        hobbies.length === 0 ||
        estadoCivil === "" ||
        calle === "" ||
        numeroInterior === "" ||
        colonia === "" ||
        estado === "" ||
        pais === "" ||
        codigoPostal === ""
    ) {
        mostrarError("Por favor, complete todos los campos obligatorios.");
        return false;
    }

    // Validación de contraseñas coincidentes
    if (contrasenia !== repetirContrasenia) {
        mostrarError("Las contraseñas no coinciden.");
        return false;
    }

    // Validación de correo electrónico válido
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!correoElectronico.match(emailPattern)) {
        mostrarError("Ingrese un correo electrónico válido.");
        return false;
    }

    // Validación de código postal válido (5 dígitos numéricos)
    if (!/^\d{5}$/.test(codigoPostal)) {
        mostrarError("El código postal debe contener 5 dígitos numéricos.");
        return false;
    }

    // Si todas las validaciones pasan, el formulario se envía
    mostrarExito("Registro exitoso. ¡Gracias!");

    return false;
}

function mostrarError(mensaje) {
    var resultadoRegistro = document.getElementById("resultadoRegistro");
    resultadoRegistro.innerHTML = `<p class="error">${mensaje}</p>`;
}

function mostrarExito(mensaje) {
    var resultadoRegistro = document.getElementById("resultadoRegistro");
    resultadoRegistro.innerHTML = `<p class="exito">${mensaje}</p>`;
}