function calificarExamen(event) {
    event.preventDefault(); // Evita la recarga de la página

    var resultadoExamen = document.getElementById("resultadoExamen");
    var puntaje = 0;
    var respuestas = [];

    // Calificar pregunta 1
    var respuestaPregunta1 = document.querySelector('input[name="pregunta1"]:checked');
    if (respuestaPregunta1) {
        if (respuestaPregunta1.value === "Paris") {
            puntaje++;
            respuestas.push("Pregunta 1: Correcta");
        } else {
            respuestas.push("Pregunta 1: Incorrecta");
        }
    } else {
        respuestas.push("Pregunta 1: No respondida");
    }

    // Calificar pregunta 2
    var respuestaPregunta2 = document.querySelector('input[name="pregunta2"]:checked');
    if (respuestaPregunta2) {
        if (respuestaPregunta2.value === "Jupiter") {
            puntaje++;
            respuestas.push("Pregunta 2: Correcta");
        } else {
            respuestas.push("Pregunta 2: Incorrecta");
        }
    } else {
        respuestas.push("Pregunta 2: No respondida");
    }

    // Calificar pregunta 3
    var respuestaPregunta3 = document.querySelector('input[name="pregunta3"]:checked');
    if (respuestaPregunta3) {
        if (respuestaPregunta3.value === "Tokio") {
            puntaje++;
            respuestas.push("Pregunta 3: Correcta");
        } else {
            respuestas.push("Pregunta 3: Incorrecta");
        }
    } else {
        respuestas.push("Pregunta 3: No respondida");
    }

    resultadoExamen.innerHTML = `
    <br>
    <hr>
    <br>
        <h3>Resultado del Examen</h3>
        <br>
        <p>Puntaje: ${puntaje} de 3</p>
        <br>
        <ul>
            ${respuestas.map(respuesta => `<li>${respuesta}</li>`).join("")}
        </ul>
        <p><br>¡Gracias por completar el examen!</p>
    `;
}

// Agregar un manejador de eventos al formulario
var examenForm = document.getElementById("examenForm");
examenForm.addEventListener("submit", calificarExamen);