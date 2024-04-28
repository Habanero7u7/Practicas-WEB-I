function validarFormulario() {
    // Obtener los valores de los campos
    var nombre = document.getElementById("nombre").value;
    var contrasena = document.getElementById("contrasena").value;
    var confirmContrasena = document.getElementById("confirmContrasena").value;
    
    // Validar que los campos no estén vacíos
    if (nombre === "" || contrasena === "" || confirmContrasena === "") {
      alert("Por favor, complete todos los campos.");
      return false;
    }
    
    // Validar que las contraseñas coincidan
    if (contrasena !== confirmContrasena) {
      alert("Las contraseñas no coinciden. Por favor, vuelva a ingresarlas.");
      return false;
    }
    
    // Si todo está bien, enviar el formulario
    alert("Formulario enviado correctamente.");
    return false;
  }