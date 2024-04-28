
function analizarTexto() {
    var texto = document.getElementById("txtarea").value
    var palabras = texto.split(" ")
    
    // Número de palabras
    var numPalabras = palabras.length
    
    // Primera palabra
    var primeraPalabra = palabras[0]
    
    // Última palabra
    var ultimaPalabra = palabras[palabras.length - 1]
    
    // Palabras en orden inverso
    var palabrasInverso = palabras.slice().reverse()
    
    // Palabras ordenadas de la a la z
    var palabrasOrdenadasAZ = palabras.slice().sort()
    
    // Palabras ordenadas de la z a la a
    var palabrasOrdenadasZA = palabrasOrdenadasAZ.slice().reverse()
    

    // Crear una nueva ventana para mostrar los resultados
    var resultadosVentana = window.open("", "_blank")
    resultadosVentana.document.write(`
        <h2>Resultado del Análisis de Texto</h2>
        <p>Texto: ${palabras}</p>
        <p>Número de palabras: ${numPalabras}</p>
        <p>Primera palabra: ${primeraPalabra}</p>
        <p>Última palabra: ${ultimaPalabra}</p>
        <p>Palabras en orden inverso: ${palabrasInverso.join(" ")}</p>
        <p>Palabras ordenadas de la a la z: ${palabrasOrdenadasAZ.join(" ")}</p>
        <p>Palabras ordenadas de la z a la a: ${palabrasOrdenadasZA.join(" ")}</p>
    `)

    return false
}